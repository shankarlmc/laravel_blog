@section('title', 'Create new Post')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                <div class="card-header bg-white"><h3 class="font-weight-bold">{{ __('Create New Post') }}</h3></div>
                <div class="card-body">
                <form method="post" action="{{ route('posts.store') }}">

                    @csrf
                    @include('posts.errors')

                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" class="input" placeholder="Title" minlength="5" maxlength="100" required />
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Content</label>
                        <div class="control">
                            <textarea name="content" class="form-control" class="textarea" placeholder="Content" minlength="5" maxlength="2000" required rows="5">{{ old('content') }}</textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Category</label>
                        <div class="control">
                            <div class="select">
                                <select name="category" class="form-control" required>
                                    <option value="" disabled selected>Select category</option>
                                    <option value="html" {{ old('category') === 'html' ? 'selected' : null }}>HTML</option>
                                    <option value="css" {{ old('category') === 'css' ? 'selected' : null }}>CSS</option>
                                    <option value="javascript" {{ old('category') === 'javascript' ? 'selected' : null }}>JavaScript</option>
                                    <option value="php" {{ old('category') === 'php' ? 'selected' : null }}>PHP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field mt-3">
                        <div class="control">
                            <button type="submit" class="btn btn-success">Create New Post</button>
                            <button type="button" class="btn btn-danger" onclick="window.history.back()">Go Back</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
