<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;
use App\Models\students;
class cart extends Model
{
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;
     protected $fillable = ['student_id', 'product_id', 'quantity'];

    public function product() {
        return $this->belongsTo(products::class);
    }

    public function student() {
        return $this->belongsTo(students::class);
    }
}
