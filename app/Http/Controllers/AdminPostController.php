<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LikedPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

date_default_timezone_set("Asia/Jakarta");

class AdminPostController extends Controller
{
    public function adminPost()
    {
        return view('admin.adminpost',[
            'title' => 'Admin',
            'posts' => Post::where('user_id',Auth::user()->id)->get()
        ]);
    }
    
    public function addAdminPost()
    {
        return view('admin.addpost',[
            'title' => 'Admin',
            'category' => Category::all()
        ]);
    }

    public function processAddAdminPost(Request $request)
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
                return redirect('/dashboard/admin/post')->with('message','Add post successfully');
            }
        }
        else {
            return back();
        }
    }
    
    public function editAdminPost(Request $request)
    {
        return view('admin.editpost',[
            'title' => 'Admin',
            'category' => Category::all(),
            'post' => Post::find($request->id)
        ]);
    }

    public function processEditAdminPost(Request $request)
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
                return redirect('/dashboard/admin/post')->with('message','Edit post successfully');
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
                return redirect('/dashboard/admin/post')->with('message','Edit post successfully');
            }
        }
        else {
            return back();
        }
    }

    public function deleteAdminPost(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        unlink('post image/'.$request->old_image);
        return back()->with('message','Delete post successfully');
    }

    public function userPost()
    {
        return view('admin.userpost',[
            'title' => 'Admin',
            'posts' => Post::all()
        ]);
    }

    public function detailUserPost(Request $request)
    {
        return view('admin.detailuserpost',[
            'title' => 'Admin',
            'post' => Post::find($request->id)
        ]);
    }

    public function saveUserPost(Request $request)
    {
        $post = Post::find($request->id);
        $post->status=$request->status;
        $post->save();
        return redirect('/dasboard/admin/user-post')->with('message','Post successfully updated');
    }

    public function deleteUserPost(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        unlink('post image/'.$request->old_image);
        return back()->with('message','Delete post successfully');
    }

    public function likedAdminPost()
    {
        return view('admin.likedpost',[
            'title' => 'Admin',
            'LikedPost' => LikedPost::where('user_id',Auth::user()->id)->get()
        ]);
    }
}
