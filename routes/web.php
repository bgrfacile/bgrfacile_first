<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::view('/','app.home');

Route::group(['prefix'=>'adminG'],function (){

    Route::view('/','administration_general.dashboard.site')->name('dashboardG.dashboard');
    Route::view('/dashboard-users','administration_general.dashboard.utilisateurs')->name('dashboardG.users');
    Route::view('/dashboard-ecoles','administration_general.dashboard.ecoles')->name('dashboardG.ecole');

    Route::view('/fiches','administration_general.fiches.index')->name('dashboardG.fiches.index');
    Route::view('/fiches/audios','administration_general.fiches.fiche_audios')->name('dashboardG.fiches.audios');
    Route::view('/fiches/videos','administration_general.fiches.fiche_videos')->name('dashboardG.fiches.videos');
    Route::view('/fiches/ecrites','administration_general.fiches.fiche_ecrites')->name('dashboardG.fiches.ecrites');
    Route::view('/fiches/matieres','administration_general.fiches.fiche_matieres')->name('dashboardG.fiches.matieres');

    Route::view('/cours','administration_general.cours.index')->name('dashboardG.cours.index');

    Route::view('/ecoles','administration_general.ecoles.index')->name('dashboardG.ecoles.index');

    Route::view('/utilisateurs','administration_general.utilisateurs.index')->name('dashboardG.utilisateurs.index');

    Route::view('/profil','administration_general.profil.index')->name('dashboardG.profil.index');
    Route::view('/profil/publications','administration_general.profil.publications')->name('dashboardG.profil.publications');
    Route::view('/profil/notifications','administration_general.profil.notifications')->name('dashboardG.profil.notifications');
});

Route::group(['prefix'=>'adminE'],function (){
    Route::view('/','administration_ecoles.dashboard.index')->name('dashboardE.dashboard');
});
