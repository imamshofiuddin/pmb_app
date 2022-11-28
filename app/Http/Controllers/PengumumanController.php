<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Exam;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('pengumuman');
    }

    public function cekHasil(Request $request){
        $data = DataSiswa::where('no_peserta', '=', $request->input('no_peserta'))->first();
        

        if($data == null)
            return redirect()->back()->withErrors(['error' => 'nomor peserta salah']);
        else
            $exam = Exam::where('id_peserta','=',$data->id)->first();
            
        if($data !== null && $exam !== null){
            return view('pengumuman')->with([
                'data' => $data,
            ]);
        } else {
            return redirect()->back()->withErrors(['error' => 'kamu belum bisa mengakses pengumuman']);
        }
    }
}
