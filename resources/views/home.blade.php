@extends('layouts.layout')


@section('title','menu')
@section('subtitle','メニュー画面')

@section('content')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<!--public/css/menu.cssを呼び出す-->


  
    <!--<h3>コンテナ船管理</h3>-->
    <br>
    <br>
    <div class="container-fluid" id="menu">
        <div class ="row" id="command">
                <div class="col-md-6" >
                    <form action = "{{ action('ImportExcelController@index') }}">
                <input type="submit" id="button" value="本船情報登録" style="width:300px;height:100px" >
                </form>
                </div>
                
            
            <div class="col-md-6" >
                    <form action = "{{ action('ReportController@index') }}">
                <input type="submit" id="button" value="メーカーエラー" style="width:300px;height:100px" >
                </form>
                </div>
            
        </div> 
        <br>
        <br>
        <div class ="row" id="command">
                <div class="col-md-6" >
                    <form action = "{{ action('AgentController@add') }}">
                <input type="submit" id="button" value="通関業者登録" style="width:300px;height:100px" >
                </form>
                </div>
                
            
            <div class="col-md-6" >
                    <form action = "{{ action('ProductController@index') }}">
                <input type="submit" id="button" value="商品登録" style="width:300px;height:100px" >
                </form>
                </div>
            
        </div> 
        <br>
        <br>
        <div class ="row" id="command">
                <div class="col-md-6" >
                    <form action = "{{ action('ConsigneeController@index') }}">
                <input type="submit" id="button" value="メーカー登録" style="width:300px;height:100px" >
                </form>
                </div>
                
            
            <div class="col-md-6" >
                    <form action = "{{ action('ImportExcelController@index') }}">
                <input type="submit" id="button" value="管理表出力" style="width:300px;height:100px" >
                </form>
                </div>
            
        </div> 
        </div> 
    </div>
<script src="{{ asset('/js/a.js') }}"></script>   
@endsection
