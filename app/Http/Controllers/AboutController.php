<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Index About
    public function index(){
        return view('pages.about.index');
    }
}
