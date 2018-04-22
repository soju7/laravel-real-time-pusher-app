<?php

namespace App\Http\Resources\product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

    	return [
    	'id' => $this->id,
    	'name' => $this->name,
    	'description' => $this->detail,
    	'price' => $this->price,
    	'stock' => $this->stock,
    	'rating'=>$this->reviews->count()>0?$this->reviews->sum('star')/$this->reviews->count():"",
    	'href'=>[
    	'reviews'=>route('reviews.index',$this->id)
    	]
    	];
    }
}
