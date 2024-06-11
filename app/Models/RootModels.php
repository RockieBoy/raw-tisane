<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RootModels extends Model
{
    use HasFactory;

    public function jenisBahan()
    {
        return $this->belongsTo(JenisBahan::class);
    }
    public $table = "bahan";

    protected $fillable = [
        'nm_bahan',
        'jns_bahan',
        'stok',
        'gambar',
    ];
}
