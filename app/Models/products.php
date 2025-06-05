<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    protected $fillable = ['productId','productName','description','price','imgDestination','category'];
     public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
