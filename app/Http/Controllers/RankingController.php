<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Exam;
use App\Models\Prodi;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index(){
        $ranking = Exam::getSiswa()->orderBy('nilai', 'DESC')->get();
        $prodis = Prodi::all();
        
        return view('admin.ranking')->with(['ranking' => $ranking, 'prodis' => $prodis]);
    }

    public function sort(Request $request){
        if($request->input('sort') == 'all'){
            return redirect()->route('ranking');
        } else {
            $ranking = Exam::getSiswa()->where('id_prodi', '=', $request->input('sort'))->orderBy('nilai', 'DESC')->get();
            $activeProdi = Prodi::where('id', '=', $request->input('sort'))->first();
        }

        $prodis = Prodi::all();

        return view('admin.ranking')->with(['ranking' => $ranking, 'prodis' => $prodis, 'activeProdi' => $activeProdi]);
    }

    public function prosesRank()
    {
        $prodis = Prodi::get();

        foreach ($prodis as $prodi) {
            $passed = Exam::getSiswa()->where('id_prodi','=',$prodi->id)->orderBy('nilai', 'DESC')->take(3)->get();

            foreach ($passed as $item) {
                $peserta = DataSiswa::where('id', '=', $item->id_peserta)->first();
                $peserta->status = 'passed';
                $peserta->update();
            }

            $count = Exam::getSiswa()->where('id_prodi','=', $prodi->id)->orderBy('nilai', 'DESC')->get()->count();

            if($count >= 3){
                $skip = 3;
                $limit = $count - $skip;
            } else {
                $skip = 0;
                $limit = 0;
            }

            $unpassed = Exam::getSiswa()->where('id_prodi','=',$prodi->id)->orderBy('nilai', 'DESC')->skip($skip)->take($limit)->get();
            
            foreach ($unpassed as $item) {
                $peserta = DataSiswa::where('id', '=', $item->id_peserta)->first();
                $peserta->status = 'unpassed';
                $peserta->update();
            }
        }

        return "Terimakasih sudah mengikuti ujian, semoga hasilnya memuaskan";
    }
}
