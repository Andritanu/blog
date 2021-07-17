@extends('layouts.app')
  
@section('content')
    <div class="card">
        <div class="col-lg-12 margin-tb">
            {{-- <div class="pull-left">
                <h2>Happy Reading</h2>
            </div> --}}
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('blog.index') }}"> Back</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title :</strong>
                <br>
                {{ $blog->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <br>
                {{ $blog->blog }}
            </div>
        </div>
    </div>
@endsection