<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AstucesController extends Controller
{
    public function index(){
        return view('astuces.astuces');
    }

    public function audios(){
        return view('astuces.astuces_audios');
    }

    public function maths(){
        return view('astuces.pages.mathematique');
    }

    public function chimie(){
        return view('astuces.pages.chimie');
    }
}
