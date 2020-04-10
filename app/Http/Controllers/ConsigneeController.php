<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consignee;

class ConsigneeController extends Controller
{
    public function add(){
        return view('consignee.create');
    }
    
    
        
        public function create(Request $request)
        {
            // dd($request);
            $this->validate($request,Consignee::$rules);
            $consignee = new Consignee;
            
            // dd($product);
            $form=$request->all();
            $consignee->fill($form)->save();
            
            
            
            return redirect('consignee/index');//リダイレクトはURLのみ指定できる
            }
            
            public function index()
        {
            $posts = Consignee::orderBy('consignee_code', 'ASC')->get();
            // \Debugbar::info($posts);
            // dd($posts);
            return view('consignee.index',['posts' => $posts]);
            
            
        }
        
         public function delete(Request $request)
    
        {    
            // dd($request);
            //該当するNews Modelを取得
            $consignees =Consignee::find($request->id);
            // dd($consignees);
            //削除する
            $consignees->delete();
            return redirect('consignee/index');
        }
}
