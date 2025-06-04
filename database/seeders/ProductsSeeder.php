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

            products::insert(
            [
            'productId'=>'PROD-004',
            'productName'=>'P.E Uniform',
            'description'=>'Comfortable P.e Uniform for boys and girls with school logo',
            'price'=>650,
            'imgDestination'=>'images/p.eUniform.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-005',
            'productName'=>'Blue Shirt',
            'description'=>'Comfortable Blue Shirt for boys and girls with school logo',
            'price'=>300,
            'imgDestination'=>'images/blueShirt.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-006',
            'productName'=>'Mathematics Book',
            'description'=>'Complete College math book for learning and review',
            'price'=>500,
            'imgDestination'=>'images/mathBook.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-007',
            'productName'=>'English Book',
            'description'=>'A helpful guide to improve English',
            'price'=>350,
            'imgDestination'=>'images/englishBook.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-008',
            'productName'=>'Philosophy Book',
            'description'=>'An essential philosophy book with classic theories and ideas',
            'price'=>350,
            'imgDestination'=>'images/philosophyBook.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-009',
            'productName'=>'Science Book',
            'description'=>'A colorful and easy to follow science textbook',
            'price'=>500,
            'imgDestination'=>'images/scienceBook.png',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-010',
            'productName'=>'English Notes',
            'description'=>'Clear handwritten notes covering key English topics',
            'price'=>250,
            'imgDestination'=>'images/englishNotes.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-011',
            'productName'=>'Mathematics Notes',
            'description'=>'Organized math notes with formulas and solved examples',
            'price'=>300,
            'imgDestination'=>'images/mathNotes.png',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-012',
            'productName'=>'Science Notes',
            'description'=>'Creative and clear notes covering important science topics',
            'price'=>250,
            'imgDestination'=>'images/scienceNotes.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);

            products::insert(
            [
            'productId'=>'PROD-013',
            'productName'=>'Philosophy Notes',
            'description'=>'Simple notes explaining key philosophy concepts',
            'price'=>300,
            'imgDestination'=>'images/philosophyNotes.jpg',
            'category'=>"new",
            'created_at'=>now(),
            'updated_at'=>now()
            ]);
    }
}
