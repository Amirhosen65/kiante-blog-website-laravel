<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\SiteIdenty;

class FrontendController extends Controller
{
    public function index()
    {
        $latestCategory = Category::where('status', 'active')->latest('created_at')->first();

        $latestCategoryBlogs = [];
        if ($latestCategory) {
            $latestCategoryBlogs = $latestCategory->RelationWithBlog()
                ->where('status', 'published')
                ->latest('created_at')
                ->take(4)
                ->get();
        }

        $blogsLastWeek = Blog::where('status', 'published')
            ->whereDate('created_at', '>=', Carbon::now()->subWeek())
            ->latest('created_at')
            ->get();

            $firstThreeBlogs = Blog::where('status', 'published')
            ->oldest('created_at')
            ->take(3)
            ->get();

        $feature_blogs = Blog::where('feature', 'active')->get();
        $tech_blogs = Blog::where('status', 'published')->where('category_id', '1')->latest()->first();
        $categories = Category::where('status', 'active')->latest()->get();
        $tags = Tag::where('status', 'active')->get();
        $blogs = Blog::withCount('commentsRelation')->where('status', 'published')->take(4)->get();
        $popular_blogs = Blog::where('status', 'published')->orderBy('visitor_count', 'desc')->take(5)->get();

        return view('frontend.root.index', [
            'feature_blogs' => $feature_blogs,
            'categories' => $categories,
            'blogs' => $blogs,
            'tags' => $tags,
            'popular_blogs' => $popular_blogs,
            'tech_blogs' => $tech_blogs,
            'latestCategory' => $latestCategory,
            'latestCategoryBlogs' => $latestCategoryBlogs,
            'blogsLastWeek' => $blogsLastWeek,
            'firstThreeBlogs' => $firstThreeBlogs,
        ]);
    }


    public function blogs(){
        $blogs = Blog::where('status','published')->latest()->paginate(10);

        $categories = Category::where('status', 'active')->latest()->get();
        $tags = Tag::where('status', 'active')->get();
        $popular_blogs = Blog::where('status', 'published')->orderBy('visitor_count', 'desc')->take(5)->get();

        return view('frontend.blogs.blogs',compact('blogs','categories','tags','popular_blogs'));
    }

    public function contacts(){
        $identy = SiteIdenty::all()->first();
        return view('frontend.contacts.contacts', compact('identy'));
    }


    // contacts form mail
    public function contacts_form(Request $request){
        $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|email',
            'subject'=> 'required|string',
            'message'=> 'required|string',
            'g-recaptcha-response' => 'required|captcha'

        ], [
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
            'g-recaptcha-response.captcha' => 'Captcha error! Try again later or contact the site admin.',
        ]);

        Contact::insert([
            'auth_id'=> auth()->id(),
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message'=> $request->message,
            'created_at'=> now(),

        ]);
        Mail::to($request->email)->send(new ContactMail($request->except('_token')));
        return back()->with('success', 'Your message was sent successfully.');
    }

    // contact mailbox
    public function mailbox(){
        $mailbox = Contact::latest()->get();
        return view('dashboard.contactMailbox.index', compact('mailbox'));
    }

    // contact mail view
    public function mailbox_view($id){
        $mail = Contact::where('id', $id)->first();
        return view('dashboard.contactMailbox.mail_view', compact('mail'));
    }

    public function mail_delete($id){
        $mailbox = Contact::find($id);
        $mailbox->delete();
        return redirect()->route('contact.mailbox')->with('success','Mail deleted successfully!');
    }



}
