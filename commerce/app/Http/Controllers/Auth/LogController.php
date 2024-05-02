<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogController extends Controller
{
    //
   public function index()
   {

    return view('auth.login_user');
   }


   public function store(Request $request)
   {

    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);



    if (auth()->attempt($request->only('email','password'),$request->remember)) {

        if ( auth()->user()->status == 0) {

            auth()->logout();
            return back()->with('status', 'Your account has been Disable please contact Admin');
        }else{

            return redirect()->route('home');

        }

            }else{

                return back()->with('statuss', 'Unauthorized');
            }

   }


    public function destroy()
    {

        auth()->logout();

        return redirect()->route('home');
    }






    public function index_admin()
    {

     return view('auth.login_admin');
    }

    public function admin_store(Request $request)
    {

     $request->validate([
         'email' => 'required',
         'password' => 'required'
     ]);



     if  (auth()->attempt($request->only('email','password'),$request->remember)){

          if (auth()->user()->user_type == 'admin') {

            return redirect()->route('admin_index');

          }else{


                auth()->logout();
                return back()->with('status', 'Unauthorized');



          }



     }else{

        return back()->with('status', 'Unauthorized');
     }

    }



    public function destroy_admin()
    {

        auth()->logout();

        return redirect()->route('home');
    }

}
