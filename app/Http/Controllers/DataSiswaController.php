<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
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
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'ttl' => 'required',
            // 'name_parent' => 'required',
            // 'job_parent' => 'required',
            // 'sal_parent' => 'required',
            // 'name_school' => 'required',
            // 'year_ijazah' => 'required'
            'foto' => 'required',
        ]);

        $data = new DataSiswa();

        $request->file('foto')->move('upload/foto_peserta/',$request->file('foto')->getClientOriginalName());

        $data->no_peserta = "3212022000" . Auth::user()->id;
        $data->nisn = $request->input('nisn');
        $data->nama_lengkap = $request->input('nama');
        $data->alamat_rumah = $request->input('alamat');
        $data->ttl = $request->input('ttl');
        $data->foto = $request->file('foto')->getClientOriginalName();

        $data->id_user = Auth::user()->id;
        $data->id_prodi = 1;

        $data->save();

        return redirect()->route('dashboard_peserta');
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
