@if(Session::has('message'))
<div class="sidebar-module">
    <div class="alert alert-info" role="alert">
        <p>{{ Session::get('message') }}</p>
    </div>
</div>
@endif
