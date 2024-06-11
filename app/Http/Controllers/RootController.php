<?php

namespace App\Http\Controllers;

use App\Models\Aksesoris;
use Illuminate\Http\Request;
use App\Models\Bahan;
use DB;

class RootController extends Controller
{
    public function index()
    {
        
        $bahan = Bahan::latest()->select(DB::raw('stok'), DB::raw('nm_bahan'))->pluck('stok','nm_bahan');
        $aksesoris= Aksesoris::latest()->select(DB::raw('stok'), DB::raw('nama'))->pluck('stok','nama');

        $lblbahan = $bahan->keys();
        $dtbahan = $bahan->values();
        
        $lblacc = $aksesoris->keys();
        $dtacc = $aksesoris->values();
        
        $sum_bahan = DB::table('bahan')->select(DB::raw("SUM(stok) as total_stok"))->get();
        $sum_acc = DB::table('aksesoris')->select(DB::raw("SUM(stok) as total_stok"))->get();
        
        return view('/dashboard',compact('lblbahan','dtbahan','lblacc','dtacc','sum_bahan','sum_acc'));
        
    }
};


