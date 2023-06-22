<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

date_default_timezone_set("Asia/Jakarta");

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register',[
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validated) {
            $user = new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            $user->role='user';
            $user->save();
            return redirect('/login')->with('message','Account successfully created');
        }
        else {
            return back()->with('message','Error');
        }
    }
}
