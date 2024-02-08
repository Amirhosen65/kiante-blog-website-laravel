<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;


class TagBlogController extends Controller
{
    public function index($id){
        
        $categories = Category::where('status', 'active')->latest()->get();
        $tags = Tag::where('status', 'active')->get();
        $popular_blogs = Blog::where('status', 'published')->orderBy('visitor_count', 'desc')->take(5)->get();

        $blogs = Blog::where("tag_id",$id)->latest()->paginate(10);
        $tag_name = Tag::where("id",$id)->first();
        return view('frontend.tagBlog.index', compact('blogs','tag_name','categories','tags','popular_blogs'));
    }
}
