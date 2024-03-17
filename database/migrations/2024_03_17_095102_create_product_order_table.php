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
            $table->bigInteger('users_id_order')->unsigned();
            $table->string('adress', 255);
            $table->time('date_of_purchase')->useCurrent();
            $table->date('date_of_receipt');
            $table->bigInteger('val');
            $table->foreign('users_id_order')->references('id')->on('users')->onDelete('cascade');
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
