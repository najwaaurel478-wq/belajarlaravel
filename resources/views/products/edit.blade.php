@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Products</h3>
        <a href="{{ route('products.index')}}" class="my-3">Back</a>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('products.update', $products->id )}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ $products->name}}" class="form-control" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="images">Images</label>
                            <input type="file" name="images" id="images" class="form-control" />

                            <img src="{{ asset('storage/images/'. $products->images )}}" alt="" width="100">
                            @error('images')
                            
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="stock">Stock</label>
                            <input type="text" name="stock" id="stock" value="{{ $products->stock}}" class="form-control" />
                            @error('stock')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="unit">Unit</label>
                            <input type="text" name="unit" id="unit" value="{{ $products->unit}}" class="form-control" />
                            @error('unit')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" value="{{ $products->price}}" class="form-control" />
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="discount">Discount</label>
                            <input type="text" name="discount" id="discount" value="{{ $products->discount}}" class="form-control" />
                            @error('discount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="description">Discription</label>
                            <input type="text" name="description" id="description" value="{{ $products->description}}" class="form-control" />
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="suppliers_id">Suppliers</label>
                            <input type="text" name="suppliers_id" id="suppliers_id" value="{{ $products->suppliers_id}}" class="form-control" />
                            @error('suppliers_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>

                    </form>   
                </div>
            </div>
        </div>       

    </div>
@endsection