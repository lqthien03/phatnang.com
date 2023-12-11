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
        
        Schema::create('detail_products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('tittle');
            $table->string('gallery');
            $table->string('outstand');
            $table->string('new');
            $table->string('selling');
            $table->string('display');
            $table->string('information');
            $table->unsignedBigInteger('seo_id');
            $table->foreign('seo_id')->references('id')->on('seos');
            $table->unsignedBigInteger('level3_products_id');
            $table->foreign('level3_products_id')->references('id')->on('level3_products');
            $table->unsignedBigInteger('level1_products_id');
            $table->foreign('level1_products_id')->references('id')->on('level1_products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_products');
    }
};
