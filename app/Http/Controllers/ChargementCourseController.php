<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Levels;
use App\Models\Subjects;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class ChargementCourseController extends Controller
{
    public $count_courses = 0;

    public function default_cours()
    {
        $trainings = Training::all();
//        $cours = Course::where('subject_id', 0)->get();
        $courses = Course::all();
        // sur le chargement des cours recupere l'ensemble des cours recent
        return view('cours.course', [
            'cours' => $courses,
            'trainings' => $trainings,
            'count_courses' => $this->count_courses,
        ]);
    }

    public function chargementType(Request $request)
    {
        $type = empty($request->type) ? 'trainings' : $request->type;

        if ($type === 'formation') {
            $items = Levels::where('training_id', (int)$request->filter)->get();
            $items = $items->toArray();
        }
        elseif ($type === 'level'){
            $items = Subjects::where('level_id', (int)$request->filter)->get();
            $items = $items->toArray();
        }
        elseif ($type === 'subject'){
            $items = Course::where('subject_id', (int)$request->filter)->get();
            return view('cours.course');
//            $items = $items->toArray();
        }
        else{
            throw new Exception('Unknown type '. $type);
        }

        header('Content-Type:application/json');
         return json_encode(array_map(function ($items){
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
            'trainings'=> $trainings,
            'count_courses' => $this->count_courses
        ]);
    }

    public function show(int $id)
    {
        $course = DB::table('cours')->where('id', $id)->first();
        return view('cours.show_course', ['course' => $course]);
    }


}
