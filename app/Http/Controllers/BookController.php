<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categorie_book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::select(
            '*',
            'books.id as book_id',
            'books.title as book_title',
            'categorie_books.title as categorie_book_title',
            )
            ->leftJoin('categorie_books', 'categorie_books.id', '=', 'books.categorie_book_id')
            ->orderBy('books.created_at', 'DESC')
            ->get();
//        dd($books);
        return view('dashboard_admin.astuces.book.index',[
            'books'=>$books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categore_books = Categorie_book::orderBy('created_at', 'DESC')->get();
        return view('dashboard_admin.astuces.book.create',[
            'categore_books'=>$categore_books
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
        $request->validate([
            'title'=>['required','max:200'],
            'auteur'=>['required','max:200'],
            'resumer'=>['required','max:400'],
            'categorieBook'=>['required'],
        ]);
        Book::create([
            'title'=> $request->input('title'),
            'auteur'=> $request->input('auteur'),
            'resumer'=> $request->input('resumer'),
            'categorie_book_id'=> (int)$request->input('categorieBook'),
            'user_id'=> auth()->user()->id
        ]);
        return Redirect::route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('dashboard_admin.astuces.book.show',[
            'book'=>$book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $categore_books = Categorie_book::orderBy('created_at', 'DESC')->get();
        return view('dashboard_admin.astuces.book.edit',[
            'book'=>$book,
            'categore_books'=> $categore_books
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
            'auteur'=>['required','max:200'],
            'resumer'=>['max:400'],
            'categorieBook'=>['required'],
        ]);
        Book::findOrFail($id)->update([
            'title'=> $request->input('title'),
            'auteur'=> $request->input('auteur'),
            'resumer'=> $request->input('resumer'),
            'categorie_book_id'=> (int)$request->input('categorieBook'),
            'user_id'=> auth()->user()->id
        ]);
        return Redirect::route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
