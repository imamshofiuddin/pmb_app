<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Exam;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index(){
        $passed = Exam::getSiswa()->orderBy('nilai', 'DESC')->take(3)->get();

        foreach ($passed as $item) {
            $peserta = DataSiswa::where('id', '=', $item->id_peserta)->first();
            $peserta->status = 'passed';
            $peserta->update();
        }

        // $unpassed = Exam::getSiswa()->where('status', '=', 'unpassed')->orderBy('nilai','DESC')->get();

        $count = Exam::getSiswa()->orderBy('nilai', 'DESC')->get()->count();
        $skip = 3;
        $limit = $count - $skip;
        
        $unpassed = Exam::getSiswa()->orderBy('nilai', 'DESC')->skip($skip)->take($limit)->get();
        foreach ($unpassed as $item) {
            $peserta = DataSiswa::where('id', '=', $item->id_peserta)->first();
            $peserta->status = 'unpassed';
            $peserta->update();
        }

        return view('admin.ranking')->with(['passed' => $passed, 'unpassed' => $unpassed]);
    }
}
