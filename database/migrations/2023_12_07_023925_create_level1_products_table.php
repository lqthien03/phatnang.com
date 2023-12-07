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
        Schema::create('level1_products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('tittle');
            $table->string('outstand');
            $table->string('display');

            $table->foreignId('id_level_product')->constrained(
                table: 'level2_products', indexName: 'products_level_1and2'
            );

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level1_products');
    }
};
