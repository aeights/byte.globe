<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login',[
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validated) {
            if (Auth::attempt($validated)) {
                if (Auth::user()->role == 'user') {
                    return redirect('/dashboard/user')->with('message','Login successfully');
                }
                elseif (Auth::user()->role == 'admin') {
                    return redirect('/dashboard/admin')->with('message','Login successfully');
                }
            }
            else{
                return back()->with('message','Wrong email or password!');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
