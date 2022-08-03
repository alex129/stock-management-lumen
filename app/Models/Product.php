<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $attributes = ['quantity' => 0];
    protected $appends = ['quantity'];

    public function movements()
    {
        return $this->hasMany(Movement::class);
    }

    public function getQuantityAttribute() :Int
    {
        return $this->movements()->sum('quantity');
    }
}
