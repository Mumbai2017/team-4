<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function ownerSignIn(Request $request){
        $rules = array(
            'mobile' => 'required | unique',
            'password' => 'required | min : 6',
        );
        $userdata = array(
            'mobile' => $request->input('mobile'),
            'password' => $request->input('password')
        );

        if(Auth::validate($userdata)){
            if(Auth::attempt($userdata)){
                if(Auth::user()->type_of_user == ''){

                }
            }
        }
    }
}
