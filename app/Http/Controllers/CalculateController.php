<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    // Index About
    public function index(){
        return view('pages.calculate.index');
    }
}
