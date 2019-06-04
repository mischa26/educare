<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('admin');
    }

    function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email'         =>  'required|email',
            'password'      =>  'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/division');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function successLogin()
    {
        return view('adminpanel');
    }

    function logout()
    {
        Auth::logout();
        return redirect('admin');
    }
}
