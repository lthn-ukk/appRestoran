<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_user' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|confirmed',
            'id_level' => 'required',
        ]);
    }
    
    protected function create(array $data)
    {
        return User::create([
            'nama_user' => $data['nama_user'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'id_level' => $data['id_level'],
        ]);
    }
}
