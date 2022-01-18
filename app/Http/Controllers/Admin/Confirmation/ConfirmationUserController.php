<?php

namespace App\Http\Controllers\Admin\Confirmation;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ConfirmationUserController extends Controller
{
    public function confirm(Request $request){
        $user = User::find($request->id);
        $user->status = 2;
        $user->save();

        return back();

    }
}
