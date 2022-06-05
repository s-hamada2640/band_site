<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function chatroom()
    {
        return $this->belongsTo('App\Chatroom');
    }
}
