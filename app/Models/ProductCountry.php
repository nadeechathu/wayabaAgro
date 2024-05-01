<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCountry extends Model
{
    use HasFactory;

    protected $table = 'product_has_countries';
    protected $fillable = ['product_id','country_id','status'];

    public function country(){

        return $this->belongsTo(Country::class);
    }
}
