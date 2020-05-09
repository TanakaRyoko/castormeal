<?php

namespace App\Imports;

use App\Vessel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class VesselImport implements ToModel, WithHeadingRow
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vessel([
            
         'contract_no'  => $row['contract_no'],
         'product'   => $row['product'],
         'shipping_company'   => $row['shipping_company'],
         'port_of_discharging'    => $row['port_of_discharging'],
         'estimate_time_of_loading'  => $row['estimate_time_of_loading'],
         'time_of_arrival'   => $row['time_of_arrival'],
         'containers'   => $row['containers']   
        ]);
    }
}
