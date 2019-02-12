<?php

namespace App\Http\Controllers;

use App\Masakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class masakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masakan = Masakan::paginate(5);
        return view('admin/listMasakan',['arr_masakan' => $masakan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/insertMasakan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request,[
        //     'nama_masakan' => 'required|string|max:255',
        //     'harga' => 'required|integer',
        //     'status_masakan' => 'required|string|max:255',
        //     'id_masakan' => 'required',
        // ]);

        $masakan = new Masakan;

        $masakan->nama_masakan = $request->nama_masakan;
        $masakan->harga = $request->harga;
        $masakan->status_masakan = $request->status_masakan;
        $masakan->save();

        return redirect('masakan/create')->with('pesan','Data Berhasil Di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masakan = Masakan::find($id);

        return view('admin/editMasakan',['data'=>$masakan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $masakanData = Masakan::find($id);

        $masakanData->nama_masakan = $request->nama_masakan;
        $masakanData->harga = $request->harga;
        $masakanData->status_masakan = $request->status_masakan;
        $masakanData->save();

        return redirect('masakan')->with('pesan','Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_masakan' => 'required|string|max:255',
            'harga' => 'required|integer',
            'status_masakan' => 'required|string|max:255',
            'id_masakan' => 'required',
        ]);
    } 
}
