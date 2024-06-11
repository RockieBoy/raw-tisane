<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Aksesoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
class DashboardController extends Controller
{
    public function index()
    {

        $bahan = Bahan::latest()->select(DB::raw('stok'),
        DB::raw('nm_bahan'))->pluck('stok','nm_bahan');
        
        $sum_bahan = DB::table('bahan')->select(DB::raw("SUM(stok) as total_stok"))->get();
        $sum_acc = DB::table('aksesoris')->select(DB::raw("SUM(stok) as total_stok"))->get();

        return view('bahan.index',compact('bahan'));
    }


}