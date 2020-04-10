<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Report;

class Report extends Model
{
    protected $fillable = [
           'error_no',
           'order_no',
           'consignee_code',
           'consignee',
           'hub_code',
           'hub_name',
           'product_code',
           'product',
           'yoryo',
           'mt',
           'supply_unit_price',
           'supply_price',
           'supply_month',
           'ship_date',
           'supply_delivery_condition',
           'recieving_delivery_condition',
           'jibetu',
           'shupou_no',
           'zaikokubun',
           'vessel',
           'yamamoto',
           'shupou_uketuke_date',
           'setuzoku_code',
           'error_code',
           'error_message'
        
    ];
}
