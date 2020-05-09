<?php

namespace App\Exports;

use App\Vessel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VesselExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Vessel::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'contract_no',
            'product',
            'shipping_company',
            'port_of_discharging',
            'estimate_time_of_loading',
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
            'bank_charge',
        ];
    }
}
