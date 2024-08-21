<?php

namespace App\Http\Controllers;

use App\Exports\ItemsExport;
use App\Models\Items;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index(){
        return view('dashboard.items.index',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Dashboard Items',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Items',
            'list'=> Items::latest()->paginate('6')->withQueryString()
        ]);
    }
    public function create(){
        return view('dashboard.items.create',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Dashboard Create Items',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Items'
        ]);
    }
    public function store(Request $request){
        $validateData=$request->validate([
            'name'=>'required',
            'merk'=>'required',
            'color'=>'required',
            'slug'=>'required'
        ]);

        Items::create($validateData);
        return redirect('/dashboard/items')->with('success','Items Successfull Added Has Been');
    }
    public function export()
    {
        // return view ('dashboard.staff.print');
        return Excel::download(new ItemsExport, 'items.xlsx');
    }
}
