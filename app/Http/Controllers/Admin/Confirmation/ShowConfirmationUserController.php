<?php

namespace App\Http\Controllers\Admin\Confirmation;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class ShowConfirmationUserController extends Controller
{
    public static function show(){

         $user = User::where('status','1')->get();
         
         return $user;

    }
}
