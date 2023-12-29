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
        Schema::create('sku_values', function (Blueprint $table) {
            $table->primary(['sku_id', 'product_id', 'product_option_id'], 'sku_value_id');
            $table->unsignedBigInteger('sku_id')->unsigned();
            $table->unsignedBigInteger('product_id')->unsigned();
            $table->unsignedBigInteger('product_option_id')->unsigned();
            $table->unsignedBigInteger('product_option_value_id');
            $table->foreign(['sku_id', 'product_id'])->references(['id', 'product_id'])->on('product_skuses')->onDelete('cascade');
            $table->foreign(['product_id', 'product_option_id'])->references(['product_id', 'id'])->on('product_options')->onDelete('cascade');
            $table->foreign(['product_option_value_id', 'product_id', 'product_option_id'], 'product_option_value_id_foreign')->references(['id', 'product_id', 'product_option_id'])->on('product_option_values')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sku_values');
    }
};
