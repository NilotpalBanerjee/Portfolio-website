<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skils;

class SkilsController extends Controller
{
    public function index(){
        $skils = Skils::get();
        return view('backend.pages.skils',['skils' => $skils]);
        
    }

    public function add(){
        return view('backend.pages.add_skils');
    }

    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $skils = new Skils;
        $skils->name = $request->name;
        $skils->description = $request->description;

        $skils->save();

        return back()->withSuccess('Skils saved successfully');
    }

    public function edit($id){
        $skils = Skils::where('id', $id)->first();
        return view('backend.pages.edit_skils',['skils' => $skils]);
    }

    public function update(Request $req, $id){

        $req->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $skill = Skils::where('id', $id)->first();

        $skill->name = $req->name;
        $skill->description = $req->description;

        $skill->save();

        return back()->withSuccess('Skils Update successfully');

    }

    public function delete($id){

        $skill = Skils::where('id', $id)->first();
        $skill->delete();

        return back()->withSuccess('Skils Delete successfully');

    }

    public function show(){
        $skills = Skils::all();
        return view('frontend.pages.index',['skills' => $skills]);
    }
}
