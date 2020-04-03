<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\DateExport;

class DateExport implements FromCollection
{
     /**
    * @return \Illuminate\Support\Collection
    */
   

    public function collection()
    {
        return  DateExport::all();
    }
}



