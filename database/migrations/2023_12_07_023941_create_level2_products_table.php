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
        Schema::create('level2_products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->tinyInteger('display');

            $table->unsignedBigInteger('level2_product_id');
            $table->foreign('level2_product_id')->references('id')->on('level1_products');

            $table->unsignedBigInteger('seo_id');
            $table->foreign('seo_id')->references('id')->on('seos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level2_products');
    }
};
