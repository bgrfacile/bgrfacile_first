<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $this->middleware(['auth:sanctum', 'verified']);
        $levels = Levels::all();
        return view('dashboard_admin.levels.index',
            [
                'levels'=>$levels
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
        $this->middleware(['auth:sanctum', 'verified']);
        return view('dashboard_admin.levels.create',[
            'trainings'=>$trainings
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);
        $levels = Levels::create([
            'name'=>$request->name,
            'training_id'=>$request->training_id
        ]);
        return back()->with('success', 'creation avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);
        $level = Levels::findOrFail($id);
        $level->name = $request->name;
        if ($level->save()){
            return back()->with('success', 'modification avec success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $levels = Levels::find($id);
        $levels->delete();
        return back()->with('success', 'supression avec success');
    }
}
