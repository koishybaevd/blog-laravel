@extends('admin.index')

@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col-6 col-sm-4 col-md-4">
            <div class="card text-center border-dark mb-3">
                <div class="card-header">New Posts</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">3</h5>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-4">
            <div class="card text-center border-dark mb-3">
                <div class="card-header">New Comments</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">6</h5>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-4">
            <div class="card text-center border-dark mb-3">
                <div class="card-header">New Users</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">2</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
