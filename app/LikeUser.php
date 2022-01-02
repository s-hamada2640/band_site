<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeUser extends Model
{
    public function from_user()
    {
        return $this->belongsTo('App\User','from_userid');
    }

    public function to_user()
    {
        return $this->belongsTo('App\User','to_userid');
    }
}
