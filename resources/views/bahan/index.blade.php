@extends('templates.default')

<!-- Mengubah judul -->
@php
$title = "Data Bahan-Bahan";
$preTitle = "Semua Data";
@endphp

@push('page-action')
<a href="{{ route('bahan.create') }}" class="btn btn-primary">+ Tambah Data Bahan</a>
@endpush


@section('content')

<div class="row mb-5">
    <form class="d-flex" action="/cari" method="GET">
        @csrf
        <input type="text" class="form-control me-2" name="search" placeholder="Silahkan cari data yang diperlukan disini" aria-label="Cari">
        <input type="submit" value="Cari Data" id="" class="btn btn-outline-success">
    </form>
</div>

<div class="table-responsive">
    <table class="table table-center card-table table-striped">
        <thead>
            <tr>
                <th>Foto Bahan</th>
                <th>Nama Bahan</th>
                <th>Jenis Bahan</th>
                <th>Jumlah Stok (Kg)</th>
                <th>Nomor Container</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach($bahan as $bahan)
            <tr>
                <td>
                    <img src="{{ url('/data_file/bahan/'.$bahan-> foto) }}" width="100px">
                </td>
                <td>{{ $bahan->nm_bahan }}</td>
                <td>{{ $bahan->jenisBahan->nama }}</td>
                <td>{{ $bahan->stok }}</td>
                <td>{{ $bahan->nomor_container }}</td>
                <td>
                    <form action="{{ route('bahan.destroy', $bahan->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('bahan.edit', $bahan->id) }}" class="btn btn-primary">Edit</a>
                        <input type="submit" value="Hapus" class="btn btn-danger">
                    </form>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection