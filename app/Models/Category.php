<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    public $incrementing = false;

    protected $fillable = [
        'category_id',
        'category_name',
        'category_description',
    ];

    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}
