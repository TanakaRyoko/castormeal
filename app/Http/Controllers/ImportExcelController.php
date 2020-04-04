<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\Exports\DateExport;
use App\Model\Vessel;
class ImportExcelController extends Controller
{
    function index()
    {
     $data = DB::table('vessels')->orderBy('contract_no', 'ASC')->get();
     return view('import_excel', compact('data'));
     
    }
    
    

    function import(Request $request)
    {
    $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
    ]);

    $path = $request->file('select_file')->getRealPath();

    $data = Excel::load($path)->get();
    
    
      
      
     if($data->count() > 0)
     {
      
     $data->toArray();
      
        
        
      // foreach($data as $datas)
      // {
      
        
         foreach($data as $rows){
        
        $insert_data[] = array(
         'contract_no'  => $rows['contract_no'],
         'product'   => $rows['product'],
         'shipping_company'   => $rows['shipping_company'],
         'port_of_discharging'    => $rows['port_of_discharging'],
         'estimate_time_of_loading'  => $rows['estimate_time_of_loading'],
         'time_of_arrival'   => $rows['time_of_arrival'],
         'containers'   => $rows['containers']
        );
        
       }
      }

      if(!empty($insert_data))
      {
       DB::table('vessels')->insert($insert_data);
      }
     
     return back()->with('success', 'Excel Data Imported successfully.');
    }


    
}

