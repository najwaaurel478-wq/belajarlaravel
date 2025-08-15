@extends('layouts.app')

@section('content')
    <div class="container">
    <h3>Products</h3>

    <a href="{{ route('products.index') }}" class="my-3">Kembali</a>

    <table class="table table-striped">
        <tr>
            <td colspan="2">
                <img src="{{ asset('storage/images/' . $products->images) }}" width="300">
            </td>
        </tr>
        <tr>
            <th width="25%">Name</th>
            <th width="10px">:</th>
            <td>{{ $products->name }}</td>
        </tr>

        <tr>
            <th width="25%">Images</th>
            <th width="10px">:</th>
            <td>{{ $products->images }}</td>
        </tr>

        <tr>
            <th width="25%">Stock</th>
            <th width="10px">:</th>
            <td>{{ $products->stock }}</td>
        </tr>

        <tr>
            <th width="25%">Unit</th>
            <th width="10px">:</th>
            <td>{{ $products->unit }}</td>
        </tr>

        <tr>
            <th width="25%">Price</th>
            <th width="10px">:</th>
            <td>{{ $products->price }}</td>
        </tr>

        <tr>
            <th width="25%">Discount</th>
            <th width="10px">:</th>
            <td>{{ $products->discount }}</td>
        </tr>

        <tr>
            <th width="25%">Description</th>
            <th width="10px">:</th>
            <td>{{ $products->description }}</td>
        </tr>

        <tr>
                    <th width="25%">Suppliers</th>
                    <th width="10px">:</th>
                    <td>{{ $products->suppliers_id }}</td>
                </tr>
         <tr>
                <th width="25%">DiBuat Pada</th>
                <th width="10px">:</th>
                <th>{{ Carbon\Carbon::parse($products->created_at)->isoFormat('DD/MM/Y HH:mm')}}</th>
            </tr>
             <tr>
                <th width="25%">DiBuat Pada</th>
                <th width="10px">:</th>
                <th>{{ Carbon\Carbon::parse($products->updated_at)->isoFormat('DD/MM/Y HH:mm')}}</th>
            </tr>
    </table>
        <div class="mt-3">
            <a href="{{ route('products.index')}}" class="btn btn-primary">Back</a>
            <a href="{{ route('products.edit', $products->id)}}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
@endsection