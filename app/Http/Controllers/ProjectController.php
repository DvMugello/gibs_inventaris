<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    public function index(){
        // $title='';
        // if (request('project')){
        //     $project= Project::firstWhere('name',request('project'));
        //     $title= $project->name;
        // }

        return view('dashboard.project.index',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Dashboard Inventaris',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Inventaris',
            'list'=> Project::all()
            // 'list'=>Project::latest()->filter(request(['project']))->paginate(5)->withQueryString()

        ]);
    }
    public function create(){
        return view('dashboard.project.create',[
            'title'=>'Inventaris GIBS',
            'sub'=>'Dashboard Create Inventaris',
            'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini',
            'subteks'=>'Create New Inventaris'
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'image'=>'file|image'
        ]);
        $list=Project::create([
            'name'=> $request->name,
        ]);

        if ($request->hasFile('image')) {
            // upload image baru
            $list->addMedia($request->image)
                ->toMediaCollection('image');
        }
        return redirect('/dashboard/project')->with('success','Project successfull! Hass Been Added');
    }
}
