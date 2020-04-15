<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{

    protected $fillable = [
        'product_code', 
        'product',
        
    ];
    
    public static $rules = array(
        'product_code' => 'required',
        'product' => 'required',
    );
    
    // //timestampを使用しない
    // public $timestamps = false;
    
    // //primary keyの変更
    // // protected $primaryKey = "product_code";
    
   
    
    
    //
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
