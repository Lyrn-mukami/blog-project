@extends('Layouts.layout')

@section('content')
    <div class="logo">
        ShareIt
    </div>
    <div class="create-blog">
      <a href="">Create Blog</a>
    </div>
    <div class="posts">
        <div class="card">
            <div id="buttons">          
                <button id="delete">Delete</button>
                <button id="edit">Edit</button>
            </div>
            <div id="content">
                <h2>SAMPLE TITLE</h2>
                <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut tempore dignissimos totam facere, dolore assumenda architecto doloribus vel amet alias hic? Vitae, minus doloremque! Voluptatum debitis aperiam nihil illum consequuntur?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, voluptates. Porro magnam, molestias consequuntur non provident laborum placeat eos quisquam perspiciatis autem dolorum animi sed nesciunt, quam tenetur facilis reprehenderit.</p>
            </div>
        </div>
    </div>
@endsection
