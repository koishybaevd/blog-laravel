<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id'
    ];
    
    public function user()
    {
        return $this::belongsTo(User::class);
    }

    public function comments()
    {
        return $this::hasMany(Comment::class)->latest();
    }

    public function tags()
    {
        return $this::belongsToMany(Tag::class);
    }

    public function category()
    {
        return $this::belongsTo(Category::class);
    }

    public function scopeArchives()
    {   
        $archives = $this->selectRaw('year(created_at) year, monthname(created_at) month, count(*)')
                        ->groupBy('year', 'month')
                        ->orderByRaw('min(created_at) desc')
                        ->get();

        return $archives;
    }

    public function scopeFilter($query, $filters)
    {
        if(isset($filters['month'])) {
            $month = $filters['month'];
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if(isset($filters['year'])) {
            $year = $filters['year'];
            $query->whereYear('created_at', $year);
        }

        if(isset($filters['tag'])) {
            $tag = $filters['tag'];
            $query->whereHas('tags', function($post) use($tag) {
                $post->where('name', $tag);
            });
        }
    }
}
