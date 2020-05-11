{{-- layouts/admin.blade.phpを読み込む--}}
@extends('layouts.layout')


{{-- layout.blade.phoの@yield('title')にニュースの新規作成を埋め込む --}}
@section('title','本船情報登録')
@section('subtitle','')

{{-- layout.blade.phpの@yield('content')に以下のタグを埋め込む　--}}
@section('content')
    <head>
  
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  
    
 </head>
 <body>
  
  
  <div class="container-fluid">
   
    <button id="square_btn" onClick="history.back()">戻る</button>
    <br>
    <br>
   @if(count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
    
   @endif

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <br>
   <br>
   <div class="jumbotron">
  
      <h1>本船情報登録</h1>
      <!--<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>-->
      <br>
      <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
        {{ csrf_field() }}
        <div class="form-group">
         <table class="table">
          <tr>
           <th width="40%" align="right"><label>ファイルを選択してください</label></th>
           <th width="30">
            <input type="file" name="select_file" />
           </th>
           <th width="30%" align="left">
            <input type="submit" name="upload" class="btn btn-outline-success" value="Excel Import">
           </th>
          </tr>
          <tr>
           <td width="40%" align="right"></td>
           <td width="30"><span class="text-muted">.xls, .xslx</span></td>
           <td width="30%" align="left"></td>
          </tr>
         </table>
        </div>
       </form>
      <div class="form-group">
       <table class="table">
       <tr>
        <td width=30% align=left></td>
        <td width="40%" align="right"><label>データをExportする</label></td><br />
        <td>
        <!--<div align="right">-->
        <!--<form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">-->
         <a href="{{ route('vessel.export') }}" class="btn btn-outline-success">Export to Excel</a>
        </td>
       </tr>
       </table>
      </div>
    </div>
 
 
   
   <br />
   <div class="listcontainer">
   
   <div class="panel panel-default">
    
    <div class="panel-heading">
     <h3 class="panel-title">本船情報</h3>
    </div>
    <div class="panel-body">
     <div class="table-sm" style="font-size: 5pt; line-height: 200%; ">
      <table class="table table-bordered table-hover">
       <thead class="thead-light">
       <tr>
        <th>操　作</th>
        <th>書　類</th>
        <th>契約№</th>
        <th>商品</th>
        <th>船社</th>
        <th>揚港</th>
        <th>出航日予定日</th>
        <th>本船名</th>
        <th>B/L DATE</th>
        <th>入港日</th>
        <th>コンテナ数</th>
        <th>本船№</th>
        <th>台帳№</th>
        <th>数量</th>
        <th>B/L№</th>
        <th>金額</th>
        <th>単価</th>
        <th>レート</th>
        <th>金利</th>
        <th>日本円</th>
        <th>バンクチャージ</th>
       </tr>
       </thead>
       @foreach($data as $row)
       <tr>
        <td>
            <div>
                <a href="{{ action('VesselController@edit',['id' => $row->id]) }}">編集</a>
            </div>
            <div>
                <a href="{{ action('VesselController@delete', ['id' => $row->id]) }}">削除</a>
            </div>
        </td>
        <td>
            <div>
                <a href="{{ action('VesselController@insurance', ['id' => $row->id]) }}">保険</a>
            </div>
            <div>
                <a href="{{ action('VesselController@application', ['id' => $row->id]) }}">通関</a>
            </div>
            <div>
                <a href="{{ action('VesselController@invoice', ['id' => $row->id]) }}">原価</a>
            </div>
        </td>
        <td>{{ $row->contract_no }}</td>
        <td>{{ $row->product }}</td>
        <td>{{ $row->shipping_company }}</td>
        <td>{{ $row->port_of_discharging }}</td>
        <td>{{ $row->estimate_time_of_loading }}</td>
        <td>{{ $row->name_of_vessel }}</td>
        <td>{{ $row->bl_date }}</td>
        <td>{{ $row->time_of_arrival }}</td>
        <td>{{ $row->containers }}</td>
        <td>{{ $row->vessel_no }}</td>
        <td>{{ $row->register_no }}</td>
        <td>{{ $row->mt }}</td>
        <td>{{ $row->bl_no }}</td>
        <td>{{ $row->remmitance }}</td>
        <td>{{ $row->unit_price }}</td>
        <td>{{ $row->rate }}</td>
        <td>{{ $row->interest_rates }}</td>
        <td>{{ $row->japanese_yen }}</td>
        <td>{{ $row->bank_charge }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
    </div>
   </div>
 </body>

@endsection


