<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $userCount= User::all()->count();
        $equipes = Equipe::all();

        return view('qui-sommes-nous.index',[
            'userCount'=>$userCount,
            'equipes'=>$equipes,
        ]);
    }

}
