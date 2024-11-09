<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    //
    public function abate(){
        return view('pages.policy.abate');
    }
    public function warranty(){
        return view('pages.policy.warranty');
    }
    public function confidentiality(){
        return view('pages.policy.confidentiality');
    }
    public function delivery(){
        return view('pages.policy.delivery');
    }

    
}
