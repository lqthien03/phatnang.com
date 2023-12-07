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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('address');
            $table->string('name');
            $table->string('email');
            $table->string('holine');
            $table->string('zalo');
            $table->string('phone');
            $table->string('website');
            $table->string('fanpage')->nullable;
            $table->string('map')->nullable;
            $table->string('link')->nullable;
            $table->string('time')->nullable;
            $table->string('product_number')->nullable;
            $table->string('related_product_number')->nullable;
            $table->string('posts')->nullable;
            $table->string('related_posts')->nullable;
            $table->string('map_iframe')->nullable;
            $table->string('gg_analytic')->nullable;
            $table->string('gg_webmaster_tool')->nullable;
            $table->string('head_js')->nullable;
            $table->string('body_js')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
