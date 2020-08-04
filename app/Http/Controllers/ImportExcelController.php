<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\Exports\DateExport;
use App\Model\Vessel;
class ImportExcelController extends Controller
{
    public function index()
    {
     $data = DB::table('vessels')->orderBy('contract_no', 'ASC')->get();
     return view('import_excel', compact('data'));
     
    }
    
    

    public function import(Request $request)
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
         'contract_no'  => $rows['契約№'],
         'product'   => $rows['商品'],
         'shipping_company'   => $rows['船社'],
         'port_of_discharging'    => $rows['揚港'],
         'estimate_time_of_loading'  => $rows['出航予定日'],
         'time_of_arrival'   => $rows['入港日'],
         'containers'   => $rows['コンテナ数']    
        );
        
        // ↑　'データベースのカラム名'　=> $row['エクセル一行目の項目名']
       }
      }

      if(!empty($insert_data))
      {
       DB::table('vessels')->insert($insert_data);
      }
     
     return back()->with('success', 'Excel Data Imported successfully.');
    }

    public function export()
    {
     $vessel_data = DB::table('vessels')->get()->toArray();
     $vessel_array[] = array('契約№', '商品名', '船社', '揚港','出航日','B/L DATE', '入港日','コンテナ数','本船№','台帳№','数量','B/LNO.','金額','単価','レート','金利','日本円','バンクチャージ');
     foreach($vessel_data as $data)
     {
      $vessel_array[] = array(
       '契約№'  => $data->contract_no,
       '商品名'   => $data->product,
       '船社'    => $data->shipping_company,
       '揚港'  => $data->port_of_discharging,
       '出航予定日'   => $data->estimate_time_of_loading,
       'B/L DATE' => $data->bl_date,
       '入港日'   => $data->time_of_arrival,
       'コンテナ数'   => $data->containers,
       '本船№'   => $data->vessel_no,
       '台帳№'   => $data->register_no,
       'トン数'   => $data->mt,
       'B/L NO.'   => $data->bl_no,
       '外貨額'   => $data->remmitance,
       '単価'   => $data->unit_price,
       'レート'   => $data->rate,
       '金利'   => $data->interest_rates,
       '日本円'   => $data->japanese_yen,
       'バンクチャージ'   => $data->bank_charge
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

