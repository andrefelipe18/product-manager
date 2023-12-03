<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSupplier extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id',
        'supplier_id'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
