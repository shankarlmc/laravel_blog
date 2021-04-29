@section('title', $post->title)
@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{!! nl2br(e($post->content)) !!}</p>
            <p class="font-weight-bold">Posted on : <span class="text-info">{{ $post->created_at->diffForHumans()}}</span></p>
            <p class="font-weight-bold">Category : <span class="text-success"> {{ $post->category}}</span></p>
            @guest
            <button type="button" class="btn btn-danger" onclick="window.history.back()">Go Back</button>
            @else
            <form method="post" action="{{ route('posts.destroy', [$post->slug]) }}">
                @csrf @method('delete')
                <a href="{{ route ('posts.edit', [$post->slug])}}" class="btn btn-info ">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <button type="button" class="btn btn-danger" onclick="window.history.back()">Go Back</button>
            @endguest
        </div>
        </div>
    </div>
</div>
</div>
@endsection
