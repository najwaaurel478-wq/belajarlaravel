@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Articles</h3>
        <a href="{{ route('articles.index') }}" class="my-3">Back</a>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('articles.update', $articles->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mn-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{ $articles->title }}" class="form-control" />
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mn-3">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" value="{{ $articles->slug }}" class="form-control" />
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group mn-3">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control">{{ $articles->content}}</textarea>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mn-3">
                            <label for="autor">Autor</label>
                            <input type="text" name="autor" id="autor" value="{{ $articles->autor}}" class="form-control" />
                            @error('autor')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mn-3">
                            <label for="category_id">Category</label>
                            <input type="text" name="category_id" id="category_id" value="{{$articles->category_id}}" class="form-control" />
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection