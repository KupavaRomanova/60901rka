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
        DB::table('categories')->insert([
            ['id' => 1, 'category_name' => 'Украшения'],
            ['id' => 2, 'category_name' => 'Одежда'],
            ['id' => 3, 'category_name' => 'Обувь'],
            ['id' => 4, 'category_name' => 'Игрушки'],
            ['id' => 5, 'category_name' => 'Декор'],
        ]);

        DB::table('products')->insert([
            ['id' => 17, 'product_name' => 'Вязаная игрушка-амигуруми',                 'owner_id' => 3, 'category_id' => 4, 'description' => 'Эта уникальная игрушка-амигуруми вязана вручную из прочной пряжи',                                        'photo' => 'default.jpg', 'price' => 700,  'count' => 2],
            ['id' => 18, 'product_name' => 'Вязаная подушка с геометрическим узором',   'owner_id' => 2, 'category_id' => 5, 'description' => 'Эта красивая вязаная подушка с уникальным геометрическим узором станет ярким акцентом в вашем интерьере', 'photo' => 'default.jpg', 'price' => 900,  'count' => 5],
            ['id' => 20, 'product_name' => 'Макраме-подвеска для цветочного горшка',    'owner_id' => 1, 'category_id' => 5, 'description' => 'Эта элегантная макраме-подвеска сделана вручную из прочной веревки',                                      'photo' => 'default.jpg', 'price' => 1000, 'count' => 5],
            ['id' => 22, 'product_name' => 'Новый продукт',                             'owner_id' => 1, 'category_id' => 1, 'description' => 'Описание продукта',                                                                                       'photo' => 'default.jpg', 'price' => 500,  'count' => 10],
            ['id' => 23, 'product_name' => 'Новый продукт1',                            'owner_id' => 2, 'category_id' => 2, 'description' => '2Описание продукта',                                                                                      'photo' => 'default.jpg', 'price' => 2500, 'count' => 2],
            ['id' => 7,  'product_name' => 'Вязанная сумка',                            'owner_id' => 2, 'category_id' => 1, 'description' => 'Большая сумка',                                                                                           'photo' => 'default.jpg', 'price' => 2000, 'count' => 10],
            ['id' => 8,  'product_name' => 'Золотая серебристая подвеска с жемчужиной', 'owner_id' => 1, 'category_id' => 1, 'description' => 'Элегантная подвеска изготовлена из золотистого серебра и украшена красивой жемчужиной',                   'photo' => 'default.jpg', 'price' => 3500, 'count' => 10],
            ['id' => 9,  'product_name' => 'Черная кожаная куртка',                     'owner_id' => 4, 'category_id' => 2, 'description' => 'Современная и стильная черная кожаная куртка изготовлена из высококачественной кожи',                     'photo' => 'default.jpg', 'price' => 9000, 'count' => 10],
            ['id' => 10, 'product_name' => 'Платье в полоску',                          'owner_id' => 3, 'category_id' => 2, 'description' => 'Это элегантное платье в полоску создано из комфортного материала с акцентом на деталях',                  'photo' => 'default.jpg', 'price' => 1500, 'count' => 10],
            ['id' => 11, 'product_name' => 'Ручная вышивка на кедах',                   'owner_id' => 3, 'category_id' => 3, 'description' => 'Эти удобные кеды украшены нежной ручной вышивкой',                                                        'photo' => 'default.jpg', 'price' => 3000, 'count' => 10],
            ['id' => 12, 'product_name' => 'newprod',                                   'owner_id' => 3, 'category_id' => 3, 'description' => 'Эти плетеные босоножки сделаны вручную из натуральных материалов, таких как солома или лоза',             'photo' => 'default.jpg', 'price' => 3500, 'count' => 2],
            ['id' => 13, 'product_name' => 'Вязаные носки из органического хлопка',     'owner_id' => 2, 'category_id' => 3, 'description' => 'Эти мягкие и теплые носки вязаны вручную из органического хлопка',                                        'photo' => 'default.jpg', 'price' => 800,  'count' => 2],
            ['id' => 14, 'product_name' => 'Мягкая игрушка-плюшевый мишка',             'owner_id' => 1, 'category_id' => 4, 'description' => 'Этот милый и пушистый мишка сделан вручную из высококачественного плюша',                                 'photo' => 'default.jpg', 'price' => 1200, 'count' => 2],
            ['id' => 16, 'product_name' => 'Деревянный конструктор',                    'owner_id' => 4, 'category_id' => 4, 'description' => 'Этот деревянный конструктор сделан вручную из натурального дерева',                                       'photo' => 'default.jpg', 'price' => 2000, 'count' => 3],
            ['id' => 19, 'product_name' => 'Керамическая ваза с ручной росписью',       'owner_id' => 4, 'category_id' => 5, 'description' => 'Эта уникальная керамическая ваза сделана вручную и украшена тонкой ручной росписью',                      'photo' => 'default.jpg', 'price' => 2500, 'count' => 2],
            ['id' => 5,  'product_name' => 'Рубашка с котиками',                        'owner_id' => 4, 'category_id' => 2, 'description' => 'Мужская рубашка',                                                                                         'photo' => 'default.jpg', 'price' => 15,   'count' => 10],
        ]);



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
