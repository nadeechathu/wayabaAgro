<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInquiry extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','variant_id','product_name','quantity','customer_name','phone','email','address','country_id','notes'];

    public function product(){

        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function variant(){

        return $this->belongsTo(Variant::class,'variant_id','id');
    }

    public function country(){

        return $this->belongsTo(Country::class,'country_id','id');
    }

}

