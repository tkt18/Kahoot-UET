<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    protected $table = 'topics';

    public function getTopicByUser ($creator_id = 1) {
        return $this::where('creator_id', $creator_id)->get();
    }
}
