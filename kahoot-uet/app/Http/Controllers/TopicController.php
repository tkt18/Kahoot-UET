<?php

namespace App\Http\Controllers;

use App\Topics;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function getTopic ($creator_id = 1) {
//        if (is_null($creator_id)) {
//            return view ('Error');
//        }
        $data = Topics::where('creator_id', $creator_id)->get();
        return view('pages.topic', ['data' => $data]);
    }
}
