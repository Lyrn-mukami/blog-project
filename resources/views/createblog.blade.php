@extends('Layouts.layout')

@section('content')
<form action="" method="post">
    <label for="blog-title">Blog Title</label>
    <input type="text" id="blog-title">
    <label for="blog-content">Content</label>
    <input type="text" id="blog-content">
    <button type="submit">Post</button>
</form>

@endsection