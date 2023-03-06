@extends('Layouts.layout')

@section('content')
<div class="logo">
        ShareIt
    </div>
<form action="/blogs/save" method="post">
    <h3>Create Blog</h3>
    @csrf
    <label for="blog_title">Blog Title</label>
    <input type="text" id="blog_title" name="blog_title">
    <label for="blog_content">Content</label>
    <textarea name="blog_content" id="blog_content" cols="30" rows="10"></textarea>
    <button type="submit">Post</button>
</form>

@endsection