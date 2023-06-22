<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

date_default_timezone_set("Asia/Jakarta");

class UserPostController extends Controller
{
    public function post()
    {
        return view('user.allpost',[
            'title' => 'User',
            'posts' => Post::where('user_id',Auth::user()->id)->get()
        ]);
    }
    
    public function addPost()
    {
        return view('user.addpost',[
            'title' => 'User',
            'category' => Category::all()
        ]);
    }

    public function processAddPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required',
            'body' => 'required',
        ]);

        if ($validated) {
            if ($request->hasFile('image')) {
                $request->file('image')->move('post image/',date('YmdHis') . "." .$request->file('image')->getClientOriginalName());
                $post = new Post();
                $post->user_id=Auth::user()->id;
                $post->category_id=$request->category;
                $post->title=$request->title;
                $post->slug=Str::slug($request->title);
                $post->image=date('YmdHis') . "." .$request->file('image')->getClientOriginalName();
                $post->body=$request->body;
                $post->status='Pending';
                $post->save();
                return redirect('/dashboard/user/post')->with('message','Add post successfully');
            }
        }
        else {
            return back();
        }
    }
    
    public function editPost(Request $request)
    {
        return view('user.editpost',[
            'title' => 'User',
            'category' => Category::all(),
            'post' => Post::find($request->id)
        ]);
    }

    public function processEditPost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
        ]);

        if ($validated) {
            if ($request->hasFile('image')) {
                $request->file('image')->move('post image/',date('YmdHis') . "." .$request->file('image')->getClientOriginalName());
                $post = Post::find($request->id);
                $post->user_id=Auth::user()->id;
                $post->category_id=$request->category;
                $post->title=$request->title;
                $post->slug=Str::slug($request->title);
                $post->image=date('YmdHis') . "." .$request->file('image')->getClientOriginalName();
                $post->body=$request->body;
                $post->status='Pending';
                unlink('post image/'.$request->old_image);
                $post->save();
                return redirect('/dashboard/user/post')->with('message','Edit post successfully');
            }
            else {
                $post = Post::find($request->id);
                $post->user_id=Auth::user()->id;
                $post->category_id=$request->category;
                $post->title=$request->title;
                $post->slug=Str::slug($request->title);
                $post->body=$request->body;
                $post->status='Pending';
                $post->save();
                return redirect('/dashboard/user/post')->with('message','Edit post successfully');
            }
        }
        else {
            return back();
        }
    }

    public function deletePost(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        unlink('post image/'.$request->old_image);
        return back()->with('message','Delete post successfully');
    }
}
