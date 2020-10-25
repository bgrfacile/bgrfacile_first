<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| Site
|--------------------------------------------------------------------------
|
*/
//Route::get('profile', [UserController::class, 'show'])->middleware('auth');
Route::get('/', function () {
    return view('home.home');
})->name('home');
/*
 * page exemple
 * */
Route::get('/roles', function () {
    return view('role');
})->middleware('role:super-admin|admin|writer');

Route::get('/faq',function (){
    return view('faq.faq');
})->name('faq');

Route::get('/search',function (){
   return view('search.search');
})->name('search');

Route::get('/ecoles',function (){
   return view('ecoles.index');
})->name('ecoles.index');

Route::get('/qui-sommes-nous',function (){
    return view('qui-sommes-nous.index');
})->name('qui-sommes-nous');
Route::get('/politique-de-confidentialite',function (){
    return view('politique-de-confidentialite.index');
})->name('politique');

/*
 * Cours
 * */
Route::resource('cours', CourseController::class);

/*
 * Astuces
 * */
Route::get('/astuces',function (){
    $datas = DB::table('courses')->get();
    return view('astuces.astuces',['datas'=>$datas]);
})->name('astuces.index');

/*
 * Exercices
 * */
Route::get('/exercices',function (){
    $datas = DB::table('courses')->get();
    return view('exercices.exercices',['datas'=>$datas]);
})->name('exercices.index');


/*
 * Corriges
 * */
Route::get('/corriges',function (){
    $datas = DB::table('courses')->get();
    return view('corriges.corriges',['datas'=>$datas]);
})->name('corriges.index');


/*
 * Profil
 * */
Route::get('/profil',[ProfilController::class, 'index'])->name('profil.index');

Route::get('/profil/my_course',[ProfilController::class, 'my_course'])->name('my_course');

Route::get('/profil/favoris',[ProfilController::class, 'favoris'])->name('profil.favoris');

Route::get('/profil/about',function (){
    return view('profil.about');
});
Route::get('/profil/ecole',function (){
    return view('profil.ecole');
})->name('profil.ecole');

/*
 * Auth
 * */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('login/github', [LoginController::class, 'github'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'githubRedirect'])->name('callback.github');

Route::get('login/facebook', [LoginController::class, 'facebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'facebookRedirect'])->name('callback.facebook');

Route::get('login/google', [LoginController::class, 'google'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'googleRedirect'])->name('callback.google');


/*
|--------------------------------------------------------------------------
| Administration du site
|--------------------------------------------------------------------------
|
*/

Route::get('/g', function (){
    return view('dashboard_general.home.home');
});
