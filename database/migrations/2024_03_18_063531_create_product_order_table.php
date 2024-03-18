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
        Schema::create('product_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('products_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('count_in_cart');
            $table->bigInteger('id_order')->unsigned()->nullable();
            $table->bigInteger('val');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_order')->references('id')->on('order')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_order');
    }
};
