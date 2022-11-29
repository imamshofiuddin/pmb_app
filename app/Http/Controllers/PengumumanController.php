<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Exam;
use App\Models\ServerAnnouncement;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function serverAnnouncement()
    {
        $server = ServerAnnouncement::all()->first();
        return view('admin.announcement-server')->with('server',$server);
    }

    public function index()
    {
        $server = ServerAnnouncement::all()->first();
        return view('pengumuman')->with('server', $server);
    }


    public function openAnnouncement()
    {
        $server = ServerAnnouncement::all()->first();

        $server->status = "dibuka";

        $server->update();

        return redirect()->back()->with([
            'server' => $server,
        ]);
    }

    public function closeAnnouncement()
    {
        $server = ServerAnnouncement::all()->first();

        $server->status = "ditutup";

        $server->update();

        return redirect()->back()->with([
            'server' => $server,
        ]);
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
