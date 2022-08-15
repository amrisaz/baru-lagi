<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    use HasFactory;
    protected $table = 'pelajar'; //harus ditambah karena pelajar tanpa S (pelajars)
    protected $guarded = []; // karena tidak ada yang fillable
}
