<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Tag;

class CategoryBlogController extends Controller
{
    public function index($id){
        $categories = Category::where('status', 'active')->latest()->get();
        $tags = Tag::where('status', 'active')->get();
        $popular_blogs = Blog::where('status', 'published')->orderBy('visitor_count', 'desc')->take(5)->get();

        $blogs = Blog::where("category_id",$id)->latest()->paginate(10);
        $category_name = Category::where("id",$id)->first();
        return view('frontend.categoryBlog.index', compact('blogs','category_name','categories','tags','popular_blogs'));
    }

    public function single_blog($id){
        $blog = Blog::where("id",$id)->first();

        $categories = Category::where('status', 'active')->latest()->get();
        $tags = Tag::where('status', 'active')->get();
        $popular_blogs = Blog::where('status', 'published')->orderBy('visitor_count', 'desc')->take(5)->get();

        $comments = Comment::with('relationWithReply')->where("blog_id",$id)->whereNull('parent_id')->latest()->get();
        if($blog){
            Blog::find($id)->update(["visitor_count"=> $blog->visitor_count + 1]);
        }
        return view('frontend.singleBlog.index', compact('blog','comments','categories','tags','popular_blogs'));
    }
}
