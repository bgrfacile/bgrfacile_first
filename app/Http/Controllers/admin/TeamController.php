<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Equipe::all();
        return view('dashboard_admin.equipes.index',[
            'teams'=>$teams
        ]);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'role' => ['string'],
            'link_facebook' => ['url'],
            'link_twitter' => ['url'],
            'link_whatsaap' => ['url'],
            'link_linkedin' => ['url'],
            'image' => ['image', 'mimes:jpeg,jpg,png,gif|required|max:10000'],
        ]);
        if (request()->hasFile('image')) {
            $image_path = '/storage/' . $request->image->store('image-equipe', 'public');
        }
        $equipe = Equipe::create([
            'nom'=> $request->name,
            'role'=> $request->role,
            'link_facebook'=> $request->link_facebook,
            'link_twitter'=> $request->link_twitter,
            'link_whatsaap'=> $request->link_whatsaap,
            'link_linkedin'=> $request->link_linkedin,
            'imagePath'=> $image_path,
        ]);
        return back()->with('success', 'creation avec success');
    }


    public function update(Request $request,$id)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'diploma' => ['required', 'image'],
        ]);
        $equipe = Equipe::findOrFail($id);
        $imagePath = $equipe->imagePath;
        if (request()->hasFile('image')) {
            $imagePath = '/storage/' . $request->image->store('image-equipe', 'public');
        }
        $equipe->update([
            'nom'=> $request->name,
            'role'=> $request->role,
            'link_facebook'=> $request->link_facebook,
            'link_twitter'=> $request->link_twitter,
            'link_whatsaap'=> $request->link_whatsaap,
            'link_linkedin'=> $request->link_linkedin,
            'imagePath'=> $imagePath,
        ]);
        return back()->with('success', 'modification du cours avec success');
    }

    public function delete($id)
    {
        $equipe = Equipe::findOrFail($id);
        if ($equipe->delete()){
            return back()->with('success', 'suppression avec success');
        }
    }

}
