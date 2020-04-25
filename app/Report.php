<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function consignees()
    {
        return $this->hasMany('App\Consignee');
    }

    //hasManyの設定
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
