<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = "product_images";
    protected $fillable = ['id','product_id','src','alt_text','sort_order','is_featured','image_type'];
}
