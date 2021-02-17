<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Levels;
use App\Models\Subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SearchController extends Controller
{
    public function index()
    {
//        dd('ok');
        $courses = Course::all();
        return view('search.search', [
            'courses' => $courses
        ]);
    }


    public function search()
    {
        $courses = collect();
        $search = request()->query('q');
        if ($search == null) {

            $count_courses = null;
            return view('search.search', [
                'courses' => $courses,
                'count_courses' => $count_courses,
            ]);
        } elseif ($search) {

            $subjects = Subjects::where("name", "like", "%" . "$search" . "%")
                ->orderBy('created_at', 'desc')
                ->get();

            if (!$subjects->isEmpty()) {

                $new_collect = collect();
                foreach ($subjects as $subject) {

                    $courses = Course::where('enligne', '1')
                        ->where("subject_id", $subject->id)
                        ->orderBy('created_at', 'desc')
                        ->get();
                    $courses = $new_collect->merge($courses);

                }
                $courses->collect();
            } else {
                $courses = Course::where('enligne', '1')
                    ->where("name", "like", "%" . "$search" . "%")
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            }
            $count_courses = count($courses);
            return view('search.search', [
                'courses' => $courses,
                'count_courses' => $count_courses,
            ]);
        }


    }
}
