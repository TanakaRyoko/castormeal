<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VesselController extends Controller
{
    //
    public function add(){
        return view('vessel.create');
    }

    
     public function edit(Request $request)
        {
            $vessels =Vessel::find($request->id);
            if(empty($vessels)){
                abort(404);
            }
            
            return view('vessel.create',['vessel_form' => $vessels]);
            
        }


        public function delete(Request $request)
    
        {    //該当するNews Modelを取得
            $vessels =Vessel::find($request->id);
            
            //削除する
            $vessels->delete();
            return redirect('timeschedules');
        }
        
        public function update(Request $request)
        {
            
            
            //Varidationを行う
            $this->validate($request,TimeSchedule::$rules);
            $timeschedules=TimeSchedule::find($request->id);
            
            $timeschedules_form=$request->all();
            dd($timeschedules_form);
            
            
            //フォームから送信されてきた_tokenを削除する
            unset($timeschedules_form['_token']);
            
            //データベースに保存する
            $timeschedules->fill($timeschedules_form->all());
            $timeschedules->save();
            return redirect('timeschedules');
        }
    
    
}



