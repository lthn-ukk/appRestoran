<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masakan extends Model
{
    //
    public $table = 'masakan';
    public $timestamps = false;
    protected $primaryKey = 'id_masakan';

    protected $fillable = [
        'nama_masakan', 'harga', 'status_masakan'
    ];
}
