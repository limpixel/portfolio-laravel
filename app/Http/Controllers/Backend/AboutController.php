<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    

    public function index()
    {
        $abouts = About::orderBy('id',)->get();
        return view('backend.about.index', compact('abouts') );
    }
}
