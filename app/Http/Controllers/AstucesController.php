<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AstucesController extends Controller
{
    public function indexAdmin(){
        return view('dashboard_admin.astuces.index');
    }


    public function index(){
        return view('astuces.astuces');
    }

    public function podcast(){
        return view('astuces.podcast.index');
    }
    public function readAudios($id){
        return view('astuces.readAudios');
    }

    public function fiches(){
        return view('astuces.astuces_formule');
    }

    public function maths(){
        return view('astuces.pages.mathematique');
    }

    public function chimie(){
        return view('astuces.pages.chimie');
    }

    public function physique(){
        return view('astuces.pages.physique');
    }
}
