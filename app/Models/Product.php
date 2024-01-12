<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'ProductID';
    public $incrementing = false;

    protected $fillable = [
        'ProductId',
        'ProductName',
        'ProductDescription',
        'ProductPrice',
        'CategoryID',
        'ProductImageURL',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }
}
