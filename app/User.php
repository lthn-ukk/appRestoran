<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $table = 'user';
    public $timestamps = false;
    
    protected $fillable = [
        'nama_user', 'username', 'password', 'id_level'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
