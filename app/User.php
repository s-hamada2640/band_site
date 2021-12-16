<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function favorites()
    {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }

    public function from()
    {
        return $this->hasMany('App\LikeUser','from_userid');
    }

    public function to()
    {
        return $this->hasMany('App\LikeUser','to_userid');
    }

    public function chat()
    {
        return $this->hasMany('App\Chat');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','activity_area','my_part','activity_level',
        'my_level','genre','favorite_artist','sex','age','activity_timezone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
