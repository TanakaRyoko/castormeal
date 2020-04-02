<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\Exports\DateExport;

class ImportExcelController extends Controller
{
    function index()
    {
     $data = DB::table('vessels')->orderBy('contract_no', 'DESC')->get();
     return view('import_excel', compact('data'));
     
    }

    function import(Request $request)
    {
    $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
    ]);

    $path = $request->file('select_file')->getRealPath();

    $data = Excel::load($path)->get();
    
    
      // dd($data);
      
     if($data->count() > 0)
     {
      
     $data->toArray();
      
        
        
       foreach($data as $key => $value)
       {
        
        
         foreach($value as $row){
         dd($value);
        $insert_data[] = array(
         'ContractNo'  => $row['contract_no'],
         'Product'   => $row['product'],
         'ShippingCompany'   => $row['shipping_company'],
         'PortOfDischarging'    => $row['port_of_discharging'],
         'EstimateOfLoading'  => $row['estimate_time_of_loading'],
         'TimeOfArrival'   => $row['time_of_arrival'],
         'Containers'   => $row['containers']
        );
        // dd($insert_data);
       }
      }

      if(!empty($insert_data))
      {
       DB::table('vessels')->insert($insert_data);
      }
     
     return back()->with('success', 'Excel Data Imported successfully.');
    }
}
}

