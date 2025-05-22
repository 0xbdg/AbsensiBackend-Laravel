<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    //protected $primaryKey = "uid";
    protected $fillable = ["uid", "nama", "kelas", "jurusan"];
}
