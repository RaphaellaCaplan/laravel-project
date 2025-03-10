@extends('layouts.app')

@section('content')
    <h1>Create a Blog Post</h1>
    <form action="{{route ('posts.store')}}" method="POST"> 
        @csrf
        <div class="form-group"> 
            <label for= "title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group"> 
            <label for= "content">Content</label>
            <textarea name="content" class="form-control" required></textarea>
    
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection