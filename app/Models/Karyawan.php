<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan'; //harus ditambah karena pelajar tanpa S (pelajars)
    protected $guarded = []; // karena tidak ada yang fillable
}
