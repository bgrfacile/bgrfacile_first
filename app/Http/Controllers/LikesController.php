<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Like;
use Illuminate\Http\JsonResponse;

class LikesController extends Controller
{
    public function like(): JsonResponse
    {
        $course = Course::find(request()->id);

        if ($course->likebyloggedInUser()) {
            $res = Like::where([
                'user_id' => auth()->user()->id,
                'course_id' => request()->id,
            ])->delete();

            if ($res) {
                return response()->json([
//                        'error' => 'Unauthorized',
                        'count' => Course::find(request()->id)->likes->count()
                    ]
                );
            }

        } else {
            $like = new Like();
            $like->user_id = auth()->user()->id;
            $like->course_id = request()->id;
            $like->save();
            return response()->json([
                    'count' => Course::find(request()->id)->likes->count()
                ],200
            );
        }
    }
}
