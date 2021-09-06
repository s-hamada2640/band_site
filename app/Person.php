<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
	protected $guarded = ["id"];
	// protected $guarded = ["password"];
	// protected $guarded = ["area1"];
	// protected $guarded = ["part1"];
	// protected $guarded = ["level1"];
	// protected $guarded = ["age"];
	public $timestamps = false;
	protected $table = 'people';
}
