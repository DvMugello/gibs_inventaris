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

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'middleware' => ['role:admin|staff'],
], function(){

    Route::get('/staff',[StaffController::class,'index'])->name('staff');
    Route::get('/staff/create',[StaffController::class,'create'])->name('staff.create');
    Route::post('/staff',[StaffController::class,'store'])->name('staff.store');
    Route::get('/staff/print', [StaffController::class, 'export'])->name('staff.export');

    Route::get('/project',[ProjectController::class,'index'])->name('project');
    Route::get('/project/create',[ProjectController::class,'create'])->name('project.create');
    Route::post('/project',[ProjectController::class,'store'])->name('project.store');

    Route::get('/items',[ItemsController::class,'index'])->name('items');
    Route::get('/items/create',[ItemsController::class,'create'])->name('items.create');
    Route::post('/items',[ItemsController::class,'store'])->name('items.store');
    Route::get('/items/print', [ItemsController::class, 'export'])->name('items.export');

    Route::get('/project/rooms',[RoomsController::class,'index'])->name('rooms');
    Route::get('/project/rooms/create',[RoomsController::class,'create'])->name('rooms.create');
    Route::post('/project/rooms',[RoomsController::class,'store'])->name('rooms.store');

    Route::get('/inventaris',[InventarisController::class,'index'])->name('inventaris');
    Route::get('/inventaris/create',[InventarisController::class,'create'])->name('inventaris.create');
    Route::post('/inventaris',[InventarisController::class,'store'])->name('inventaris.store');
    Route::get('/inventaris/print', [InventarisController::class, 'export'])->name('inventaris.export');

    Route::get('/rekap',[RekapController::class,'index'])->name('rekap');
    Route::get('/rekap/print', [RekapController::class, 'export'])->name('rekap.export');
    Route::get('/rekap/{periode:year}',[RekapController::class,'show'])->name('rekap.show');
    Route::get('/rekap/{periode:year}/print',[RekapController::class,'exportyear'])->name('rekap.exportyear');
});
