<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $keyType = 'string';
    protected $fillable = ["uid", "nama", "kelas", "jurusan", "walas"];
}
