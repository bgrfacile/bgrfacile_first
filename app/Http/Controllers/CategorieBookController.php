<?php

namespace App\Http\Controllers;

use App\Models\Categorie_book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategorieBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorieBooks = Categorie_book::orderBy('created_at', 'DESC')->get();

        return view('dashboard_admin.astuces.categorieBooks.index',[
            'categorieBooks'=>$categorieBooks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard_admin.astuces.categorieBooks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'title'=>['required','max:200'],
        ]);
        Categorie_book::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
        ]);

        return Redirect::route('dashboard.astuces.categoriebook.index');
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
        $categorieBook = Categorie_book::find($id);
        return view('dashboard_admin.astuces.categorieBooks.edit',[
            'categorieBook'=>$categorieBook
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>['required','max:200'],
        ]);
        $categorie_book = Categorie_book::findOrFail($id);
        $categorie_book->title = $request->title;
        $categorie_book->description = $request->description;
        $categorie_book->save();
        return Redirect::route('dashboard.astuces.categoriebook.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $categorie_book = Categorie_book::findOrFail($id);
        $categorie_book->delete();
        return Redirect::route('dashboard.astuces.categoriebook.index');
    }
}
