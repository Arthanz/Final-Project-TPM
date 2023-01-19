<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\group;
use App\Models\leader;
use App\Models\payment;
use App\Models\member;

class AdminController extends Controller
{
    public function showDashboard(){
        $group = group::all();
        $payment = payment::all();

        return view('adminDashboard', compact('group'), compact('payment'));    
    }

    public function showParticipant(){
        $group = group::all();
        $leader = leader::all();
        $member = member::all();

        return view('showGroup', compact('group', 'leader', 'member'));
    }
    
   public function editMember($Member_ID){
     $member = member::findOrFail($Member_ID);

     return view('editMember', compact('member'));
   }

   public function editLeader($Leader_ID){
    $leader = leader::findOrFail($Leader_ID);

    return view('editLeader', compact('leader'));
  }

   public function updateMembers(Request $request, $Member_ID){

    $extension = $request->file('cv')->getClientOriginalExtension();
    $filename = $request->file('cv')->getClientOriginalName();
    $request->file('cv')->storeAs('/public/members/cv', $filename);

    $extension = $request->file('card')->getClientOriginalExtension();
    $filename2 = $request->file('card')->getClientOriginalName();
    $request->file('card')->storeAs('/public/members/card', $filename2);

    member::findOrFail($Member_ID)->update([
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

    return redirect("/dashboard");
   }
   public function updateLeaders(Request $request, $Leader_ID){

   
    $extension = $request->file('cv')->getClientOriginalExtension();
    $filename = $request->file('cv')->getClientOriginalName();
    $request->file('cv')->storeAs('/public/leaders/cv', $filename);

    $extension = $request->file('card')->getClientOriginalExtension();
    $filename2 = $request->file('card')->getClientOriginalName();
    $request->file('card')->storeAs('/public/leaders/card', $filename2);

    leader::findOrFail($Member_ID)->update([
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

    return redirect("/dashboard");
   }
}
