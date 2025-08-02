<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['product_id', 'type', 'qty', 'note'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
