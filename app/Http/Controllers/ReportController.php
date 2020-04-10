<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

use App\Model\Report;
class ReportController extends Controller
{
    function index()
    {
     $data = DB::table('reports')->orderBy('error_no', 'ASC')->get();
     return view('report_excel', compact('data'));
     
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
      
     // dd($data);   
        
      // foreach($data as $datas)
      // {
      
        
         foreach($data as $rows){
        
        $insert_data[] = array(
         'error_no'  => $rows['エラーＮＯ'],
         'order_no'  => $rows['指図ＮＯ'],
         'consignee_code'  => $rows['荷受人'],
         'consignee'  => $rows['荷受人名称'],
         'hub_code'  => $rows['拠点コード'],
         'hub_name'  => $rows['拠点名称'],
         'product_code'   => $rows['品名コード'],
         'product'   => $rows['品名名称'],
         'yoryo'   => $rows['容量'], 
         'mt'   => $rows['出荷数量'], 
         'supply_unit_price'   => $rows['供給単価'], 
         'supply_price'   => $rows['供給金額'], 
         'supply_month'   => $rows['供給限月'], 
         'ship_date'   => $rows['出荷年月日'], 
         'supply_delivery_condition'   => $rows['供給受渡条件'], 
         'recieving_delivery_condition' => $rows['受入受渡条件'], 
         'jibetu'   => $rows['次別'], 
         'shupou_no'   => $rows['出報№'], 
         'zaikokubun'   => $rows['在庫区分'], 
         'vessel'   => $rows['本船'], 
         'yamamoto'   => $rows['山元'],
         'shupou_uketuke_date'   => $rows['出報受付年月日'],
         'setuzoku_code'   => $rows['接続元コード'], 
         'error_code'   => $rows['エラーコード１'], 
         'error_message'   => $rows['エラーメッセージ１'] 
         
        );
        
        // ↑　'データベースのカラム名'　=> $row['エクセル一行目の項目名']
       }
      }

      if(!empty($insert_data))
      {
       DB::table('reports')->insert($insert_data);
      }
     // dd($insert_data);
     
     $report_data = DB::table('reports')
       ->rightJoin('consignees','reports.consignee_code','=','consignees.consignee_code')
       ->rightJoin('products','reports.product_code','=','products.product_code')
       ->get();
       // ->update(['consignee'=>'荷受人','product'=>'品名名称']);
       dd($report_data);
       
     return back()->with('success', 'Excel Data Imported successfully.');
    }

    function export()
    {
     $report_data = DB::table('reports')->get()->toArray();
     $report_array[] = array(
      'エラー№',
      '指図№', 
      '荷受人',
      '荷受人名称',
      '拠点コード',
      '拠点名称',
      '品名コード',
      '品名名称',
      '容量',
      '出荷数量',
      '供給単価',
      '供給金額',
      '供給限月',
      '出荷年月日',
      '供給受渡条件',
      '受入受渡条件',
      '次別',
      '出報№',
      '在庫区分',
      '本船',
      '山元',
      '出報受付年月日',
      '接続元コード',
      'エラーコード',
      'エラーメッセージ',
      );
     
     foreach($report_data as $data)
     {
      $report_array[] = array(
       'エラー№'  => $data->error_no,
       '指図№'   => $data->order_no,
       '荷受人'    => $data->consignee_code,
       '荷受人名称'  => $data->consignee,
       '拠点コード'   => $data->hub_code,
       '拠点名称' => $data->hub_name,
       '品名コード'   => $data->product_code,
       '品名名称'   => $data->product,
       '容量'   => $data->yoryo,
       '出荷数量'   => $data->mt,
       '供給単価'   => $data->supply_unit_price,
       '供給金額'   => $data->supply_price,
       '供給限月'   => $data->supply_month,
       '出荷年月日'   => $data->ship_date,
       '供給受渡条件'   => $data->supply_delivery_condition,
       '受入受渡条件'   => $data->recieving_delivery_condition,
       '次別'   => $data->jibetu,
       '出報№'   => $data->shupou_no,
       '在庫区分'   => $data->zaikokubun,
       '本船'   => $data->vessel,
       '山元'   => $data->yamamoto,
       '出報受付年月日'   => $data->shupou_uketuke_date,
       '接続元コード'   => $data->setuzoku_code,
       'エラーコード'   => $data->error_code,
       'エラーメッセージ'   => $data->error_message
      );
      
     }
     Excel::create('Report Data', function($excel) use ($report_array){
      $excel->setTitle('Report Data');
      $excel->sheet('Report Data', function($sheet) use ($report_array){
       $sheet->fromArray($report_array, null, 'A1',false,false)
       ->setWidth([
                    'A' =>10,
                    'B' =>10,
                    // 'C',
                    // 'E',
                    // 'G',
                    // 'I',
                    // 'J',
                    // 'M',
                    // 'O',
                    // 'P','Q','R','S','T','U' => 10,
                    // 'D','F','H','Y' => 25,
                    // 'K','L','X' => 12,
 ]);

      });
     })->download('xlsx');
    }
    
    public function delete()
    
        {    //該当するNews Modelを取得
            DB::table('reports')->delete();
            
            //削除する
            // $report->delete();
            return redirect('/report');
        }
    
}

