<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        //return $request->input();
        $user= User::where(['email'=>$request->email])->get();
        if(!$user || !check($request->password, $user->password))
        {
            return "Username or Password is incorrect";
        }
        else
        {
            //return "Username or Password is incorrect";
            $request->session()->put('user',$user);
            return redirect('/product');
        }
    }
}
