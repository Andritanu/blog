@extends('layouts.app')
@section('content')
    
    <form action="{{route('comment.update', $comment->id)}}" method="POST">
        @csrf
        @method('PATCH')
    <div class="container">
            <div class="mb-3">
                <strong>Blog</strong>
                <div class="col-sm-6">
                    <select name="id_blog">
                        @foreach($blog as $b)
                        <option
                        @if ($com->id_blog == $b->id)
                            selected
                        @endif
                        value={{$b->id}}>{{$b->blog}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <strong>Comment</strong>
                <div class="col-sm-6">
                <input type="text" name="comment" class="form-control" value="{{$com->comment}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('comment.index')}}" class="btn btn-warning">Back</a>
        </form>
    </div>
@endsection