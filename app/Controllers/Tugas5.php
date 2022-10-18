<?php namespace App\Controllers;

class Tugas5 extends BaseController
{
    public function form(){
        return view('FTugas5/form');
    }

    public function hasil_form(){
        return view('FTugas5/hasil_form');
    }

    public function mahasiswa(){
        return view('FTugas5/mahasiswa');
    }
}