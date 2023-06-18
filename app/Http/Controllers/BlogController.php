<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('index',[
            'category' => Category::all(),
            'random' => Post::all()->random(5),
            'programming' => Post::where('category_id',3)->get(),
            'allpost' => Post::all(),
        ]);
    }
}
