<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show(){
        return view('form');
    }

    public function submit(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);

        return back()->with('sucess', 'Form is submitted sucessfully!');
    }
}
