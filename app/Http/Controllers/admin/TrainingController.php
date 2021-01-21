<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\LevelRessource;
use App\Models\Levels;
use App\Models\Subjects;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();
        return view('dashboard_admin.trainings.index', [
            'trainings' => $trainings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'diploma' => ['required', 'image'],
        ]);
        $training = Training::create([
            'name' => $request->name,
            'diploma' => $request->diploma,
        ]);
        return back()->with('success', 'creation avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training = Training::find($id);
        $levels = Levels::where('training_id',$id)->orderBy('created_at','DESC')->get();
        $subjects = Subjects::all();
        $datasLevel=[];
        foreach ($levels as $level){
            $datasLevel[] = Arr::add($level->toArray(),'subjects',Subjects::where('level_id',$level->id)->get());
        }

//        dd($datasLevel[0]['subjects']);
        return view('dashboard_admin.trainings.show', [
            'training' => $training,
            'levels' => $datasLevel,
            'subjects' => $subjects,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'diploma' => ['required', 'image'],
        ]);
        $training = Training::findOrFail($id);
        $training->name = $request->name;
        $training->diploma = $request->diploma;
        if ($training->save()) {
            return back()->with('success', 'modification avec success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::findOrFail($id);
        if ($training->delete()) {
            return back();
        }
    }
}
