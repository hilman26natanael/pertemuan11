<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Models\Matakuliah;
use App\Models\Prodi;


Route::get('/', function () {
    return view('welcome');
});
Route::get('biodata',[BiodataController::class,'index']);
Route::post('biodata',[BiodataController::class,'proses']);

Route::get('matakuliah/create', function(){
    matakuliah::create([
        'nama'=>'Pemograman Web',
        'sks'=>3
    ]);
    return "Berhasil Tambah Data";
});

Route::get('matakuliah/lihat', function(){
    $matakuliah = matakuliah::all();
    foreach ($matakuliah as $data){
        echo $data->nama . " " . $data->sks . "<br>";
    }
});
//untuk prodi
Route::get('prodi/create', function(){
    prodi::create([
        'nama'=>'Sistem Informasi',
        'fakultas'=>'fikom'
    ]);
    return "Berhasil Tambah Data";
});

Route::get('prodi/lihat', function(){
    $prodi = prodi::all();
    foreach ($prodi as $data){
        echo $data->nama . " " . $data->fakultas . "<br>";
    }
});

