<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //отношение "один ко многим" с моделью Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
