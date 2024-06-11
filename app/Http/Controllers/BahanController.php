<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\JenisBahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BahanController extends Controller
{
    public function index()
    {

        $bahan = Bahan::latest()->get();
        return view('bahan.index',compact('bahan'));
    }


    public function create()
    {
        
        $jenisbahanctrl = JenisBahan::get();

        return view('bahan.tambahdata', compact('jenisbahanctrl'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'form_nm_bahan' => ['required', 'min:5'],
            'form_jenis_bahan_id' => ['numeric'],
            'form_stok' => ['required', 'numeric'],
            'form_nomor_container' => ['required', 'numeric'],
            'form_foto' => ['required','image'],
        ], [
            'form_nm_bahan.required' => 'Kolom Nama Bahan Harus Diisi!',
            'form_nm_bahan.min' => 'Kolom Nama Bahan Setidaknya Memiliki 5 Karakter!',
            'form_jenis_bahan_id.numeric' => 'Kolom Jenis Bahan Harus Diisi!',
            'form_stok.required' => 'Kolom Jumlah Stok Harus Diisi!',
            'form_stok.numeric' => 'Kolom Jumlah Stok Harus Berisikan Angka!',
            'form_nomor_container.required' => 'Kolom Nomor Container Harus Diisi!',
            'form_nomor_container.numeric' => 'Kolom Nomor Container Harus Berisikan Angka!',
            'form_foto.required' => 'Kolom Foto Harus Diisi!',
            'form_foto.image' => 'Kolom Foto Harus Berupa Gambar!',
        ]);
        
        
        $file = $request->file('form_foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'data_file/bahan/';
        $file->move($tujuan_upload, $nama_file);
        
        $bahan = new Bahan();
        
        $bahan->nm_bahan = $request->form_nm_bahan;
        $bahan->jenis_bahan_id = $request->form_jenis_bahan_id;
        $bahan->stok = $request->form_stok;
        $bahan->nomor_container = $request->form_nomor_container;
        $bahan->foto = $nama_file ;


        $bahan->save();

        // session()->flash('succes', 'Data Berhasil Ditambahkan!');

        // return redirect()->route('folder_bahan.index')->with('succes','Data Berhasil Ditambahkan!');

        return redirect()->route('bahan.index')->withSucces('Data Berhasil Ditambahkan!');
    }


    public function edit($id)
    {
        $bahan = Bahan::find($id);
        $jenisbahanctrl = JenisBahan::get();
        return view('bahan.edit', compact('bahan','jenisbahanctrl'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'form_nm_bahan' => ['required', 'min:5'],
            'form_jenis_bahan_id' => ['required'],
            'form_stok' => ['required', 'numeric'],
            'form_nomor_container' => ['required', 'numeric'],
        ], [
            'form_nm_bahan.required' => 'Kolom Nama Bahan Tidak Boleh Kosong!',
            'form_nm_bahan.min' => 'Kolom Nama Bahan Setidaknya Memiliki 5 Karakter!',
            'form_stok.required' => 'Kolom Jumlah Stok Tidak Boleh Kosong!',
            'form_stok.numeric' => 'Kolom Jumlah Stok Harus Berisikan Angka!',
            'form_nomor_container.required' => 'Kolom Nomor Container Harus Diisi!',
            'form_nomor_container.numeric' => 'Kolom Nomor Container Harus Berisikan Angka!',
        ]);

        $bahan = Bahan::find($id);


        if ($request->hasFile('form_foto')){
            $image_path = 'data_file/bahan/' . $bahan->foto;
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        
        $file = $request->file('form_foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'data_file/bahan/';
        $file->move($tujuan_upload, $nama_file);

        }else {
            // Gunakan Gambar yang sudah ada
            $nama_file = $bahan->foto ? $bahan->foto : 'default.jpg';;
        }

        $bahan->nm_bahan = $request->form_nm_bahan;
        $bahan->jenis_bahan_id = $request->form_jenis_bahan_id;
        $bahan->stok = $request->form_stok;
        $bahan->nomor_container = $request->form_nomor_container;
        $bahan->foto = $nama_file;

        $bahan->save();

        // session()->flash('info', 'Data Berhasil Diperbarui!');

        // return redirect()->route('folder_bahan.index')->with('info','Data Berhasil Diperbarui!');

        return redirect()->route('bahan.index')->withInfo('Data Berhasil Diperbarui!');
    }


    public function destroy($id)
    {
        $bahan = Bahan::find($id);
        $gambarLama = $bahan->foto;
        $image_path = 'data_file/bahan/' . $gambarLama;
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
        $bahan->delete();

        // session()->flash('danger', 'Data Berhasil Dihapus!');

        // return redirect()->route('folder_bahan.index')->with('danger','Data Berhasil Dihapus!');

        return redirect()->route('bahan.index')->withDanger('Data Berhasil Dihapus!');
    }

    public function cari(Request $request)
    {
        $text = $request->input('search');
        
        $bahan = Bahan::latest()
        ->where('nm_bahan', 'like', '%' . $text . '%')
        ->get();

        return view('bahan.index',compact('bahan'));
    }
}
