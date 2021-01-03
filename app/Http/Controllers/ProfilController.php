<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\Favory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = User::find(Auth::user()->id);
        return view('profil.edit_profil',[
            'user'=>$user,
        ]);
    }

    public function editPost(Request $request,  $id){
        $user = User::find($id);
        $input = $request->all();
        $update = new UpdateUserProfileInformation();
        $update->update($user,$input);

//        Validator::make($input,[
//            'name' => ['required', 'string', 'max:255'],
//            'prenom' => ['nullable', 'string', 'max:255'],
//            'numero' => ['nullable', 'max:255'],
//            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
//        ])->validate();
        return back()->with('success', 'Information modifier avec succes');
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
