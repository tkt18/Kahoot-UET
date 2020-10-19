<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function getQuestion ($topicId = 1) {
//        $isDelete =
        $data = Questions::where('topic_id', $topicId)->get();
        return view('pages.question', ['data' => $data]);
    }
}
