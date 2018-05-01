<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $guarded=['slug'];

	public function getRouteKeyName(){
		return 'slug';
	}
}
