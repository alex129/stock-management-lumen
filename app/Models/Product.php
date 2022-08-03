<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $appends = ['quantity'];
    protected $fillable = ['name'];

    public function movements()
    {
        return $this->hasMany(Movement::class);
    }

    public function getQuantityAttribute() :Int
    {
        return $this->movements()->sum('quantity');
    }

    public function setQuantityAttribute($value)
    {
        $this->attributes['quantity'] = $value;
    }
}
