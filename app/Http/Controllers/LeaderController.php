<?php

namespace App\Http\Controllers;

use App\Models\leader;
use App\Models\Category;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function createLeader(){

        return view('registerLeader');
    }

    public function storeLeader(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required',
            'WA_Number' => 'required|min:9|unique:leaders,WA_Number',
            'Line_ID'=>'required|unique:leaders,Line_ID',
            'Github_ID' => 'required',
            'Birth_date' => 'required|before:17 years ago',
            ['before' => 'You must be at least 17 years old'],
            'Birth_place'=>'required',
            'cv'=>'required|mimes:jpg,png,jpeg'
        ]);


        $extension = $request->file('cv')->getClientOriginalExtension();
        $filename = $request->file('cv')->getClientOriginalName();
        $request->file('cv')->storeAs('/public/leaders/', $filename);

        leader::create([
            'name'=> $request ->name,
            'email'=> $request -> email,
            'WA_Number'=> $request -> WA_Number,
            'Line_ID'=> $request ->Line_ID,
            'Github_ID'=> $request ->Github_ID,
            'Birth_date'=> $request -> Birth_date,
            'Birth_place'=> $request ->Birth_place,
            'cv'=>$filename
        ]);

        return redirect('/home');
    }

}
