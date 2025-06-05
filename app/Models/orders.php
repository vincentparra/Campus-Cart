<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    /** @use HasFactory<\Database\Factories\OrdersFactory> */
    use HasFactory;  
    public function product()
    {
        return $this->belongsTo(Product::class); 
    }

    public function student()
    {
        return $this->belongsTo(Students::class); 
    }
}
