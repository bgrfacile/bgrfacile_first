<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Levels;
use App\Models\Subjects;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;

class ChargementCourseController extends Controller
{
    public $count_courses = 0;

    public function default_cours()
    {
        $trainings = Training::all();
//        $cours = Course::where('subject_id', 0)->get();
//        $courses = Course::all()->take(10);
        $courses = Course::select('*')->orderBy('created_at', 'desc')
            ->paginate(6);
        return view('cours.course', [
            'courses' => $courses,
            'trainings' => $trainings,
        ]);
    }

    public function chargementType(Request $request)
    {
        $type = empty($request->type) ? 'trainings' : $request->type;

        if ($type === 'formation') {
            $items = Levels::where('training_id', (int)$request->filter)->get();
            $items = $items->toArray();
        } elseif ($type === 'level') {
            $items = Subjects::where('level_id', (int)$request->filter)->get();
            $items = $items->toArray();
        } elseif ($type === 'subject') {
            $items = Course::where('subject_id', (int)$request->filter)->get();
            return view('cours.course');
//            $items = $items->toArray();
        } else {
            throw new Exception('Unknown type ' . $type);
        }

        header('Content-Type:application/json');
        return json_encode(array_map(function ($items) {
            return [
                'name' => $items['name'],
                'id' => $items['id'],
            ];
        }, $items));

    }

    public function filter_cours(Request $request)
    {
        $subject_id = (int)$request->subject;
        $courses = Course::where('subject_id', $subject_id)->get();
        $trainings = Training::all();
        $this->count_courses = $courses->count();
        return view('cours.course', [
            'cours' => $courses,
            'trainings' => $trainings,
            'count_courses' => $this->count_courses
        ]);
    }

    public function show(int $id)
    {
        $course = Course::where('id', $id)->first();

        return view('cours.show_course2', ['course' => $course]);
    }

    public function viewCourse(Request $request)
    {

        $formation = Training::find($request->formation);
        $level = Levels::find($request->level);
        $subject = Subjects::find($request->subject);

//        return redirect('/cours/'.Str::slug($formation->name).'/'.Str::slug($level->name).'/'.Str::slug($subject->name));
        return redirect()->route('cours.list',[
            'training'=>Str::slug($formation->name),
            'level'=>Str::slug($level->name),
            'subject'=>Str::slug($subject->name),
            'subject_id'=>Str::slug($subject->id),
        ]);
    }

    public function listCourse($training,$level,$subject,$subject_id)
    {
        $courses = Course::where('subject_id', $subject_id)->get();
        return view('cours.liste_course',[
            'courses'=>$courses
        ]);
    }

}
