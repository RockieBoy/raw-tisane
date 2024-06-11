@extends('templates.default')
@php
$title = "Data Aksesoris";
$preTitle = "Tambah Data Aksesoris";
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('aksesoris.store') }} " method="POST" enctype="multipart/form-data">
            @csrf

            <div class=" mb-3">
                <label class="form-label">Nama Aksesoris</label>
                <input type="text" name="form_nama" class="form-control 
                @error('form_nama')
                    is-invalid
                @enderror" placeholder="Masukan Nama Aksesoris" value="{{ old('form_nama') }}">
                @error('form_nama')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Ukuran</label>
                <input type="number" name="form_ukuran" class="form-control
                @error('form_ukuran')
                    is-invalid
                @enderror" placeholder="Masukan Ukuran Aksesoris" value="{{ old('form_ukuran') }}">
                @error('form_ukuran')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Satuan</label>
                <select class="form-select
                @error('form_satuan')
                    is-invalid
                @enderror" name="form_satuan" value="{{ old('form_satuan') }}">
                    <option selected>Pilih Jenis Satuan</option>
                    @foreach ($satuan as $data) 
                    <option value="{{$data->nama}}">{{$data->nama}}</option>
                    @endforeach
                </select>
                @error('form_satuan')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Warna Aksesoris</label>
                <select class="form-select
                @error('form_warna')
                    is-invalid
                @enderror" name="form_warna" value="{{ old('form_warna') }}">
                <option selected>Pilih Warna Aksesoris</option>
                @foreach($warna as $data)    
                <option value="{{$data->nama}}">{{$data->nama}}</option>
                @endforeach
                </select>
                @error('form_warna')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Jumlah Stok</label>
                <input type="number" name="form_stok" class="form-control
                @error('form_stok')
                    is-invalid
                @enderror" placeholder="Masukan Jumlah Stok" value="{{ old('form_stok') }}">
                @error('form_stok')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>



            <div class="mb-3">
                <label class="form-label">Foto Bahan</label>
                <input type="file" name="form_foto" class="form-control
                @error('form_foto')
                    is-invalid
                @enderror" placeholder="Masukan Foto Bahan" value="{{ old('form_foto') }}">
                @error('form_foto')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <center>
                <input type="submit" value="Simpan" class="btn btn-success">
                <a class="btn btn-primary" href="{{route('aksesoris.index')}}">Back</a>
                </center>
            </div>
        </form>
    </div>
</div>
@endsection