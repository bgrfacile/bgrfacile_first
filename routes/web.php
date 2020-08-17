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
Route::view('/','welcome');

Route::group(['prefix'=>'superadmin'],function (){
    Route::view('/','administration_general.dashboard.site')->name('dashboardG.dashboard');
    Route::view('/dashboard-users','administration_general.dashboard.utilisateurs')->name('dashboardG.users');
    Route::view('/dashboard-ecoles','administration_general.dashboard.ecoles')->name('dashboardG.ecole');

    Route::view('/fiches','administration_general.fiches.index')->name('dashboardG.fiches.index');

    Route::view('/cours','administration_general.cours.index')->name('dashboardG.cours.index');

    Route::view('/ecoles','administration_general.ecoles.index')->name('dashboardG.ecoles.index');

    Route::view('/utilisateurs','administration_general.utilisateurs.index')->name('dashboardG.utilisateurs.index');

    Route::view('/profil','administration_general.profil.index')->name('dashboardG.profil.index');
});
