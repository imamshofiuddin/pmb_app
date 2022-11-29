<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Exam;
use App\Models\ServerExam;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function index()
    {
        $server = ServerExam::all()->first();
        return view('exam.index')->with('server', $server);
    }

    public function serverExam()
    {
        $server = DB::table('exam-server')->first();
        return view('admin.exam-server')->with('server',$server);
    }

    public function openExam()
    {
        $server = ServerExam::all()->first();

        $server->status = "dibuka";

        $server->update();

        return redirect()->back()->with([
            'server' => $server,
        ]);
    }

    public function closeExam()
    {
        $server = ServerExam::all()->first();

        $server->status = "ditutup";

        $server->update();

        return redirect()->back()->with([
            'server' => $server,
        ]);
    }

    public function cekPeserta(Request $request)
    {
        $data = DataSiswa::where('no_peserta', '=', $request->input('no_peserta'))->get();

        foreach($data as $item){
            $hasExam = Exam::where('id_peserta','=', $item->id)->get();
        }

        if($hasExam->count() > 0){
            return redirect()->back()->withErrors(['error' => 'Anda sudah mengikuti ujian!']);
        }

        if($data->count() > 0){
            $request->session()->put('no_peserta', $request->input('no_peserta'));
            return redirect()->route('rule_exam');
        } else {
            return redirect()->back()->withErrors(['error'=>'Nomor peserta tidak tersedia, silahkan isi data dan finalisasi']);
        }
    }

    public function ruleExam()
    {
        return view('exam.rule');
    }

    public function startExam()
    {
        $soal = DB::table('question')->get();
        $jawaban = DB::table('answer')->get();

        return view('exam.question')->with([
            'soals' => $soal,
            'jawabans' => $jawaban
        ]);
    }

    public function submitExam(Request $request)
    {
        $soals = DB::table('question')->get();
        $peserta = DataSiswa::where('no_peserta','=',$request->session()->get('no_peserta'))->first();
        $nilai = 0;
        foreach($soals as $soal){
            $nilai += $request->input("$soal->id");
        }
        $exam = new Exam();

        $exam->id_peserta = $peserta->id;
        $exam->nilai = $nilai;

        $exam->save();
        $request->session()->forget('no_peserta');

        return redirect()->route('proses_rank');
    }
}
