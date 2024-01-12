<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'CategoryID';

    public $incrementing = false;

    protected $fillable = [
        'CategoryID',
        'CategoryName',
        'CategoryDescription',
    ];

    public function products(){
        return $this->hasMany(Product::class, 'CategoryID', 'CategoryID');
    }
}
