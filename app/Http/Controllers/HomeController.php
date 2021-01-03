<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Piste;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $countCourse = Course::all()->count();

        $pists = Piste::all()->count();

        return view('home.home',[
            'countCourse'=>$countCourse,
            'pists'=>$pists,
        ]);
    }
}
