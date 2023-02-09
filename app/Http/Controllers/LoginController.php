<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
  public function login(Request $request)
  {
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    {
        return view('admin.index');
    }
    else{
        return redirect('index')->with('msg','Invalid UserCrediatials');
    }

  }
  public function logout()
  {
    Auth::logout();
    return redirect('/');
  }

}
