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
        $vessel_data = Vessel::all();
    }

    public function headings(): array
    {
        foreach($vessel_data as $vessel)
     {
      $vessel_array[] = array(
       'contract_no'  => $vessel->contract_no,
       'product'   => $vessel->product,
       'shipping_company'    => $vessel->shipping_company,
       'port_of_discharging'  => $vessel->port_of_discharging,
       'estimate_time_of_loading'   => $vessel->estimate_time_of_loading,
       'time_of_arrival'   => $vessel->time_of_arrival,
       'containers'   => $vessel->containers,
       'vessel_no'   => $vessel->vessel_no,
       'register_no'   => $vessel->register_no,
       'mt'   => $vessel->mt,
       'bl_no'   => $vessel->bl_no,
       'remmitance'   => $vessel->remmitance,
       'unit_price'   => $vessel->unit_price,
       'rate'   => $vessel->rate,
       'interest_rates'   => $vessel->interest_rates,
       'japanese_yen'   => $vessel->japanese_yen,
       'bank_charge'   => $vessel->bank_charge
       );
      
     }
    
    }
}
