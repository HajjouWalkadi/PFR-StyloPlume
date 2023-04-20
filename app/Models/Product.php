<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'quantity',
        'price',
        'discount_price',

    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function ReviewData()
    {
    return $this->hasMany('App\Models\ReviewRating','product_id');
    }
}

