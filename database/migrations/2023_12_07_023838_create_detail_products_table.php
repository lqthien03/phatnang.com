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
            $table->tinyInteger('outstand');
            $table->tinyInteger('new');
            $table->tinyInteger('selling');
            $table->tinyInteger('display');

            $table->unsignedBigInteger('seo_id');
            $table->foreign('seo_id')->references('id')->on('seos');
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
