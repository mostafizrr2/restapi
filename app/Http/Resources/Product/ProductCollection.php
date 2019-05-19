<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
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
            'name' => $this->name,
            // 'price' => $this->price,
            // 'discount' => $this->discount,
            'totalPrice' => (1 - ($this->discount/$this->price) ) * $this->price,
            'reviews' => $this->reviews->count() > 0 ? round( $this->reviews->sum('star')/$this->reviews->count(), 2 ) : 'No reting yet',
            'links' => [
                'detailes' => route('products.show', $this->id),
            ]

        ];
    }
}
