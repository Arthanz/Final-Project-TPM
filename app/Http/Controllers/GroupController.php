<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function create()
    {
        return view('registerr');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Group_name'=>'required|min:3',
            'password'=>[
                'required',
                'min:8',
                'regex:/[0-9]/',
                'regex:/[!@#$%^&*()_+]/',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'confirmed'
            ]
        ]);
        Group::create([
            'Group_Name' => $request->Group_Name,
            'password' => Hash::make($request->password),
            'is_binusian' => $request ->is_binusian,
        ]);

        return redirect('/home');
    }
}
