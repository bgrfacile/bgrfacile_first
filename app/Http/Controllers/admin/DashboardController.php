<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Piste;
use App\Models\Podcast;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $nbr_user = User::all()->count();
        $nbr_podcast = Podcast::all()->count();
        $nbr_piste = Piste::all()->count();

        return view('dashboard_admin.dashboard.index',[
            'nbr_user'=>$nbr_user,
            'nbr_podcast'=>$nbr_podcast,
            'nbr_piste'=>$nbr_piste,
        ]);
    }
}
