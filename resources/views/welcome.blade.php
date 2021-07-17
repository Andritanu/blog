@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Go to Blog') }}</div>

                <div class="card-body">
                    <a href="{{route('blog.index')}}" class="btn btn-primary">GO</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
