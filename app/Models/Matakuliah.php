<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'Matakuliahs';
    protected $fillable =[
        'Kode_mk','nama_mk','sks','semester',
    ];
}
