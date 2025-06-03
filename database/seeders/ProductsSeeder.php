<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\products;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        products::insert([
            'productId'=>'PROD-001',
            'productName'=>'Campus Hoodie',
            'description'=>'Comfortable hoodie with school logo',
            'price'=>200,
            'imgDestination'=>'images/campusHood.jpeg',
            'category'=>"used"
        ]);
    }
}
