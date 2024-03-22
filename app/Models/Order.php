<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // отношение "один ко многим" с моделью User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // отношение "многие ко многим" с моделью Product через  таблицу product_order
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order')->withPivot('count', 'val');
    }
}
