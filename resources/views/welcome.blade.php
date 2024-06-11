@extends('templates.default')

@section('content')
<h1>Selamat Datang di Aplikasi Raw Herbal</h1>
<div class="table-responsive">
    <table class="table table-center card-table table-striped">
        <thead>
            <tr>
                <th>Foto Bahan</th>
                <th>Nama Bahan</th>
                <th>Jenis Bahan</th>
                <th>Jumlah Stok (Kg)</th>
            </tr>
        </thead>
        <tbody>

        @foreach($bahan as $bahan)
            <tr>
                <td>
                    <img src="{{ asset('data_file/bahan/'. $bahan->foto) }}" width="100px">
                </td>
                <td>{{ $bahan->nm_bahan }}</td>
                <td>{{ $bahan->jenisBahan->nama }}</td>
                <td>{{ $bahan->stok }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
