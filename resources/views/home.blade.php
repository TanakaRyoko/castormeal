@extends('layouts.layout')


@section('title','menu')
@section('subtitle','メニュー画面')

@section('content')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    
    <h1>コンテナ船管理システム</h1>
    <br>
    <br>
    <div class="container">
        <div class ="row" id="command">
            <div class="col-md-6">
            <input type="button" id="button" value="本船情報登録" style="width:300px;height:100px"  onclick="location:href='vessel/create.blade.php'">
            </div>
            <div class="col-md-6">
            <input type="button" id="button" value="動静表更新" style="width:300px;height:100px">
            </div>
        </div> 
        <br>
        <br>
        <div class ="row" id="command">
            <div class="col-md-6">
            <input type="button" id="button" value="通関注文書作成" style="width:300px;height:100px">
            </div>
            <div class="col-md-6">
            <input type="button" id="button" value="保険申込書作成" style="width:300px;height:100px">
            </div>
        </div> 
        <br>
        <br>
        <div class ="row" id="command">
            <div class="col-md-6">
            <input type="button" id="button" value="保証票作成" style="width:300px;height:100px">
            </div>
            <div class="col-md-6">
            <input type="button" id="button" value="業務進捗表入力" style="width:300px;height:100px">
            </div>
        </div>        
    </div>
@endsection
