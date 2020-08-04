<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vessel;
use App\Imports\VesselImport;
use App\Exports\VesselExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class VesselController extends Controller
{
    //
    
   function import(Request $request)
  {
    $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
    ]);

    Excel::import(new VesselImport, $request->file('select_file'));

    return back()->with('success', 'Excel Data Imported successfully.');
  }

  function export()
  {
    return Excel::download(new VesselExport, 'reports.xlsx');
    dd($VesselExport);
  } 
    
  
    public function add(){
        return view('vessel.edit');
    }

    
     public function edit(Request $request)
        {
            
            $vessels =Vessel::find($request->id);
            if(empty($vessels)){
                abort(404);
            }
            // dd($vessels);
            return view('vessel.edit',['vessel_form' => $vessels]);
            
        }


        public function delete(Request $request)
    
        {    //該当するNews Modelを取得
            $vessels =Vessel::find($request->id);
            
            //削除する
            $vessels->delete();
            return redirect('/excel');
        }
        
        public function update(Request $request)
        {
            
            // dd($request);
            //Varidationを行う
            // $this->validate($request,TimeSchedule::$rules);
            $vessels=Vessel::find($request->id);
            // dd($vessels);
            $vessel_form = $request->all();
            // dd($vessel_form);
            
            
            //フォームから送信されてきた_tokenを削除する
            unset($vessel_form['_token']);
            
            //データベースに保存する
            $vessels->fill($vessel_form)->save();
            // dd($vessels);
            return redirect('/excel');
        }
        
        public function insurance(Request $request)
        {
            $insurance = Vessel::find($request->id);
            // dd($insurance);
            return view('insurance',['insurance_form' => $insurance]);
             
        }
        
        public function application(Request $request)
        {
            $application= Vessel::find($request->id);
            return view('application',['application_form' => $application]);
           
        }
        
        public function invoice(Request $request)
        {
            $invoice= Vessel::find($request->id);
            return view('invoice',['invoice_form' => $invoice]);
           
        }
        public function search(Request $request)
        {
            // KMTCのb/l№のみをピックアップして、データを配列に格納して、for eachで一気に動静データを検索する
            // dd($request);
            $vessel = Vessel::find($request ->id);
            $bl_no = $vessel -> bl_no;
            // dd($bl_no);
            
            $client = new Client();
            $url = 'http://www.ekmtc.com/CCIT100/searchContainerList.do?hid_bl_no=&bk_no=&dt_knd=BL&own_yn=N&vsl_cd=&voy_no=&pod=&pol=&cntr_no=&hiddenKnd=&hiddenSearchNo=&flag=&pus_no=&condition=BL&bl_no=' . $bl_no;
            
            $response = $client->request('GET', $url ,array(
            "headers" => array(
            "User-Agent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36",),
            ));
            $body = $response -> getBody()->getContents();
            // dd($body);
            
            // // これを試してみる
            // $domDocument = new \DOMDocument('1.0', 'UTF-8');
            
            // // set error level
            // $internalErrors = libxml_use_internal_errors(true);
            // $domDocument->loadHTML($body);
            // $xmlString = $domDocument->saveXML();
            // $dom->formatOutput = true;
            // $dom = load($xmlString);
            // dd( $xmlString);
            
            // $xpath = new \DOMXPath($xmlString);
 
            // $result = $xpath->query("@id='paging_1'/tbody/tr[3]/td[2]/text()[2]")->item(0);
            // $result2 = $result->nodeValue;
            // dd($result2);
            
            
            // $root = $body->documentElement;
            $target=$body->getElementById("Board_row2");
            $select = target.getElementsByTagName("td[4]")->item(0);
            $sel =  $select -> nodeValue;
            dd($sel);
            // $sampleNode = $root->getElementsByTagName("sample")->item(0);
             
            // echo $sampleNode->nodeValue;
            
            //*[@id="paging_1"]/tbody/tr[3]/td[2]/text()[2]
            
            


            // // Restore error level
            // libxml_use_internal_errors($internalErrors);
            
            //     // <div id="tag"><ul>～</ul></div>内を取得
            // $domElement = $domDocument->getElementById('paging_1')->getElementsByTagName('td');
            // foreach ($domDocument as $doc);
            
            // dd($doc);
            // // 

        }
    
    
}



