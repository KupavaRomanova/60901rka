<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {    
        DB::table('order')->insert([
            ['id' => 1, 'user_id' => 1, 'adress' => 'Address 1', 'date_of_purchase' => now(), 'date_of_receipt' => now()->addDay(7), 'val' => 2300],
            ['id' => 2, 'user_id' => 2, 'adress' => 'Address 2', 'date_of_purchase' => now(), 'date_of_receipt' => now()->addDay(7), 'val' => 3500],
            ['id' => 3, 'user_id' => 3, 'adress' => 'Address 3', 'date_of_purchase' => now(), 'date_of_receipt' => now()->addDay(7), 'val' => 5000],
        ]);

        DB::table('product_order')->insert([
            ['id' => 1, 'products_id' => 17, 'count' => 2, 'id_order' => 1, 'val' => 1400],
            ['id' => 2, 'products_id' => 18, 'count' => 1, 'id_order' => 1, 'val' => 900],
            ['id' => 3, 'products_id' => 20, 'count' => 1, 'id_order' => 2, 'val' => 3000],
            ['id' => 4, 'products_id' => 22, 'count' => 1, 'id_order' => 2, 'val' => 500],
            ['id' => 5, 'products_id' => 23, 'count' => 1, 'id_order' => 3, 'val' => 5000],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
