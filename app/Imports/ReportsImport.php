<?php

namespace App\Imports;

use App\Report;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ReportsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Report([
            'error_no'          => $row['error_no'],
            'order_no'          => $row['order_no'],
            'consignee_code'    => $row['consignee_code'],
            'consignee'         => $row['consignee'],
            'hub_code'          => $row['hub_code'],
            'hub_name'          => $row['hub_name'],
            'product_code'      => $row['product_code'],
            'product'           => $row['product'],
            'yoryo'             => $row['yoryo'],
            'mt'                => $row['mt'],
            'supply_unit_price' => $row['supply_unit_price'],
            'supply_price'      => $row['supply_price'],
            'supply_month'      => $row['supply_month'],
            'ship_date'         => $row['ship_date'],
            'supply_delivery_condition'     => $row['supply_delivery_condition'],
            'recieving_delivery_condition'  => $row['recieving_delivery_condition'],
            'jibetu'            => $row['jibetu'],
            'shupou_no'         => $row['shupou_no'],
            'zaikokubun'        => $row['zaikokubun'],
            'vessel'            => $row['vessel'],
            'yamamoto'          => $row['yamamoto'],
            'shupou_uketuke_date'   => $row['shupou_uketuke_date'],
            'setuzoku_code'     => $row['setuzoku_code'],
            'error_no'     => $row['error_no'],
            'error_message'     => $row['error_message'],
            
        ]);
    }
}
