<?php

namespace App;

use App\Vessel;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;



class Vessel implements ToModel
{
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