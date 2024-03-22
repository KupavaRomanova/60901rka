<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $guarded = ['id', 'created_at', 'updated_at'];

        // отношение "один ко многим" с моделью Category
        public function category()
        {
            return $this->belongsTo(Category::class);
        }
    
        // отношение "один ко многим" с моделью User
        public function owner()
        {
            return $this->belongsTo(User::class, 'owner_id');
        }
    
        // отношение "многие ко многим" с моделью Order через таблицу product_order
        public function orders()
        {
            return $this->belongsToMany(Order::class, 'product_order', 'products_id', 'id_order')->withPivot('count', 'val');
        }
}
