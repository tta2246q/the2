<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Contact
    public function main(){
        return view('pages.contact.main');
    }
}
