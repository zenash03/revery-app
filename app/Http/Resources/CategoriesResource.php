<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class CategoriesResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $categoryName = $this->resource->CategoryName;
        $slug = Str::slug($categoryName);

        return [
            'category_id' => $this->CategoryID,
            'category_name' => $this->CategoryName,
            'slug' => $this->$slug,
            'category_description' => $this->CategoryDescription,
            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at'=> $this->updated_at->format('m/d/Y'),
        ];
    }
}
