<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = "sekolahs";
    protected $primaryKey = "id";
    protected $fillable = ['nama', 'umur', 'kelas', 'nama_sekolah', 'jurusan'];
}
