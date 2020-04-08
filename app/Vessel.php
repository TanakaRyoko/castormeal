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
        'bl_no.',
        'remmitance',
        'unit_price',
        'rate',
        'interest_rates',
        'japanese_yen',
        'bank_charge'
    ];
    
    public function model()
    {
        // return new Vessel([
    
        // 'contract_no'=>$row['0'],
        // 'product'=>$row['1'],
        // 'shipping_company'=>$row['2'],
        // 'estimate_time_of_loading'=>$row['3'],
        // 'time_of_arrival'=>$row['4'],
        // 'containers'=>$row['5'],
        // ]);
    }
    
     
}

    

?>