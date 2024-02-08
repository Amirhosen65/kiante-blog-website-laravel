<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorRequestController extends Controller
{
    public function authors_approved($id){
        $author = User::where('id', $id)->first();
        if($author->approve_status == false){
            User::find($id)->update([
                'approve_status' => true,
                'updated_at' => now(),
            ]);
            return back()->with('success','Author request approved!');
        }
    }

    public function authors_rejected($id){
        $author = User::where('id', $id)->first();
        if($author->approve_status == false){
            User::find($id)->delete();
            return back()->with('success','Author request rejected!');
        }
    }

    public function authors_list(){
        $users = User::where('approve_status', true)->where('block_status', false)->where('role', 'author')->latest()->paginate(10);
        return view('dashboard.authors.author_list', compact('users'));
    }

    // Auhtor ban
    public function authors_block($id){
        $author = User::where('id', $id)->first();
        if($author->block_status == false){
            User::find($id)->update([
                'block_status'=> true,
            ]);
            return back()->with('success','Author blocked successfull!');
        }
    }

}
