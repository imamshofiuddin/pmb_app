<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use PDF;

class PdfController extends Controller
{
    public function pdfGenerate($id){
        $siswa = DataSiswa::where('id','=',$id)->get();

        foreach ($siswa as $item) {
            $currentSiswa = $item;
        }

        $data = [
            'title' => 'Peserta Mahasiswa Baru PENS 2023',
            'date' => date('d-M-Y'),
            'nama' => $currentSiswa->nama_lengkap,
            'no_peserta' => $currentSiswa->no_peserta,
            'foto' => $currentSiswa->foto
        ];

        $pdf = PDF::loadView('pdf', $data);
        return $pdf->download('peserta.pdf');

        // $pdf = FacadePdf::loadView('pdf', $data);

        // return $pdf->download('peserta.pdf');
    }

    public function lolosPmb($id){
        $siswa = DataSiswa::where('id','=',$id)->get();

        foreach ($siswa as $item) {
            $currentSiswa = $item;
        }

        $data = [
            'title' => 'Bukti Kelulusan PMB PENS 2023',
            'date' => date('d-M-Y'),
            'nama' => $currentSiswa->nama_lengkap,
            'no_peserta' => $currentSiswa->no_peserta,
            'foto' => $currentSiswa->foto
        ];

        $pdf = PDF::loadView('pdf-lolos', $data);
        return $pdf->download('lolos-pmb.pdf');

        // $pdf = FacadePdf::loadView('pdf', $data);

        // return $pdf->download('peserta.pdf');
    }
}
