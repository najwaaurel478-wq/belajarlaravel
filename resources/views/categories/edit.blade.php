@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Category</h3>
        <a href="{{ route('category.index') }}" class="my-3">Bcak</a>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mn-3">
                            <label for="id">Name</label>
                            <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mn-3">
                            <label for="id">Slug</label>
                            <input type="text" name="slug" id="slug" value="{{ $category->slug }}" class="form-control" />
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group mn-3">
                            <label for="id">Decription</label>
                            <textarea name="decription" id="decription" class="form-control">{{ $category->decription}}
                            @error('decription')
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