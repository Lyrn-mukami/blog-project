@extends('Layouts.layout')

@section('content')
    <div class="logo">
         <h1>ShareIt</h1>
         <h4>Enlighten each other</h4>
    </div>
    <div class="create-blog">
      <a href="/blogs/create">Create Blog</a>
    </div>
    @if(session()->has('message'))
    <div class="warning">
        <div class="warning_title">
            Warning
        </div>
        <div class="warning_content">
            {{ session()->get('message') }}
        </div>
    @endif
    </div>
    @foreach($blogs as $blog)
    <div class="posts">
        <div class="card">
            <div id="buttons">          
            <form action="{{route('blog.destroy', $blog->blog_id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button style="color:red; background-color:transparent; margin-right:0px;">Delete</button>
            </form>
           <a href="{{route('blog.edit', $blog->blog_id)}}">Edit</a>
            </div>
            <div id="content">
                
                <h2>{{$blog->blog_title}}</h2>
                <p>
                {{$blog->blog_content}}</p>
                
            </div>
        </div>
    </div>
    @endforeach
@endsection
