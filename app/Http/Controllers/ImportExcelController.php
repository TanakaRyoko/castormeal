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

    function export()
    {
     $vessel_data = DB::table('vessels')->get()->toArray();
     $vessel_array[] = array('契約№', '商品名', '船社', '揚港','出航日', '入港日','コンテナ数','本船№','台帳№','数量','B/LNO.','金額','単価','レート','金利','日本円','バンクチャージ');
     foreach($vessel_data as $data)
     {
      $vessel_array[] = array(
       'contract_no'  => $data->contract_no,
       'product'   => $data->product,
       'shipping_company'    => $data->shipping_company,
       'port_of_discharging'  => $data->port_of_discharging,
       'estimate_time_of_loading'   => $data->estimate_time_of_loading,
       'time_of_arrival'   => $data->time_of_arrival,
       'containers'   => $data->containers,
       'vessel_no'   => $data->vessel_no,
       'register_no'   => $data->register_no,
       'mt'   => $data->mt,
       'bl_no'   => $data->bl_no,
       'remmitance'   => $data->remmitance,
       'unit_price'   => $data->unit_price,
       'rate'   => $data->rate,
       'interest_rates'   => $data->interest_rates,
       'japanese_yen'   => $data->japanese_yen,
       'bank_charge'   => $data->bank_charge
      );
      
     }
     Excel::create('Vessel Data', function($excel) use ($vessel_array){
      $excel->setTitle('Vessel Data');
      $excel->sheet('Veesel Data', function($sheet) use ($vessel_array){
       $sheet->fromArray($vessel_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
    
}

