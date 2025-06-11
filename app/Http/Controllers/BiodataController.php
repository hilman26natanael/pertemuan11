<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
        return view('biodata');
    }
    public function proses(Request $request){
        //uintuk debugging
        //dd($request);
        $request->validate([
            'nama'=>'required',
            'gender'=>'required',
            'email'=>'required|email:dns',// arti (|) itu atau
            'ponsel'=>'required|integer|digits_between:11,13',
        ],[
            'nama.required'=> 'Nama harus diisi',
            'gender.required'=> 'jenis kelamin harus diisi',
            'email.required'=> 'Email harus diisi',
            'email.email'=> 'Format email salah',
            'ponsel.required'=> 'No Hp harus diisi',
            'ponsel.numeric'=> 'No Hp harus angka tod',
            'ponsel.digits_between'=> 'No Hp haris diisi sebanyak 11-13 angka',
        ]
        );
        echo"Nama : $request->nama <br>";
        echo"Jenis Kelamin : $request->gender <br>";
        echo"email : $request->email <br>";
        echo"Nomor Ponsel : $request->ponsel<br>";

    }
}
