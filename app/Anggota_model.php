<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota_model extends Model
{
    protected $table= 'id';
    protected $primaryKey= 'id';
    public $timestamps= false;
    protected $fillable = [
      'nama_anggota',
      'alamat',
      'telp'
    ];
}
