@extends('layouts.app')
@section('content')

    <form action="{{url('blog/store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="container">
            <div class="mb-3">
                <strong>Title</strong>
                <div class="col-sm-6">
                <input type="text" name="title" class="form-control" >
                </div>
            </div>
            <div class="mb-3">
                <strong>Blog</strong>
                <div class="col-sm-6">
                <textarea name="blog" class="form-control" style="height:150px"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{route('blog.index')}}" class="btn btn-warning">Back</a>
        </form>
    </div>
@endsection