<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswi extends Model
{
    protected $table = "siswis";
    protected $primaryKey = "id";
    protected $fillable = ['nama', 'umur', 'alamat', 'no_hp', 'golongan_darah'];
}
