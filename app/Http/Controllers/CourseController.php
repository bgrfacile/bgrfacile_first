<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Levels;
use App\Models\Subjects;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();
        $levels = Levels::all();
        $subjects = Subjects::all();
        $courses = Course::all();
        return view('cours.course', [
            'courses' => $courses,
            'trainings' => $trainings,
            'levels' => $levels,
            'subjects' => $subjects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware(['auth:sanctum', 'verified']);
        return view('cours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->middleware(['auth:sanctum', 'verified']);
        $courses = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'content' => $request->content,
            'user_id'=> auth()->user()->id
        ]);
        return Redirect::to('/profil/my_course');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return void
     */
    public function show(int $id)
    {
        $course = DB::table('courses')->where('id', $id)->first();
        return view('cours.show_course', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $course = DB::table('courses')->where('id', $id)->first();
        return view('cours.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {
//        $course = DB::table('courses')->where('id', $id)->first();
        $course = Course::find($id);
        $course->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'description'=>$request->description,
            'auteurs' => $request->auteur,
            'image' => '',
            'like' => 6,
        ]);
        return Redirect::to('/profil/my_course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $course = Course::find($id);
        $course->delete();
        return Redirect::to('/profil/my_course');
    }
}
