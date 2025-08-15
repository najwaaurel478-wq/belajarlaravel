@extends('layouts.app')

@section('content')
    <div class="continer">
        <h3>Detail Mobil</h3>

        <table class="table table-border table-striped">
            <tr>
                <th width="25%">Merek</th>
                <th width="10px">:</th>
                <td>{{ $mobil->merek }}</td>
            </tr>

            <tr>
                <th width="25%">Tipe</th>
                <th width="10px">:</th>
                <td>{{ $mobil->tipe }}</td>
            </tr>

            <tr>
                <th width="25%">Warna</th>
                <th width="10px">:</th>
                <td>{{ $mobil->warna }}</td>
            </tr>

            <tr>
                <th width="25%">Jumlah Roda</th>
                <th width="10px">:</th>
                <td>{{ $mobil->jumlah_roda }}</td>
            </tr>

            <tr>
                <th width="25%">Nomor Mesin</th>
                <th width="10px">:</th>
                <td>{{ $mobil->nomor_mesin }}</td>
            </tr>

            <tr>
                <th width="25%">Gambar</th>
                <th width="10px">:</th>
                <td>{{ $mobil->gambar }}</td>
            </tr>
            <tr>
                <th width="25%">DiBuat Pada</th>
                <th width="10px">:</th>
                <th>{{ Carbon\Carbon::parse($mobil->created_at)->isoFormat('DD/MM/Y HH:mm')}}</th>
            </tr>
             <tr>
                <th width="25%">DiBuat Pada</th>
                <th width="10px">:</th>
                <th>{{ Carbon\Carbon::parse($mobil->updated_at)->isoFormat('DD/MM/Y HH:mm')}}</th>
            </tr>
        </table>
         <div class="mt-3">
                <a href="{{ route('mobil.index')}}">Kembali</a>
         </div>
    </div>
@endsection