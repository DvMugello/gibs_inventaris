<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Periode;
use App\Models\Project;
use App\Models\Rooms;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index(){
        return view('dashboard.rekap.index',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Rekap',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'tahun'=>Periode::all(),
            'gedung'=>Project::all(),
            'rekap'=>Inventaris::all()

        ]);
    }

    public function rekaptahun(){
        return view('dashboard.rekap.tahun',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Rekap',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'gedung'=>Project::all(),
            'rekap'=>Inventaris::all()
        ]);
    }
}
