<?php

namespace App\Http\Resources\product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
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
