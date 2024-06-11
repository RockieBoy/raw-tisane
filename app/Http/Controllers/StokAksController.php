<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aksesoris;
use App\Models\Warna;
use App\Models\Satuan;
use Illuminate\Support\Facades\File;


class StokAksController extends Controller
{
    public function index()
    {
        $aksesoris = Aksesoris::latest()->get();
        return view('aksesoris.index', compact('aksesoris'));
    }

    public function create()
    {
        $warna = Warna::get();
        $satuan = Satuan::get();
        return view('aksesoris.create',compact('warna','satuan'));
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'form_nama' => ['required', 'min:5'],
            'form_ukuran' => ['required', 'numeric'],
            'form_satuan' => ['required'],
            'form_warna' => ['required'],
            'form_stok' => ['required', 'numeric'],
            'form_foto' => ['required', 'image'],
        ], [
            'form_nama.required' => 'Kolom Nama Aksesoris Harus Diisi!',
            'form_nama.min' => 'Kolom Nama Aksesoris Setidaknya Memiliki 5 Karakter!',
            'form_ukuran.required' => 'Kolom Ukuran Aksesoris Harus Diisi!',
            'form_ukuran.numeric' => 'Kolom Ukuran Aksesoris Harus Berisi Angka!',
            'form_satuan.required' => 'Kolom Jenis Satuan Harus Diisi!',
            'form_warna.required' => 'Kolom Warna Aksesoris Harus Diisi!',
            'form_stok.required' => 'Kolom Jumlah Stok Harus Diisi!',
            'form_stok.numeric' => 'Kolom Jumlah Stok Harus Berisikan Angka!',
            'form_foto.required' => 'Kolom Foto Harus Diisi!',
            'form_foto.image' => 'Kolom Foto Harus Berupa Gambar!',
        ]);

        $file = $request->file('form_foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'data_file/aksesoris/';
        $file->move($tujuan_upload, $nama_file);


        $aksesoris = new Aksesoris();

        $aksesoris->nama = $request->form_nama;
        $aksesoris->ukuran = $request->form_ukuran;
        $aksesoris->satuan = $request->form_satuan;
        $aksesoris->warna = $request->form_warna;
        $aksesoris->stok = $request->form_stok;
        $aksesoris->foto = $nama_file;


        $aksesoris->save();

        // session()->flash('succes', 'Data Berhasil Ditambahkan!');

        // return redirect()->route('folder_bahan.index')->with('succes','Data Berhasil Ditambahkan!');

        return redirect()->route('aksesoris.index')->withSucces('Data Berhasil Ditambahkan!');
    }



    public function edit($id)
    {
        $aksesoris = Aksesoris::find($id);
        $satuan = Satuan::get();
        $warna = Warna::get();
        return view('aksesoris.edit', compact('aksesoris','satuan','warna'));
    }



    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'form_nama' => ['required', 'min:5'],
            'form_ukuran' => ['required', 'numeric'],
            'form_satuan' => ['required'],
            'form_warna' => ['required'],
            'form_stok' => ['required', 'numeric'],
 
        ], [
            'form_nama.required' => 'Kolom Nama Aksesoris Harus Diisi!',
            'form_nama.min' => 'Kolom Nama Aksesoris Setidaknya Memiliki 5 Karakter!',
            'form_ukuran.required' => 'Kolom Ukuran Aksesoris Harus Diisi!',
            'form_ukuran.numeric' => 'Kolom Ukuran Aksesoris Harus Berisi Angka!',
            'form_satuan.required' => 'Kolom Jenis Satuan Harus Diisi!',
            'form_warna.required' => 'Kolom Warna Aksesoris Harus Diisi!',
            'form_stok.required' => 'Kolom Jumlah Stok Harus Diisi!',
            'form_stok.numeric' => 'Kolom Jumlah Stok Harus Berisikan Angka!',

        ]);

        $aksesoris = Aksesoris::find($id);

        if ($request->hasFile('form_foto')){
            $image_path = 'data_file/aksesoris/' . $aksesoris->foto;
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        
        $file = $request->file('form_foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'data_file/aksesoris/';
        $file->move($tujuan_upload, $nama_file);

        }else {
            // Gunakan Gambar yang sudah ada
            $nama_file = $aksesoris->foto ? $aksesoris->foto : 'default.jpg';;
        }

        $aksesoris->nama = $request->form_nama;
        $aksesoris->ukuran = $request->form_ukuran;
        $aksesoris->satuan = $request->form_satuan;
        $aksesoris->warna = $request->form_warna;
        $aksesoris->stok = $request->form_stok;
        $aksesoris->foto = $nama_file;

        $aksesoris->save();
        
        return redirect()->route('aksesoris.index')->withinfo('Data Berhasil Diubah!');
        
    }



    public function destroy($id)
    {
        $aksesoris = Aksesoris::find($id);

        $gambarLama = $aksesoris->foto;

        $image_path = 'data_file/aksesoris/' . $gambarLama;
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        $aksesoris->delete();

        // session()->flash('danger', 'Data Berhasil Dihapus!');

        // return redirect()->route('folder_bahan.index')->with('danger','Data Berhasil Dihapus!');

        return redirect()->route('aksesoris.index')->withDanger('Data Berhasil Dihapus!');
    }
    public function cari(Request $request)
        {
            $teks = $request->input('cari');
            
            $aksesoris = Aksesoris::latest()
            ->where('nama', 'like', '%' . $teks . '%')
            ->get();

            return view('aksesoris.index',compact('aksesoris'));
        }
    
}
