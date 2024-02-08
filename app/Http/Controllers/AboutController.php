<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteIdenty;

class AboutController extends Controller
{
    public function about(){
        $identy = SiteIdenty::all()->first();
        return view('frontend.about.index', compact('identy'));
    }
}
