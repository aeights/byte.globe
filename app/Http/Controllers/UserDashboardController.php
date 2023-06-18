<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function show()
    {
        return view('user.dashboarduser',[
            'title' => 'User',
            'mypost' => Post::where('user_id',Auth::user()->id)->get(),
            'allpost' => Post::all(),
            'pending' => Post::where('status','Pending')->get(),
            'accepted' => Post::where('status','Accepted')->get(),
            'declined' => Post::where('status','Declined')->get(),
        ]);
    }
}
