<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Exports\StaffExport;
use Maatwebsite\Excel\Facades\Excel;

class StaffController extends Controller
{
    public function index(){
        return view('dashboard.staff.index',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Dashboard Staff',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Staff',
            'users'=> User::all()
        ]);
    }
    public function create(){
        return view('dashboard.staff.create',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Dashboard Create Staff',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Staff'
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255',
            'email'=>'required|email:dns',
            'password'=>'required|min:5|max:255',
            'phone'=>'required|min:12'
        ]);
        $user=User::create([
            'name'=> $request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone

        ]);

         $user->assignRole('staff');

        // $validateData['password']= Hash::make($validateData['password']);

        return redirect('/dashboard/staff')->with('success','Registaration successfull! Login Please');
    }
    public function export()
    {
        // return view ('dashboard.staff.print');
        return Excel::download(new StaffExport, 'staff.xlsx');
    }

}
