<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    
    protected $table = 'chatroom';

    public function chat()
    {
        return $this->hasMany('App\Chat');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
