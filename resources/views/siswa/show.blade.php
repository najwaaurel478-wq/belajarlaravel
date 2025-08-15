@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Detail Siswa</h3>

        <table class="table table-bordered table-striped">
            <tr>
                <th width="25%">NIS</th>
                <th width="10px">:</th>
                <th>{{ $siswa->nis}}</th>
            </tr>
            <tr>
                <th width="25%">Nama</th>
                <th width="10px">:</th>
                <th>{{ $siswa->nama}}</th>
            </tr>
            <tr>
                <th width="25%">Umur</th>
                <th width="10px">:</th>
                <th>{{ $siswa->umur}}</th>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <th width="10px">:</th>
                <td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'}}</td>
            </tr>
            <tr>
                <th width="25%">Tempat, Tanggal ahir</th>
                <th width="10px">:</th>
                <th>{{ $siswa->tempat_lahir}},{{ Carbon\Carbon::parse($siswa->tanggal_lahir)->isoFormat('DD MMMM Y')}}</th>
            </tr>
            <tr>
                <th width="25%">Alamat</th>
                <th width="10px">:</th>
                <th>{{ $siswa->alamat}}</th>
            </tr>
            <tr>
                <th width="25%">Nomor Telepon</th>
                <th width="10px">:</th>
                <th>{{ $siswa->no_telp}}</th>
            </tr>
            <tr>
                <th width="25%">DiBuat Pada</th>
                <th width="10px">:</th>
                <th>{{ Carbon\Carbon::parse($siswa->created_at)->isoFormat('DD/MM/Y HH:mm')}}</th>
            </tr>
             <tr>
                <th width="25%">DiBuat Pada</th>
                <th width="10px">:</th>
                <th>{{ Carbon\Carbon::parse($siswa->updated_at)->isoFormat('DD/MM/Y HH:mm')}}</th>

            </tr>
            </table>

            <div class="mt-3">
                <a href="{{ route('siswa.index')}}">Kembali</a>
                <a href="{{ route('siswa.edit', $siswa->id)}}">Edit</a>
            </div>
    </div>
@endsection