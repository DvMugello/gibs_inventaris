<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.home',[
            'title'=>'Inventaris GIBS',
        'sub'=>'Dashboard Home',
        'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini'
        ]);
    }
}
