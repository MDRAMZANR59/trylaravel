<?php

use App\Models\form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('home',['datas'=>form::all()]);
});

Route::get('form',[FormController::class,'getform'])->name('form');

Route::post('submitform',[FormController::class,'store']);