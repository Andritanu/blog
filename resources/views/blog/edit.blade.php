@extends('layouts.app')
@section('content')
    
    <form action="{{route('blog.update', $blog->id)}}" method="POST">
        @csrf
        @method('PATCH')
    <div class="container">
            <div class="mb-3">
                <strong>Title</strong>
                <div class="col-sm-6">
                <input type="text" name="title" class="form-control" value="{{$blog->title}}">
                </div>
            </div>
            <div class="mb-3">
                <strong>Blog</strong>
                <div class="col-sm-6">
                <input type="text" name="blog" class="form-control" value="{{$blog->blog}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('blog.index')}}" class="btn btn-warning">Back</a>
        </form>
    </div>
@endsection