@extends('Layouts.layout')

@section('content')
<div class="logo">
        ShareIt
    </div>
<form action="{{route('blog.update', $blog->blog_id)}}" method="POST">
    <h3>Edit Blog</h3>
    @csrf
    @method('PATCH')
    <label for="blog_title">Blog Title</label>
    <input type="text" id="blog_title" name="blog_title" value="{{$blog->blog_title}}">
    <label for="blog_content">Content</label>
    <textarea name="blog_content" id="blog_content" cols="30" rows="10">{{$blog->blog_content}}</textarea>
    <button type="submit">Edit</button>
</form>

@endsection