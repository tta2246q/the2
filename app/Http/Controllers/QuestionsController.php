<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    //
    public function questions(){
        return view('pages.questions.questions');
    }
}
