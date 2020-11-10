<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChargementCourseController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TrainingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfilController;


/*
 * home Page
 * */
Route::get('/', function () {
    return view('home.home');
})->name('home');
Route::get('/demo', function () {
    return view('demo');
})->name('demo');
/*
 * autres pages
 * */
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
Route::get('/contact',function (){
    return view('contact.contact');
})->name('contact');

/*
 * Cours
 * */
Route::resource('course', CourseController::class);
Route::get('/cours',[ChargementCourseController::class,'default_cours'])->name('contenu.cours');
Route::get('/cours/{type}/{filter}',[ChargementCourseController::class,'chargementType'])->name('contenu.level');
Route::get('/cours_filtre',[ChargementCourseController::class,'filter_cours'])->name('cours.filter');
Route::get('/cours/{cour}',[ChargementCourseController::class,'show'])->name('contenu.cours.show');

/*
 * Astuces
 * */
Route::get('/astuces',function (){
    return view('astuces.astuces');
})->name('astuces.index');

/*
 * Exercices
 * */
Route::get('/exercices',function (){
    return view('exercices.exercices');
})->name('exercices.index');


/*
 * Corriges
 * */
Route::get('/corriges',function (){
    return view('corriges.corriges');
})->name('corriges.index');


/*
 * Profil
 * */
Route::prefix('profil')->group(function () {
    Route::get('/',[ProfilController::class, 'index'])->name('profil.index');

    Route::get('/edit',[ProfilController::class, 'edit'])->name('profil.edit');

    Route::get('/myFavoris',[ProfilController::class, 'myFavoris'])->name('profil.myFavoris');

    Route::get('/myCourses',[ProfilController::class, 'myCourses'])->name('profil.myCourses');

    Route::get('/myExercises',[ProfilController::class, 'myExercises'])->name('profil.myExercises');

    Route::get('/myCorrected',[ProfilController::class, 'myCorrected'])->name('profil.myCorrected');

    Route::get('/mySchool',[ProfilController::class, 'mySchool'])->name('profil.mySchool');

    Route::get('/myDashbord',[ProfilController::class, 'myDashbord'])->name('profil.myDashbord');

    Route::get('/myFactures',[ProfilController::class, 'myFactures'])->name('profil.myFactures');
});


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
*/
Route::prefix('dashboard-admin')->group(function () {
    Route::get('/', function (){
        return view('dashboard_admin.home.home');
    })->name('dashboard.index');

    Route::get('/options_cours', function (){
        return view('dashboard_admin.options_courses.index');
    })->name('option.index');

    Route::resource('trainings', TrainingsController::class);
    Route::resource('levels', LevelsController::class);
    Route::resource('subjects', SubjectsController::class);
});

/*
|--------------------------------------------------------------------------
| Administration des écoles
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard-ecole')->group(function () {
    Route::get('/', function (){
        return view('dashboard_ecole.home.home');
    });

});
