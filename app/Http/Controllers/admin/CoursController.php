<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Levels;
use App\Models\Subjects;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses_enligne = Course::select('*', 'courses.name as courses_name', 'users.name as user_name', 'courses.id as courses_id')
            ->leftjoin('users', 'users.id', '=', 'courses.user_id')
            ->where('courses.enligne', '1')
            ->get();

        $courses_horsligne = Course::select('*', 'courses.name as courses_name', 'users.name as user_name', 'courses.id as courses_id')
            ->leftjoin('users', 'users.id', '=', 'courses.user_id')
            ->where('courses.enligne', '0')
            ->get();

        return view('dashboard_admin.cours.index', [
            'courses_enligne' => $courses_enligne,
            'courses_brouiilon' => $courses_horsligne,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainings = Training::all();
        return view('dashboard_admin.cours.create', [
            'trainings' => $trainings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'user_id' => ['required'],
            'subject_id' => ['required'],
            'description' => ['string'],
            'content' => ['string'],
            'image' => ['image', 'mimes:jpeg,jpg,png,gif|required|max:10000'],
        ]);
        $chemin = 'image-' . Str::slug($request->name, '-');
        if (request()->hasFile('image')) {
            $image_path = '/storage/' . $request->image->store($chemin, 'public');
        }
        $cours = Course::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'user_id' => $request->user_id,
            'subject_id' => $request->subject_id,
            'description' => $request->description,
            'contenue' => $request->contenue,
            'image_path' => $image_path,
        ]);
        return redirect()->route('cours.index')->with('success', 'creation avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $idcourses
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $subject = Subjects::find($course->subject_id);
        $level = Levels::find($subject->level_id);
        $trainings = Training::all();

        return view('dashboard_admin.cours.edit', [
            'trainings' => $trainings,
            'level' => $level,
            'subject' => $subject,
            'course' => $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
//            'user_id' => ['required'],
            'subject_id' => ['required'],
            'description' => ['string'],
            'content' => ['string'],
            'image' => ['image', 'mimes:jpeg,jpg,png,gif|required|max:10000'],
        ]);

        $course = Course::findOrFail($id);
        $image_path = $course->image_path;
        $chemin = 'image-' . Str::slug($request->name);
        if (request()->hasFile('image')) {
            $image_path = '/storage/' . $request->image->store($chemin, 'public');
        }
        $course->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'subject_id' => $request->subject_id,
            'description' => $request->description,
            'contenue' => $request->contenue,
            'image_path' => $image_path,
        ]);

        return redirect()->route('cours.index')->with('success', 'modification du cours avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cours = Course::findOrFail($id);
        if ($cours->delete()) {
            return back();
        }
    }
}
