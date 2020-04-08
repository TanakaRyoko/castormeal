<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vessel;

class VesselController extends Controller
{
    //
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
    
    
}



