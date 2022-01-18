<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
class UserController extends Controller
{
    public static function checkStatus(){
        
        if(Auth::user()->status == 1){
            Auth::logout();
            return Redirect::route('login')->with('message','Üyeliğiniz Henüz Onaylanmadı');
        }
       
    }
}
