<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AdminAuth extends Controller
{

    public function show()
    {
        if(Auth::guard('admin')->check()){
            return Inertia::render('Admin/AdminDashboard');
        }else{
        return Inertia::render('Admin/AdminLogin');
        }
    }

    public function login(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
           return Inertia::render('Admin/AdminDashboard');
        }
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
}
