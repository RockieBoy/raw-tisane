<?php

namespace App\Models;

use App\Http\Controllers\BahanController;
use App\Http\Controllers\RootController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBahan extends Model
{
    use HasFactory;

    public function bahans()
    {
        return $this->hasMany(Bahan::class);
        return $this->hasMany(RootModels::class);
    }
}
