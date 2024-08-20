<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index(){
        $title='';
            if(request('project')){
                $project= Project::firstWhere('name',request('project'));
                $title=$project->name;
            }

        return view('dashboard.project.rooms.index',[
            'title'=>'Inventaris GIBS',
            'sub'=>$title,
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Inventaris',
            'room'=> Rooms::latest()->filter(request(['project']))->paginate(8)->withQueryString()
        ]);

    }
    public function create(){
        return view('dashboard.project.rooms.create',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Dashboard Inventaris',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Inventaris',
            'list'=> Project::all()
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'number'=>'required',
            'project_id'=>'required'
        ]);
        Rooms::create([
            'name'=>$request->name,
            'number'=>$request->number,
            'project_id'=>$request->project_id
        ]);
        return redirect('/dashboard/project/rooms')->with('success', 'Rooms Has Been Added');
    }
}
