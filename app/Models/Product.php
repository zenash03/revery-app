<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $incrementing = false;

    protected $fillable = [
        'product_id',
        'product_name',
        'product_description',
        'product_price',
        'category_id',
        'product_image_url',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
