<?php

namespace App\Http\Controllers;

use App\Questions;
use App\Topics;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index () {
        $creator_id = 1;

        $myTopic = Topics::select('id' ,'name', 'creator_id', 'created_at', 'is_public', 'is_daft')->where('creator_id', $creator_id)->where('is_deleted', 0)->get();
        for ($i = 0; $i < count($myTopic); $i++) {
            $topic = $myTopic[$i];
            $topic['creator_name'] = User::select('username')->where('id', $topic['creator_id'])->get();
            $topic['number_question'] = Questions::where('topic_id', $topic['id'])->count();
        }
        return view('pages.topic', ['data' => $myTopic]);
    }
}
