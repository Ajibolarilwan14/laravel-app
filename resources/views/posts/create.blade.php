@extends('layouts.app')

@section('content')

    <form action="/posts" method="post">
        <label for="title">Enter the post title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Enter the title for your post">

        <button type="submit" class="btn btn-primary">Submit Post</button>
    </form>

@endsection

@yield('footer')