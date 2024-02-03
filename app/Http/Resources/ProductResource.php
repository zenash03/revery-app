<?php

namespace App\Http\Resources;

// use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $productName = $this->product_name;
        $slug = Str::slug($productName);

        return [
            "product_id" => $this->product_id,
            "product_name" => $this->product_name,
            "slug"=> $slug,
            "product_price" => $this->product_price,
            "category" => [
                "category_id" => $this->category->category_id,
                "category_name"=> $this->category->category_name,
                "category_description"=> $this->category->category_description,
            ],
            "product_description" => $this->product_description,
            "product_image_url" => $this->product_image_url,
            "created_at" => $this->created_at->format('m/d/Y'),
            "updated_at" => $this->updated_at->format('m/d/Y'),
        ];
    }
}
