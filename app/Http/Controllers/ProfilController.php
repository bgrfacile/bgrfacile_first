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
        $user = User::where('id', Auth::user()->id)->first();
        return view('profil.my_profil', [
            'user' => $user
        ]);
    }

    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('profil.edit_profil', [
            'user' => $user,
        ]);
    }

    public function editPost(Request $request, $id)
    {
//        dd($request->all());
        $user = User::findOrFail($id);
        Validator::make($request->all(), [
            'name' => ['required','string', 'max:255'],
            'prenom' => ['required','string', 'max:500'],
            'bio' => ['required','string', 'max:255'],
            'telephone' => ['required|regex:/(06)[0-9]{9}/'],
            'email' => ['required','email', 'max:255'],
            'profile_photo_path' => ['file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
        ]);

        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->bio = $request->bio;
        if (request()->hasFile('profile_photo_path')) {
            $user->profile_photo_path  = '/storage/' . $request->profile_photo_path->store('photos-profil', 'public');
        }
//        dd($user);
        if ($user->save()) {
            return redirect()->route('profil.index')->with('success', 'Information modifier avec succes');
        }
    }

    public function myFavoris()
    {
        $favories = DB::table('favories')
            ->leftJoin('cours', 'favories.user_id', '=', 'cours.id')
//            ->leftJoin('subjects', 'cours.subject_id', '=', 'subjects.id')
            ->where('favories.user_id', '=', auth()->id())
            ->get();
        return view('profil.myFavoris_profil', [
            'favories' => $favories
        ]);
    }

    public function myCourses()
    {
//        $cours = User::find(auth()->user()->id)->cours;
        $courses = DB::table('courses')
            ->leftJoin('subjects', 'courses.subject_id', '=', 'subjects.id')
            ->select(
                'courses.id AS id_cours',
                'courses.name AS nom_cours',
                'subjects.name AS nom_subjects',
                'subjects.name AS nom_subjects',
                'enligne',
                )->get();
//        dd($cours);
        return view('profil.myCourses_profil', [
            'cours' => $courses
        ]);
    }

    public function myExercises()
    {
        return view('profil.myExercises_profil');
    }

    public function myCorrected()
    {
        return view('profil.myCorrected_profil');
    }

    public function mySchool()
    {
        return view('profil.mySchool_profil');
    }

    public function myDashbord()
    {
        return view('profil.myDashbord_profil');
    }

    public function myFactures()
    {
        return view('profil.myFactures_profil');
    }

}
