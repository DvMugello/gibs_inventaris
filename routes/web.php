<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.home',[
        'title'=>'Inventaris GIBS',
        'sub'=>'Dashboard Home',
        'teks'=>'Akses Menu Dan Informasi Penting Lainnya Di Sini'
    ]);
});
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::get('/Login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/Login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/dashboard/staff',[StaffController::class,'index'])->middleware('auth');
Route::get('/dashboard/staff/create',[StaffController::class,'create'])->middleware('auth');
Route::post('/dashboard/staff',[StaffController::class,'store'])->middleware('auth');

Route::get('/dashboard/project',[ProjectController::class,'index'])->middleware('auth');
Route::get('/dashboard/project/create',[ProjectController::class,'create'])->middleware('auth');
Route::post('/dashboard/project',[ProjectController::class,'store'])->middleware('auth');

Route::get('/dashboard/items',[ItemsController::class,'index'])->middleware('auth');
Route::get('/dashboard/items/create',[ItemsController::class,'create'])->middleware('auth');
Route::post('/dashboard/items',[ItemsController::class,'store'])->middleware('auth');

Route::get('/dashboard/project/rooms',[RoomsController::class,'index'])->middleware('auth');
Route::get('/dashboard/project/rooms/create',[RoomsController::class,'create'])->middleware('auth');
Route::post('/dashboard/project/rooms',[RoomsController::class,'store'])->middleware('auth');

Route::get('/dashboard/inventaris',[InventarisController::class,'index'])->middleware('auth');
Route::get('/dashboard/inventaris/create',[InventarisController::class,'create'])->middleware('auth');
Route::post('/dashboard/inventaris',[InventarisController::class,'store'])->middleware('auth');

Route::get('/dashboard/rekap',[RekapController::class,'index'])->middleware('auth');
Route::get('/dashboard/rekap/{periode:year}',[RekapController::class,'rekaptahun'])->middleware('auth');
