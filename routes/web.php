<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\CoursController;
use App\Http\Controllers\admin\TrainingController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AstucesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategorieBookController;
use App\Http\Controllers\ChargementCourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\SubjectsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfilController;


/*
|--------------------------------------------------------------------------
| Hone site
|--------------------------------------------------------------------------
*/
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/demo', function () {
    return view('demo');
})->name('demo');

/*
|--------------------------------------------------------------------------
| pages
|--------------------------------------------------------------------------
*/
Route::get('/faq',function (){
    return view('faq.faq');
})->name('faq');

Route::get('/search',function (){
   return view('search.search');
})->name('search');

Route::get('/ecoles',function (){
   return view('ecoles.index');
})->name('ecoles.index');

Route::get('/qui-sommes-nous',[AboutController::class,'index'])->name('qui-sommes-nous');

Route::get('/politique-de-confidentialite',function (){
    return view('politique-de-confidentialite.index');
})->name('politique');

Route::get('/contact',function (){
    return view('contact.contact');
})->name('contact');

/*
|--------------------------------------------------------------------------
| Cours
|--------------------------------------------------------------------------
*/
Route::resource('course', CourseController::class);//CRUD sauf  show index
//chargement des cours au niveau de l'utilisateur
Route::get('/cours',[ChargementCourseController::class,'default_cours'])->name('contenu.cours');
Route::get('/cours/{type}/{filter}',[ChargementCourseController::class,'chargementType'])->name('contenu.level');
Route::get('/cours_filtre',[ChargementCourseController::class,'filter_cours'])->name('cours.filter');
Route::get('/cours/{cour}',[ChargementCourseController::class,'show'])->name('contenu.cours.show');// show d'un cours
Route::post('/cours/training',[ChargementCourseController::class,'viewCourse'])->name('cours.view');// show d'un cours
Route::get('/cours/{training}/{level}/{subject}/{subject_id}',[ChargementCourseController::class,'listCourse'])->name('cours.list');// show d'un cours

/*
|--------------------------------------------------------------------------
| Astuces
|--------------------------------------------------------------------------
*/
Route::get('/astuces',[AstucesController::class,'index'])->name('astuces.index');

Route::get('/astuces/audios',[AstucesController::class,'audios'])->name('astuces.audio');
Route::get('/astuces/audios/{id}',[AstucesController::class,'readAudios'])->name('astuces.audioread');

Route::get('/astuces/fiches',[AstucesController::class,'fiches'])->name('astuces.fiche');

Route::get('/astuces/mathematique',[AstucesController::class,'maths'])->name('astuces.maths');

Route::get('/astuces/chimie',[AstucesController::class,'chimie'])->name('astuces.chimie');

Route::get('/astuces/physique',[AstucesController::class,'physique'])->name('astuces.physique');


/*
 * Exercices
 * */
//Route::get('/exercices',function (){
//    return view('exercices.exercices');
//})->name('exercices.index');


/*
 * Corriges
 * */
//Route::get('/corriges',function (){
//    return view('corriges.corriges');
//})->name('corriges.index');


/*
|--------------------------------------------------------------------------
| Authentificqtion
|--------------------------------------------------------------------------
*/

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia\Inertia::render('Dashboard');
//})->name('dashboard');

Route::get('login/github', [LoginController::class, 'github'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'githubRedirect'])->name('callback.github');

Route::get('login/facebook', [LoginController::class, 'facebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'facebookRedirect'])->name('callback.facebook');

Route::get('login/google', [LoginController::class, 'google'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'googleRedirect'])->name('callback.google');


/*
|--------------------------------------------------------------------------
| Profil
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->prefix('profil')->group(function () {
    Route::get('/',[ProfilController::class, 'index'])->name('profil.index');

    Route::get('/edit',[ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/edit/{user}',[ProfilController::class, 'editPost'])->name('profil.edit.post');

    Route::get('/myFavoris',[ProfilController::class, 'myFavoris'])->name('profil.myFavoris');

    Route::get('/myCourses',[ProfilController::class, 'myCourses'])->name('profil.myCourses');

    Route::get('/myExercises',[ProfilController::class, 'myExercises'])->name('profil.myExercises');

    Route::get('/myCorrected',[ProfilController::class, 'myCorrected'])->name('profil.myCorrected');

    Route::get('/mySchool',[ProfilController::class, 'mySchool'])->name('profil.mySchool');

    Route::get('/myDashbord',[ProfilController::class, 'myDashbord'])->name('profil.myDashbord');

    Route::get('/myFactures',[ProfilController::class, 'myFactures'])->name('profil.myFactures');
});

/*
|--------------------------------------------------------------------------
| Administration du site
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', 'verified'])->prefix('dashboard-admin')->group(function () {

    Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');

    Route::put('users/etat/{cour}',[UserController::class,'changeStatut'])->name('etat.cours');
    Route::resource('users',UserController::class);

    Route::resource('training',TrainingController::class);

    Route::resource('levels', LevelsController::class);

    Route::resource('subject', SubjectsController::class);

    Route::resource('cours',CoursController::class);


//    Astuces backend
    Route::get('astuces',[AstucesController::class,'indexAdmin'])->name('dashboard.astuces');
    Route::get('astuces/categories',[CategorieBookController::class,'index'])->name('dashboard.astuces.categoriebook.index');
    Route::get('astuces/categories/create',[CategorieBookController::class,'create'])->name('dashboard.astuces.categoriebook.create');
    Route::post('astuces/categories/create',[CategorieBookController::class,'store'])->name('dashboard.astuces.categoriebook.store');
    Route::get('astuces/categories/{categorieBook}/edit',[CategorieBookController::class,'edit'])->name('dashboard.astuces.categoriebook.edit');
    Route::put('astuces/categories/{categorieBook}',[CategorieBookController::class,'update'])->name('dashboard.astuces.categoriebook.update');
    Route::delete('astuces/categories/{categorieBook}',[CategorieBookController::class,'destroy'])->name('dashboard.astuces.categoriebook.destroy');

    Route::resource('books',BookController::class);
});

/*
|--------------------------------------------------------------------------
| Administration des écoles
|--------------------------------------------------------------------------
*/
//Route::resource('schools',SchoolsController::class);
//
//Route::prefix('dashboard-ecole')->group(function () {
//    Route::get('/', function (){
//        return view('dashboard_ecole.home.home');
//    });
//});
