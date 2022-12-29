<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\group;

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
            ['Group_name'=>'required|min:3|unique:groups,Group_name',
            'password'=>[
                'required',
                'min:8',
                'regex:/[0-9]/',
                'regex:/[!@#$%^&*()_+]/',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'confirmed'
            ],
            'is_binusian'=>'required',],
            [
                'Group_name.required'=>'Group Name Is Required',
                'Group_name.unique'=>'Group Name Has Been Taken',
                'is_binusian.required'=>'Please tell us if you are Binusian or not'
            ]

        ]);
        group::create([
            'Group_name' => $request->Group_name,
            'password' => Hash::make($request->password),
            'is_binusian' => $request ->is_binusian,
        ]);
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        return redirect('/home');
    }
}
