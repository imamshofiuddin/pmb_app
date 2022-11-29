<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = new DataSiswa();

        $request->file('foto')->move('upload/foto_peserta/',$request->file('foto')->getClientOriginalName());

        $data->no_peserta = "3212022000" . Auth::user()->id;
        $data->nisn = $request->input('nisn');
        $data->nama_lengkap = $request->input('nama');
        $data->jenis_kelamin = $request->input('gender');
        $data->alamat_rumah = $request->input('alamat');
        $data->kota = $request->input('kota');
        $data->ttl = $request->input('ttl');
        $data->hp = $request->input('hp');
        $data->email = $request->input('email');

        $data->asal_sekolah = $request->input('name-school');
        $data->tahun_ijazah = $request->input('year-ijazah');

        $data->nama_ortu = $request->input('name-parent');
        $data->pekerjaan_ortu = $request->input('job-parent');
        $data->penghasilan_ortu = $request->input('sal-parent');


        $data->foto = $request->file('foto')->getClientOriginalName();

        $data->id_user = Auth::user()->id;

        $prodi = Prodi::where('nama_prodi','=','no_prodi')->first();

        $data->id_prodi = $prodi->id;

        $data->save();

        return redirect()->route('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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
        //
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
}
