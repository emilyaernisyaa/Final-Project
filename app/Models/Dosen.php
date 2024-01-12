<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'Dosens';
    protected $fillable =[
        'nidn','nama','alamat','no_hp',
    ];
}
