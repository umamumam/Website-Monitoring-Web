<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback1 extends Model
{
    use HasFactory;

	public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Models\Tag');
	}
}