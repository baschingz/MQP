<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login($var = null){
        
        return response()->json(['success'=>'Authe and go to login.']);
    }
}
