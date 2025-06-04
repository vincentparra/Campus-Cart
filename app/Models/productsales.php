<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productsales extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsalesFactory> */
    use HasFactory;
    protected $fillable = ['productId','productName','description','price','imgDestination','category'];
}
