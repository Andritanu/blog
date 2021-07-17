@extends('layouts.app')
@section('content')

    <form action="{{url('comment/store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="container">
            <div class="mb-3">
                <strong>Blog</strong>
                <div class="col-sm-6">
                    <select name="id_blog">
                        <option>--Pilih--</option>
                        @foreach($blog as $b)
                        <option value="{{$b->id}}" name="id_blog">{{$b->title}}</option>
                        @endforeach
                    </select><br>
                </div>
            </div>
            <div class="mb-3">
                <strong>Comment</strong>
                <div class="col-sm-6">
                <textarea name="comment" class="form-control" style="height:100px"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{route('comment.index')}}" class="btn btn-warning">Back</a>
        </form>
    </div>
@endsection