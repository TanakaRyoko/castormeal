<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
    //
    public function add(){
        return view('agent.create');
    }
    
    public function create(){
        
            $this->validate($request,Diary::$rules);
            $diaries=new Diary;
           
            //データベースに保存する
            $diaries->fill()->save();
            
            return redirect('agent');
            
            
    }
    
    public function edit(){
        
            $this->validate($request,Diary::$rules);
            $diaries=new Diary;
           
            //データベースに保存する
            $diaries->fill()->save();
            
            return redirect('agent');
            
            
    }
    
    public function delete(){
        
            $this->validate($request,Diary::$rules);
            $diaries=new Diary;
           
            //データベースに保存する
            $diaries->fill()->save();
            
            return redirect('agent');
            
            
    }
}
