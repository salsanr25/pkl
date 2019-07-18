<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswi;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Siswi::all();
        $response = [
        'success' => true,
        'data' => $data,
        'massage' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Siswi();
        $data ->nama = $request->nama;
        $data ->umur = $request->umur;
        $data ->alamat = $request->alamat;
        $data ->no_hp = $request->no_hp;
        $data ->golongan_darah = $request->golongan_darah;
        $data ->save();
        $response = [
            'success' => true,
            'data' => $data,
            'massage' => 'berhasil'
            ];
            return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswi::findOrFail($id);
        $response = [
            'success' => true,
            'data' =>$siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Siswi::findOrFail ($id);
        $data ->nama = $request->nama;
        $data ->umur = $request->umur;
        $data ->alamat = $request->alamat;
        $data ->no_hp = $request->no_hp;
        $data ->golongan_darah = $request->golongan_darah;
        $data ->save();
        $response = [
            'success' => true,
            'data' => $data,
            'massage' => 'berhasil'
            ];
            return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswi::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' =>$data,
            'massage' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
