<?php

use App\Http\Controllers\BahanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RootController;
use App\Http\Controllers\StokAksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// BISA MENGGUNAKAN INI
// Route::get('/stokbahan', [BahanController::class, 'index'])->name('folder_bahan.index');
// Route::get('/stokbahan/tambahdata', [BahanController::class, 'create'])->name('folder_bahan.create');
// Route::post('/stokbahan', [BahanController::class, 'store'])->name('folder_bahan.store');
// Route::get('/stokbahan/{id}/edit', [BahanController::class, 'edit'])->name('folder_bahan.edit');
// Route::put('/stokbahan/{id}', [BahanController::class, 'update'])->name('folder_bahan.update');
// Route::delete('/stokbahan/{id}', [BahanController::class, 'destroy'])->name('folder_bahan.destroy');

// ATAU MENGGUNAKAN INI
Route::get('/',function(){
    return redirect()->to('/login');})->middleware('guest')
;

Route::middleware('auth','verified')->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('bahan', BahanController::class);
    Route::get('dashboard',[RootController::class, 'index'])->name('dashboard');
    Route::resource('aksesoris', StokAksController::class);
    Route::get('/cari', [BahanController::class,'cari']);
    Route::get('/search', [StokAksController::class,'cari']);
    


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
