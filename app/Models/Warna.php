<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    use HasFactory;

    public $table = "warna_acc";
    
    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'nama',
    ];
}
