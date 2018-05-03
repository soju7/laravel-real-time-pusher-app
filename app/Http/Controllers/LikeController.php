<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{

	public function likeit(Reply $reply)
	{
		return $reply->likes()->create(['user_id'=>1]);
	}

	public function unlikeit(Reply $reply)
	{
		//return($reply->likes());
		 $reply->likes()->where(['user_id'=>1])->first()->delete();

		 return response('deleted',\Symfony\Component\HttpFoundation\Response::HTTP_OK);
	}
}
