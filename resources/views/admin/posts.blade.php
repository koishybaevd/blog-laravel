@extends('admin.index')

@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                    <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>published</td>
                        <td class="d-flex">
                            <a href="#" class="btn btn-sm btn-outline-dark mr-2">Show</a>
                            <a href="#" class="btn btn-sm btn-outline-dark mr-2">Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-dark mr-2">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
