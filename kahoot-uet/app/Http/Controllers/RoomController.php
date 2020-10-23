<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function save () {

        $room = Rooms::create([
            'PIN' => '1231312',
            'creator_id' => 1,
        ]);
        $room->save();
        return view('pages.topic', ['data' => $room]);
    }

}
