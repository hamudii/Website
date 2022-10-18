<?php namespace App\Controllers;

class Tugas4 extends BaseController
{
    public function kalkulator(){
        return view('FTugas4/kalkulator');
    }

    public function inputJS(){
        return view('FTugas4/inputJS');
    }
}