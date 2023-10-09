<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skils;

class SkilsController extends Controller
{
    public function index(){
        return view('backend.pages.skils');
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
}
