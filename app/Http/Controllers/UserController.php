<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function general()
    {
        return view('categories.general');
    }
    public function health()
    {
        return view('categories.health');
    }

    public function life()
    {
        return view('categories.life');
    }

    public function show($id)
    {
        $insures = config('insures');
        $insures = collect($insures)->firstWhere('id', $id);
        return view('user.getinsured', compact('insures'));
    }

    
}
