<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productsales', function (Blueprint $table) {
              $table->id();
            $table->string('productId');
            $table->string('productName');
            $table->string('description');
            $table->integer('price');
            $table->string('imgDestination');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productsales');
    }
};
