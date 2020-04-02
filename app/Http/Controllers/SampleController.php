<?php

namespace App\Http\Controllers;

use App\Exports\DateExport;

class SampleController extends Controller
{
    public function export(){
        return (new DateExport())->download('date.xlsx' ) ;
    }
}
