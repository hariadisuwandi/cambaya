<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['no_induk', 'nama_siswa', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir'];
}