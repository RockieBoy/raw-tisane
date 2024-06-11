@extends('templates.default')
@php
$title = "Data Bahan-Bahan";
$preTitle = "Edit Data Bahan";
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('bahan.update', $bahan->id) }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 
            <div class="mb-3">
                <label class="form-label">Nama Bahan</label>
                <input type="text" name="form_nm_bahan" class="form-control
                @error('form_nm_bahan')
                    is-invalid
                @enderror" placeholder="Masukan Nama Bahan" value="{{ old('form_nm_bahan') ?? $bahan->nm_bahan }}">
                @error('form_nm_bahan')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Bahan</label>
                <select name="form_jenis_bahan_id" id="" class="form-control">
                    @foreach ($jenisbahanctrl as $jenisbahan)
                    <option value="{{ $jenisbahan->id }}" @selected($jenisbahan->id == $bahan->jenis_bahan_id)>{{ $jenisbahan->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Stok</label>
                <input type="number" name="form_stok" class="form-control
                @error('form_stok')
                    is-invalid
                @enderror" placeholder="Masukan Jumlah Stok" value="{{ old('form_stok') ?? $bahan->stok }}">
                @error('form_stok')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Container</label>
                <input type="text" name="form_nomor_container" class="form-control
                @error('form_nomor_container')
                    is-invalid
                @enderror" placeholder="Masukan Nomor Container" value="{{ old('form_nomor_container') ?? $bahan->nomor_container}}">
                @error('form_nomor_container')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Foto Bahan</label>
                <input type="file" name="form_foto" class="form-control
                @error('form_foto')
                    is-invalid
                @enderror" placeholder="Masukan Foto Bahan" value="{{ old('form_foto') ?? $bahan->foto }}">
                @error('form_foto')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <center>
                <input type="submit" value="Simpan" class="btn btn-success">
                <a class="btn btn-primary" href="{{route('bahan.index')}}">Back</a>
                </center>
            </div>
        </form>
    </div>
</div>
@endsection