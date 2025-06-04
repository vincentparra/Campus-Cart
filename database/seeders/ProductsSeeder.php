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
            'category'=>"used",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        products::insert(
            [
            'productId'=>'PROD-002',
            'productName'=>'Girls Uniform',
            'description'=>'Comfortable Uniform for girls with school logo',
            'price'=>500,
            'imgDestination'=>'images/girlsUniform.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);
        products::insert(
            [
            'productId'=>'PROD-003',
            'productName'=>'Boys Uniform',
            'description'=>'Comfortable Uniform for boys with school logo',
            'price'=>500,
            'imgDestination'=>'images/boysUniform.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);
    }
}
