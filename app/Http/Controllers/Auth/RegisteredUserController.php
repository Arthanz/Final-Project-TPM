<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255','min:5'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'is_binusian'=>'required|integer',
            'leader_name' => ['required', 'string', 'max:255','min:5'],
            'leader_WA_Number' => 'required|min:9|unique:leaders,WA_Number',
            'leader_Line_ID'=>'required|unique:leaders,Line_ID',
            'leader_Github_ID' => 'required',
            'leader_Birth_date' => 'required|before:17 years ago',
            ['before' => 'You must be at least 17 years old'],
            'leader_Birth_place'=>'required',
            'leader_cv'=>'required|mimes:jpg,png,jpeg',
            'leader_card'=>'required|mimes:jpg,png,jpeg'
        ]);

        $extension = $request->file('leader_cv')->getClientOriginalExtension();
        $filename = $request->file('leader_cv')->getClientOriginalName();
        $request->file('leader_cv')->storeAs('/public/leaders/cv', $filename);

        $extension = $request->file('leader_card')->getClientOriginalExtension();
        $filename2 = $request->file('leader_card')->getClientOriginalName();
        $request->file('leader_card')->storeAs('/public/leaders/card', $filename2);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_binusian'=>$request->is_binusian,
            'leader_name'=> $request ->leader_name,
            'leader_WA_Number'=> $request ->leader_WA_Number,
            'leader_Line_ID'=> $request ->leader_Line_ID,
            'leader_Github_ID'=> $request ->leader_Github_ID,
            'leader_Birth_date'=> $request ->leader_Birth_date,
            'leader_Birth_place'=> $request ->leader_Birth_place,
            'leader_cv'=>$filename,
            'leader_card'=>$filename2
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
