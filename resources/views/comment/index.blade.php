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
                <td>
                    <form action="{{route('blog.destroy', $b->id)}}" onsubmit="return confirm('Ar u sure ?');" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{route('blog.edit', $b->id)}}" class="btn btn-success">Update</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
<div class="card">
    <table id="table_id" class="table table-bordered">
        <thead>
            <tr>
                <td>Comment</td>
                <td>Act</td>
            </tr>
        </thead> 
        <tbody>
            @foreach ($com as $c)
            <tr>
                <td>{{$c->comment}}</td>
                <td>
                    <form action="{{route('comment.destroy', $c->id)}}" onsubmit="return confirm('Ar u sure ?');" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{route('comment.edit', $c->id)}}" class="btn btn-success">Update</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('comment.create')}}" class="btn btn-primary">Comment</a>
</div>

@endsection