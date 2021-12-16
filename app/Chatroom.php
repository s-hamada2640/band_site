<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    public function chat()
    {
        return $this->hasMany('App\Chat');
    }
}
