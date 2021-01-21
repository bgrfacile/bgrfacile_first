<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use App\Models\Subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware(['auth:sanctum', 'verified']);
        $subjects = Subjects::all();
        return view('dashboard_admin.subjects.index',
            [
                'subjects'=>$subjects
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
        $levels = Levels::all();
        return view('dashboard_admin.subjects.create',[
            'levels'=>$levels
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
        $subjects = Subjects::create([
            'name'=>$request->name,
            'level_id'=>$request->level_id
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
        $subject = Subjects::findOrFail($id);
        $subject->name = $request->name;
        if ($subject->save()){
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
        $subjects = Subjects::find($id);
        $subjects->delete();
        return back()->with('success', 'supression ac');
    }
}
