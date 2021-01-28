<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        dd('ok');
        $courses = Course::all();
        return view('search.search',[
            'courses'=>$courses
        ]);
    }


    public function search(){
        $search = request()->query('q');
        if ($search == null){
            $courses = collect();
            $count_courses=null;
            return view('search.search',[
                'courses'=>$courses,
                'count_courses'=>$count_courses,
            ]);
        }elseif ($search){
            $courses = Course::where('enligne','1')
                ->where("name", "like", "%" . "$search" . "%")
                ->orderBy('created_at', 'desc')
                ->paginate(10);
            $count_courses=count($courses);
            return view('search.search',[
                'courses'=>$courses,
                'count_courses'=>$count_courses,
            ]);
        }


    }
}
