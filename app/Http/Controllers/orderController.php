<?php

namespace App\Http\Controllers;

use App\Masakan;
use App\User;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(){
        $dataMasakan = Masakan::all();
        $dataUser = User::where('id_level',5)->get();
        return view('admin/order')->with('data',['dataMasakan'=>$dataMasakan,'dataUser'=>$dataUser]);
    }

    public function selectMenu($id){
        $pilihMenu = Masakan::where('id_masakan',$id)->first();
        return response()->json($pilihMenu, 200);
    }
}
