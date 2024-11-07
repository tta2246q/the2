<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Contact
    public function index(){
        return view('pages.contact.index');
    }
}
