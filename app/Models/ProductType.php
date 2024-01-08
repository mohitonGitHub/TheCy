<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
        
    protected $table = "product_types";
    protected $PrimaryKey = "product_type";
    protected $fillable = ['product_type'];
}
