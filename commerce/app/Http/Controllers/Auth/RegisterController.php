<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\User;
use Illuminate\Auth\RequestGuard;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class RegisterController extends Controller
{
    //
    public function register_seller()
    {

        return view('auth.register_seller');
    }


    public function store_seller(Request $request)
    {

     $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|confirmed',
     ]);

     $userEmail = User::where('email', $request->email)->get();
     $userName = User::where('name', $request->name)->get();


    if ($userEmail->count() > 0   ) {

        return back()->with('status', 'Email is used by another user, please try another email');

    }elseif( $userName->count() > 0){
            return back()->with('status', 'Username is used by another user, please try another Username');

    }

        User::create([
            'user_type' =>"seller",
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 1

         ]);

         auth()->attempt($request->only('email','password'));

         Account::create([
            'user_id' => auth()->user()->id,
            'amount'  => 0
         ]);

         return redirect()->route('home');







    }



    public function register_buyer()
    {


        return view('auth.register_buyer');
    }





    public function store_buyer(Request $request)
    {

     $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|confirmed',
     ]);

         $userEmail = User::where('email', $request->email)->get();
         $userName = User::where('name', $request->name)->get();




    if ($userEmail->count() > 0   ) {

        return back()->with('status', 'Email is used by another user, please try another email');

    }elseif( $userName->count() > 0){
            return back()->with('status', 'Username is used by another user, please try another Username');

    }

        User::create([
            'user_type' =>"buyer",
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 1

         ]);

         auth()->attempt($request->only('email','password'));

         Account::create([
            'user_id' => auth()->user()->id,
            'amount'  => 0
         ]);

         return redirect()->route('home');






    }











}
