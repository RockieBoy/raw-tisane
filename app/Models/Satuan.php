<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;

    public $table = "satuan_acc";
    
    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'nama',
    ];
}
