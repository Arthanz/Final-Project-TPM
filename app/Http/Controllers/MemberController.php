<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\Category;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function createMember(){

        return view('registerMember');
    }

    public function storeMember(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required',
            'WA_Number' => 'required|min:9|unique:members,WA_Number',
            'Line_ID'=>'required|unique:members,Line_ID',
            'Github_ID' => 'required',
            'Birth_date' => 'required|before:17 years ago',
            ['before' => 'You must be at least 17 years old'],
            'Birth_place'=>'required',
            'cv'=>'required|mimes:jpg,png,jpeg',
            'card'=>'required|mimes:jpg,png,jpeg'
        ]);


        $extension = $request->file('cv')->getClientOriginalExtension();
        $filename = $request->file('cv')->getClientOriginalName();
        $request->file('cv')->storeAs('/public/members/cv', $filename);

        $extension = $request->file('card')->getClientOriginalExtension();
        $filename2 = $request->file('card')->getClientOriginalName();
        $request->file('card')->storeAs('/public/members/card', $filename2);
        member::create([
            'name'=> $request ->name,
            'email'=> $request -> email,
            'WA_Number'=> $request -> WA_Number,
            'Line_ID'=> $request ->Line_ID,
            'Github_ID'=> $request ->Github_ID,
            'Birth_date'=> $request -> Birth_date,
            'Birth_place'=> $request ->Birth_place,
            'cv'=>$filename,
            'card'=>$filename2
        ]);

        return redirect('/home');
    }

}
