<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    protected $fillables = ['product_name', 'product_sub_name', 'product_type', 'product_details', 'product_image'];

    public function type(){
        return $this->belongsTo(ProductType::class, 'product_type');
    }
}
 