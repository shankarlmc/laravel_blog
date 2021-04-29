@section('title', 'Edit '.$post->title)
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <div class="card-header bg-white"><h3 class="font-weight-bold">{{ __('Update Post') }}</h3></div>
                <div class="card-body">
                <form method="post" action="{{ route('posts.update', [$post->slug]) }}">
                    @csrf
                    @method('patch')
                    @include('posts.errors')

                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}"  placeholder="Title" minlength="5" maxlength="100" required />
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Content</label>
                        <div class="control">
                            <textarea name="content" class="form-control" placeholder="Content" minlength="5"  required rows="5">{{ $post->content }}</textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Category</label>
                        <div class="control">
                            <div class="select">
                                <select name="category" class="form-control" required>
                                    <option value="" disabled selected>Select category</option>
                                    <option value="html" {{ $post->category === 'html' ? 'selected' : null }}>HTML</option>
                                    <option value="css" {{ $post->category === 'css' ? 'selected' : null }}>CSS</option>
                                    <option value="javascript" {{ $post->category === 'javascript' ? 'selected' : null }}>JavaScript</option>
                                    <option value="php" {{ $post->category === 'php' ? 'selected' : null }}>PHP</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field mt-3 float-right">
                        <div class="control">
                            <button type="submit" class="btn btn-info">Update Post</button>
                            <a href="#" onclick="window.history.back()" class="btn btn-danger">Go Back</a>
                        </div>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
