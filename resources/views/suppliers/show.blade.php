@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Detail Suppliers</h3>

        <table class="table table-bordered table-striped">
            <tr>
                <th width="25%">Name</th>
                <th width="10px">:</th>
                <th>{{ $suppliers->name }}</th>
            </tr>

            <tr>
                <th width="25%">Address</th>
                <th width="10px">:</th>
                <th>{{ $suppliers->address }}</th>
            </tr>

             <tr>
                <th width="25%">Province</th>
                <th width="10px">:</th>
                <th>{{ $suppliers->province }}</th>
            </tr>

             <tr>
                <th width="25%">City</th>
                <th width="10px">:</th>
                <th>{{ $suppliers->city }}</th>
            </tr>

             <tr>
                <th width="25%">Postcode</th>
                <th width="10px">:</th>
                <th>{{ $suppliers->postcode }}</th>
            </tr>

             <tr>
                <th width="25%">Phone</th>
                <th width="10px">:</th>
                <th>{{ $suppliers->phone }}</th>
            </tr>

             <tr>
                <th width="25%">Fax</th>
                <th width="10px">:</th>
                <th>{{ $suppliers->fax }}</th>
            </tr>
            <tr>
                <th width="25%">DiBuat Pada</th>
                <th width="10px">:</th>
                <th>{{ Carbon\Carbon::parse($suppliers->created_at)->isoFormat('DD/MM/Y HH:mm')}}</th>
            </tr>
             <tr>
                <th width="25%">DiBuat Pada</th>
                <th width="10px">:</th>
                <th>{{ Carbon\Carbon::parse($suppliers->updated_at)->isoFormat('DD/MM/Y HH:mm')}}</th>
            </tr>
        </table>
        <div class="mt-3">
             <a href="{{ route('suppliers.index')}}">Kembali</a>
             <a href="{{ route('suppliers.edit', $suppliers->id)}}">Edit</a>
         </div>
    </div>
@endsection