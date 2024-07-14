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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('price')->nullable();
            $table->string('display')->nullable();
            $table->string('contrast_ratio')->nullable();
            $table->string('resolution')->nullable();
            $table->string('brightness')->nullable();
            $table->string('availability')->nullable();
            $table->text('description')->nullable();
            $table->text('specification')->nullable();
            $table->string('ratio_screen')->nullable();
            $table->string('throw_ratio_min')->nullable();
            $table->string('throw_ratio_max')->nullable();
            $table->text('link_lazada')->nullable();
            $table->text('link_shopee')->nullable();
            $table->text('other_links')->nullable();
            $table->text('check_manu')->nullable();
            $table->text('image')->nullable();
            $table->string('price_sale')->nullable();
            $table->string('brand')->nullable();
            $table->string('status_sale')->default('off');
            $table->string('status_sell')->default('on');
            $table->text('product_code')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};