<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $posts = Post::where('status','Accepted')->get();
        return view('index',[
            'category' => Category::all(),
            'random' => $posts->random(5),
            'programming' => Post::where('category_id',3)->get(),
            'allpost' => $posts,
        ]);
    }
    
    public function post($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('post',[
            'category' => Category::all(),
            'post' => $post,
            'image' => asset('post image/'.$post->image)
        ]);
    }

    public function category($id)
    {
        return view('category',[
            'category' => Category::all(),
            'ctg' => Category::where('id',$id)->first(),
            'posts' => Post::where('category_id',$id)->get()
        ]);
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'keyword' => 'required'
        ]);

        if ($validated) {
            $posts = Post::where('title','LIKE','%'.$request->keyword.'%')->get();
            if ($posts) {
                return view('search',[
                    'category' => Category::all(),
                    'keyword' => $request->keyword,
                    'posts' => $posts
                ]);
            }else{
                return back()->with('message','Barang yang anda cari tidak ada');
            }
        } else{
            return back()->with('message','Ketikkan barang yang ingin anda cari');
        }
    }
}
