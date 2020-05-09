<?php

namespace App\Exports;

use App\Report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Report::all();
    }

    public function headings(): array
    {
        return [
            'id',
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
            'error_message',
            'created_at',
            'updated_at',
        ];
    }
}
