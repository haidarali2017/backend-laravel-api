<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function register(Request $request) {
        $user = new User;
        $user->name =$request->input('name');
        $user->email =$request->input('email');
        $user->password =Hash::make($request->input('password'));
        $user->save();
        return $user;
        // return "hello liza.";
    }
}
