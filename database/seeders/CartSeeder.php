<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

         CartItem::create([
            'student_id' => 1,
            'product_id' => 1,
            'quantity' => 2
        ]);

        CartItem::create([
            'student_id' => 1,
            'product_id' => 2,
            'quantity' => 1
        ]);
    
    }
}
