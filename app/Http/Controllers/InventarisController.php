<?php

namespace App\Http\Controllers;

use App\Exports\InventarisExport;
use App\Models\Inventaris;
use App\Models\Items;
use App\Models\Periode;
use App\Models\Rooms;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index(){
        $title='';
            if(request('rooms')){
                $rooms= Rooms::firstWhere('name',request('rooms'));
                $title=$rooms->name;
            }
            if(request('items')){
                $items= Items::firstWhere('name',request('items'));
                $items->name;
            }
            if(request('periode')){
                $periode= Periode::firstWhere('year',request('periode'));
                $periode->year;
            }

        return view('dashboard.inventaris.index',[
            'title'=>'Inventaris GIBS',
            'sub'=> $title,
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Inventaris',
            'list'=> Inventaris::latest()->filter(request(['rooms','items','periode']))->paginate(5)->withQueryString()
        ]);
    }
    public function create(){
        return view('dashboard.inventaris.create',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Dashboard Inventaris',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Inventaris',
            'item'=> Items::all(),
            'periode'=>Periode::all(),
            'room'=>Rooms::all()
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'total'=>'required',
            'description'=>'required',
            'total_good'=>'required',
            'total_not_good'=>'required',
            'total_bad'=>'required',
            'rooms_id'=>'required',
            'item_id'=>'required',
            'period_id'=>'required'
        ]);
        Inventaris::create([
            'total'=>$request->total,
            'description'=>$request->description,
            'total_good'=>$request->total_good,
            'total_not_good'=>$request->total_not_good,
            'total_bad'=>$request->total_bad,
            'rooms_id'=>$request->rooms_id,
            'item_id'=>$request->item_id,
            'period_id'=>$request->period_id
        ]);
        return redirect('/dashboard/inventaris')->with('success','Inventaris Has Been Added');
    }
    public function export()
    {
        // return view ('dashboard.staff.print');
        return Excel::download(new InventarisExport, 'inventaris.xlsx');
    }
}
