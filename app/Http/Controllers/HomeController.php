<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::all();
        $users = User::all();
        $comments = Comment::where('parent_id', null)->get();
        return view('dashboard.index', compact('blogs','users','comments'))->with('login_success', 'Login successfull!');

    }
}
