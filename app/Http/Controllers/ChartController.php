<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\SuratDaftarHadir;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chart()
    {
        $pribadis = count(Surat::where('jenis_surat', 'pribadi')->get());
        $kelompoks = count(Surat::where('jenis_surat', 'tugas')->get());
        $acaras = count(Surat::where('jenis_surat', 'berita acara')->get());
        $hadirs = count(SuratDaftarHadir::all());

        return response()->json([
            'pribadis' => $pribadis,
            'kelompoks' => $kelompoks,
            'acaras' => $acaras,
            'hadirs' => $hadirs
        ]);
    }
}
