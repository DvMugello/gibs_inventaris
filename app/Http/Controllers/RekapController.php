<?php

namespace App\Http\Controllers;

use App\Exports\RekapExport;
use App\Exports\RekapyearExport;
use App\Models\Inventaris;
use App\Models\Items;
use App\Models\Periode;
use App\Models\Project;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RekapController extends Controller
{
    public function index(){
        return view('dashboard.rekap.index',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Rekap',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'tahun'=>Periode::all(),
            'gedung'=>Project::all(),
            'items'=>Items::all(),
            'rekap'=>Inventaris::all()

        ]);
    }
    public function export()
    {
        // return view ('dashboard.staff.print');
        return Excel::download(new RekapExport, 'rekap.xlsx');
    }

    public function show(){
        return view('dashboard.rekap.show',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Rekap',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'gedung'=>Project::all(),
            'rekap'=>Inventaris::all()
        ]);
    }
    public function exportyear()
    {
        // return view ('dashboard.staff.print');
        return Excel::download(new RekapyearExport, 'rekapyear.xlsx');
    }
}
