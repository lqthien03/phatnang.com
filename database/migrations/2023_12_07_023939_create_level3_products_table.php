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
        Schema::create('level3_products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('tittle');
            $table->tinyInteger('display')->nullable;

            $table->unsignedBigInteger('detail_product_id');
            $table->foreign('detail_product_id')->references('id')->on('detail_products');

            $table->unsignedBigInteger('seo_id');
            $table->foreign('seo_id')->references('id')->on('seos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level3_products');
    }
};
