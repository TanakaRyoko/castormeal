<?php

namespace App;

use App\Vessel;
use Illuminate\Database\Eloquent\Model;
// use Maatwebsite\Excel\Concerns\ToModel;


class Vessel extends Model
{
     protected $fillable = [
        'contract_no', 
        'product',
        'shipping_company',
        'port_of_discharging',
        'name_of_vessel',
        'estimate_time_of_loading',
        'bl_date',
        'time_of_arrival',
        'containers',
        'vessel_no',
        'register_no',
        'mt',
        'bl_no',
        'remmitance',
        'unit_price',
        'rate',
        'interest_rates',
        'japanese_yen',
        'bank_charge'
    ];
    
    // //belongsTo設定(product)
    // public function product()
    // {
    //     return $this->belongsTo('App\Product');
    // }
    
    // //belongsTo設定(consignee)
    // public function consignee()
    // {
    //     return $this->belongsTo('App\Consignee');
    // }
    
     
}

    

?>