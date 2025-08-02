<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['name', 'uom', 'description'];

    public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }

    public function getCurrentStockAttribute(): int
    {
        return $this->stocks()->where('type', 'in')->sum('qty') -
            $this->stocks()->where('type', 'out')->sum('qty');
    }
}
