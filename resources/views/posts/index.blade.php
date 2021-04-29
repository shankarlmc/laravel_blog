@section('title','Latest Posts')
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card float-right mb-2">
        <a href="{{ route ('posts.create')}}" class="btn btn-success">Create New Post</a>
        </div>
    </div>
    @foreach ($posts as $post)
    <div class="col-md-12">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 150, $end='...') }}
                <a href="{{ route('posts.show', [$post->slug])}}" class="card-link"> learn more....</a></p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
