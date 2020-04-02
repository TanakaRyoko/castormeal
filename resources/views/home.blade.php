@extends('layouts.layout')


@section('title','menu')
@section('subtitle','メニュー画面')

@section('content')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<!--public/css/menu.cssを呼び出す-->
    
    <h1>コンテナ船管理システム</h1>
    <br>
    <br>
    <div class="container">
        <div class ="row" id="command">
                <div class="col-md-6" >
                    <form action = "{{ action('VesselController@add') }}">
                <input type="submit" id="button" value="本船情報登録" style="width:300px;height:100px" >
                </form>
                </div>
                
            
            <div class="col-md-6" >
                    <form action = "{{ action('VesselController@add') }}">
                <input type="submit" id="button" value="動静表更新" style="width:300px;height:100px" >
                </form>
                </div>
            
        </div> 
        <br>
        <br>
        <div class ="row" id="command">
                <div class="col-md-6" >
                    <form action = "{{ action('VesselController@add') }}">
                <input type="submit" id="button" value="通関注文書作成" style="width:300px;height:100px" >
                </form>
                </div>
                
            
            <div class="col-md-6" >
                    <form action = "{{ action('VesselController@add') }}">
                <input type="submit" id="button" value="保険申込書作成" style="width:300px;height:100px" >
                </form>
                </div>
            
        </div> 
        <br>
        <br>
        <div class ="row" id="command">
                <div class="col-md-6" >
                    <form action = "{{ action('VesselController@add') }}">
                <input type="submit" id="button" value="保証票作成" style="width:300px;height:100px" >
                </form>
                </div>
                
            
            <div class="col-md-6" >
                    <form action = "{{ action('VesselController@add') }}">
                <input type="submit" id="button" value="業務進捗表入力" style="width:300px;height:100px" >
                </form>
                </div>
            
        </div> 
        </div>        
    </div>
@endsection
