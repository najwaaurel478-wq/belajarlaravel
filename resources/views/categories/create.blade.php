@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Add New Category</h3>

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('category.store')}}" method="POST">
                    @csrf

                    <div class="card card-body">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" />
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="decription" class="form-label">Decription</label>
                            <textarea name="decription" id="decription" class="form-control"></textarea>
                            @error('decription')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('category.index')}}" class="btn btn-secondary">
                            Cancel
                        </a>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
@endsection