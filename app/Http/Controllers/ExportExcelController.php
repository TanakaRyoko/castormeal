<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExportExcelController extends Controller
{
    function index()
    {
     $vessel_data = DB::table('vessels')->orderBy('contract_no', 'ASC')->get();
     return view('export_excel')->with('vessel_data', $vessel_data);
    }

    function excel()
    {
     $vessel_data = DB::table('vessels')->get()->toArray();
     $vessel_array[] = array('契約№', '商品名', '船社', '揚港','出航日', '入港日','コンテナ数','本船№','台帳№','数量','B/LNO.','金額','単価','レート','金利','日本円','バンクチャージ');
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
      Excel::create('Vessel Data', function($excel) use ($vessel_array){
      $excel->setTitle('Vessel Data');
      $excel->sheet('Veesel Data', function($sheet) use ($vessel_array){
       $sheet->fromArray($vessel_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
}

?>
