<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Variant;

class PreOrder extends Model
{
    use HasFactory;
    protected $fillable =['product_id','customer_name','phone_number','email','quantity','remark','variant_id','stock_alert_sent'];
    
    public static function getPreOrderForFilters($searchKey){

        return PreOrder::with('variant')->where('customer_name','like','%'.$searchKey.'%')->orderBy('id', 'DESC')->paginate(env("RECORDS_PER_PAGE"));

    }
    
    // get varient for preorder
    public function variant(){
        return $this->belongsTo(Variant::class ,'variant_id','id');
    }

    public function product(){

        return $this->belongsTo(Product::class ,'product_id','id');
    }

}
