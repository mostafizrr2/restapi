<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'description' =>  $this->detaile,
            'price' => $this->price,
            'discount' => $this->discount,
            'stock' => $this->stock,
            'reviews' => $this->reviews->count() > 0 ? round( $this->reviews->sum('star')/$this->reviews->count(), 2 ) : 'No reting yet',
            'links' => [
                'reviews' => route('reviews.index', $this->id),
            ]
        ];
    }
}
