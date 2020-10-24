<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index () {
        $myQuestion = Questions::where('id', '>', 0)->get();
        return view('pages.topic', ['data' => $myQuestion]);
    }
}
