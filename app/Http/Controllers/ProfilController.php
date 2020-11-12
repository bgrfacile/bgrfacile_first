<?php

namespace App\Http\Controllers;

use App\Models\Favory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{

    public function __construct()
    {
        $this->middleware([
            'auth:sanctum',
            'verified'
        ]);
    }


    public function index()
    {
        return view('profil.my_profil');
    }

    public function edit(){
        return view('profil.edit_profil');
    }

    public function myFavoris(){
        $favories = DB::table('favories')
            ->leftJoin('courses', 'favories.user_id', '=', 'courses.id')
//            ->leftJoin('subjects', 'courses.subject_id', '=', 'subjects.id')
            ->where('favories.user_id','=',auth()->id())
            ->get();
        return view('profil.myFavoris_profil',[
            'favories'=>$favories
        ]);
    }

    public function myCourses(){
//        $courses = User::find(auth()->user()->id)->courses;
        $courses = DB::table('courses')
            ->leftJoin('subjects','courses.subject_id','=','subjects.id')
            ->select(
                'courses.id AS id_cours',
                'courses.name AS nom_cours',
                'subjects.name AS nom_subjects',
                'subjects.name AS nom_subjects',
                'enligne',
            )->get();
//        dd($courses);
        return view('profil.myCourses_profil', [
            'courses' => $courses
        ]);
    }

    public function myExercises(){
        return view('profil.myExercises_profil');
    }

    public function myCorrected(){
        return view('profil.myCorrected_profil');
    }

    public function mySchool(){
        return view('profil.mySchool_profil');
    }

    public function myDashbord(){
        return view('profil.myDashbord_profil');
    }

    public function myFactures(){
        return view('profil.myFactures_profil');
    }

}
