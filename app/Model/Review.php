<?php

namespace App\Model;

use App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['customer', 'starRating', 'review'];

    public function product() 
    {
        return $this->belongsTo(Product::class);
    } 
}
