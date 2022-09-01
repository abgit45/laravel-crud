<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index()
   {
 return view('student.login');
   }

   function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);
     $user_data = array(
        'email'  => $request->get('email'),
        'password' => $request->get('password')
       );
  
       if(Auth::attempt($user_data))
       {
        return redirect('students');
       }
       else
       {
        return back()->with('error', 'Wrong Login Details');
       }

    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}
