<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function profile()
    {
        $currentSiswa = DataSiswa::where('id_user','=',Auth::user()->id)->get();

        foreach ($currentSiswa as $item) {
            $siswa = $item;
        }

        return view('student.dashboard_peserta')->with('siswa', $siswa);
    }

    public function pilih_prodi()
    {
        $currentSiswa = DataSiswa::where('id_user','=',Auth::user()->id)->get();

        foreach ($currentSiswa as $item) {
            $siswa = $item;
        }

        $currentProdi = Prodi::where('id','=',$siswa->id_prodi)->first();
        $prodis = Prodi::all();

        return view('student.pilih_prodi')->with([
            'siswa'=> $siswa,
            'currentProdi' => $currentProdi,
            'prodis' => $prodis,
        ]);
    }

    public function submitProdi(Request $request)
    {
        $currentSiswa = DataSiswa::where('id_user','=',Auth::user()->id)->first();

        $currentSiswa->id_prodi = $request->input('prodi');

        $currentSiswa->update();

        return redirect()->back();
    }

    public function hapusProdi()
    {
        $currentSiswa = DataSiswa::where('id_user','=',Auth::user()->id)->first();

        $no_prodi = Prodi::where('nama_prodi','=','no_prodi')->first();

        $currentSiswa->id_prodi = $no_prodi->id;

        $currentSiswa->update();

        return redirect()->back();
    }

    public function finalisasi()
    {
        $currentSiswa = DataSiswa::where('id_user','=',Auth::user()->id)->first();

        return view('student.finalisasi')->with('siswa', $currentSiswa);
    }

    public function finalisasiData()
    {
        $currentSiswa = DataSiswa::where('id_user','=',Auth::user()->id)->first();
        $no_prodi = Prodi::where('nama_prodi','=','no_prodi')->first();

        if($currentSiswa->id_prodi == $no_prodi->id){
            return redirect()->back()->withErrors(['error'=>'Anda Belum mengisi prodi, silahkan pilih terlebih dahulu!']);
        }
        $currentSiswa->is_final = 'final';

        $currentSiswa->update();

        return redirect()->back();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = DataSiswa::where('id', $id)->first();

        if($siswa->count() > 0){
            return view('student.edit')->with([
                'siswa' => $siswa,
            ]);
        }
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
        $data = DataSiswa::findOrFail($id);
        
        if(($request->file('foto')) !== null){
            $request->file('foto')->move('upload/foto_peserta/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        
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


        $data->update();
        return redirect()->route('home');
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
