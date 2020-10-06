<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes pour le front
|--------------------------------------------------------------------------
| Routes reliees au vues visible par les utilisateurs landa
|
*/
//Route::get('profile', [UserController::class, 'show'])->middleware('auth');
Route::get('/', function () {
    return view('home.home');
});
Route::get('/roles', function () {
    return view('role');
})->middleware('role:super-admin|admin|writer');

Route::get('/search',function (){
   return view('search.search');
})->name('search');

Route::get('/ecoles',function (){
   return view('ecoles.index');
})->name('ecoles.index');

Route::get('/qui-sommes-nous',function (){
    return view('qui-sommes-nous.index');
})->name('qui-sommes-nous');

Route::get('/cours/astuces',function (){
    $datas = DB::table('courses')->get();
    return view('cours.astuces',['datas'=>$datas]);
})->name('astuces.index');

Route::get('/profil',function (){
    return view('profil.profil');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Web Routes pour le backend
|--------------------------------------------------------------------------
| Routes reliees au vues visible par les utilisateurs landa
|
*/

Route::get('/g', function (){
    return view('dashboard_general.home.home');
});
