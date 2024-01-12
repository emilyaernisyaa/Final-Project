<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'Mahasiswas';
    protected $fillable =[
        'npm','nama','alamat','no_hp',
    ];
}