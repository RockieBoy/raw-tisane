<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aksesoris extends Model
{
    use HasFactory;

    public $table = "aksesoris";

    protected $fillable = [
        'foto',
        'nama',
        'ukuran',
        'satuan',
        'stok',
    ];
}
