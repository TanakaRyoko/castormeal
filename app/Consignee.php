<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Consignee;

class Consignee extends Model
{
    protected $fillable = [
        'consignee_code', 
        'consignee',
        
    ];
    
    public static $rules = array(
        'consignee_code' => 'required',
        'consignee' => 'required',
    );
    
    // //timestampを使用しない
    // public $timestamps = false;
    
    // //primary keyの変更
    // protected $primaryKey = "consignee_code";
    
    // //hasManyの設定
    // public function vessels()
    // {
    //     return $this->hasMany('App\Vessel');
    // }
    //
}
