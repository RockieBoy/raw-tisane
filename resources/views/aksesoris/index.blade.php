@extends('templates.default')

<!-- Mengubah judul -->
@php
$title = "Data Stok Aksesoris";
$preTitle = "Semua Data";
@endphp

@push('page-action')
<a href="{{ route('aksesoris.create') }}" class="btn btn-primary">+ Tambah Data Aksesoris</a>
@endpush


@section('content')
<div class="row mb-5">
    <form class="d-flex" action="/search" method="GET">
        @csrf
        <input type="text" class="form-control me-2" name="cari" placeholder="Silahkan cari data yang diperlukan disini" aria-label="Cari">
        <input type="submit" value="Cari Data" id="" class="btn btn-outline-success">
    </form>
</div>

<div class="table-responsive">
    <table class="table table-center card-table table-striped">
        <thead>
            <tr>
                <th>Foto Aksesoris</th>
                <th>Nama Aksesoris</th>
                <th>Ukuran Aksesoris</th>
                <th>Satuan Aksesoris</th>
                <th>Warna Aksesoris</th>
                <th>Jumlah Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach($aksesoris as $aksesoris)
            <tr>
                <td>
                    <img src="{{ asset('/data_file/aksesoris/'. $aksesoris->foto) }}" width="100px">
                </td>
                <td>{{ $aksesoris->nama }}</td>
                <td>{{ $aksesoris->ukuran }}</td>
                <td>{{ $aksesoris->satuan}}</td>
                <td>{{ $aksesoris->warna}}</td>
                <td>{{ $aksesoris->stok}}</td>
                <td>
                    <form action="{{ route('aksesoris.destroy', $aksesoris->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('aksesoris.edit', $aksesoris->id) }}" class="btn btn-primary">Edit</a>
                        <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection