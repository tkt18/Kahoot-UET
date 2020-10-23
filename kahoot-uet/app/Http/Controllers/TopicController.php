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
        $creator_id = 2;

        $myTopic = Topics::select('id' ,'name', 'creator_id', 'created_at', 'is_public', 'is_daft')->where('creator_id', $creator_id)->where('is_deleted', 0)->get();
        $result = [];
        for ($i = 0; $i < count($myTopic); $i++) {
            $topic = $myTopic[$i];
            $creatorName = User::select('username')->where('id', $topic['creator_id'])->get();
            $creatorName = $creatorName[0]['username'];
            $topic['creator_name'] = $creatorName;
            $topic['number_question'] = Questions::where('topic_id', $topic['id'])->count();
        }
        return view('pages.topic', ['data' => $myTopic]);
    }
}
