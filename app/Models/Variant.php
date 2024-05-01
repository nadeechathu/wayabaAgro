<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','variant_name','description','unit_price','packing_cost','selling_price','weight','status','bulk_quantity','bulk_price'];

    public function inventory(){
        return $this->hasOne(ProductInventory::class);
    }

    public function inventoryHistories(){
        return $this->hasMany(ProductInventoryHistory::class)->orderBy('id','desc');
    }
}
