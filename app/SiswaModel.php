<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    protected $table = "siswa";
     protected $tableprimaryKey="id";
    public $timestamps=false;
    protected $fillable = ['nama', 'nisn', 'alamat','telp'];

    
}
