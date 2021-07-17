@extends('layouts.app')
@section('content')
    
<div class="card">
    <table id="table_id" class="table table-bordered">
        <thead>
            <tr>
                <td>Title</td>
                <td>Content</td>
            </tr>
        </thead> 
        <tbody>
            @foreach ($blog as $b)
            <tr>
                <td>{{$b->title}}</td>
                <td>{{$b->blog}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="{{route('blog.create')}}" class="btn btn-primary">Create Blog</a> --}}
</div>
<div class="card">
    <table id="table_id" class="table table-bordered">
        <thead>
            <tr>
                <td>Comment</td>
            </tr>
        </thead> 
        <tbody>
            @foreach ($com as $c)
            <tr>
                <td>{{$c->comment}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('comment.create')}}" class="btn btn-primary">Comment</a>
</div>

@endsection