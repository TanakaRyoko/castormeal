{{-- layouts/admin.blade.phpを読み込む--}}
@extends('layouts.layout')


{{-- layout.blade.phoの@yield('title')にニュースの新規作成を埋め込む --}}
@section('title','出報エラー一覧')
@section('subtitle','')

{{-- layout.blade.phpの@yield('content')に以下のタグを埋め込む　--}}
@section('content')
 <head>
  
       <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
       <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
       <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
 </head>
 <body>
    <br />
  
    <div class="container">
     
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
  
      <h1>出報エラー一覧</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <br>
      <form method="post" enctype="multipart/form-data" action="{{ url('report/import') }}">
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
         <a href="{{ route('report.export') }}" class="btn btn-outline-success">Export to Excel</a>
        </td>
       </tr>
       <tr>
        <td>
          <a href="{{ route('report.delete') }}" class="btn btn-outline-success">All Delete</a>
        </td>
       </tr>
       </table>
      </div>
    </div>
    
     <br />
     <div class="listcontainer">
     <div class="panel panel-default">
      
      <div class="panel-body">
       <div class="table-responsive">
        <table class="table table-bordered table-striped">
         <tr>
          <!--<th>操　作</th>-->
          <th>エラー№</th>
          <th>指図№</th>
          <th>荷受人</th>
          <th>荷受人名称</th>
          <th>拠点コード</th>
          <th>拠点名称</th>
          <th>品名コード</th>
          <th>品名名称</th>
          <th>容量</th>
          <th>出荷数量</th>
          <th>供給単価</th>
          <th>供給金額</th>
          <th>供給限月</th>
          <th>出荷年月日</th>
          <th>供給受渡条件</th>
          <th>受入受渡条件</th>
          <th>次別</th>
          <th>出報№</th>
          <th>在庫区分</th>
          <th>本船</th>
          <th>山元</th>
          <th>出報受付年月日</th>
          <th>接続元コード</th>
          <th>エラーコード</th>
          <th>エラーメッセージ</th>
          </tr>
         @foreach($data as $row)
         <tr>
          
          <td>{{ $row->error_no }}</td>
          <td>{{ $row->order_no }}</td>
          <td>{{ $row->consignee_code }}</td>
          <td>{{ $row->consignee }}</td>
          <td>{{ $row->hub_code }}</td>
          <td>{{ $row->hub_name }}</td>
          <td>{{ $row->product_code }}</td>
          <td>{{ $row->product }}</td>
          <td>{{ $row->yoryo }}</td>
          <td>{{ $row->mt }}</td>
          <td>{{ $row->supply_unit_price }}</td>
          <td>{{ $row->supply_price }}</td>
          <td>{{ $row->supply_month }}</td>
          <td>{{ $row->ship_date }}</td>
          <td>{{ $row->supply_delivery_condition }}</td>
          <td>{{ $row->recieving_delivery_condition }}</td>
          <td>{{ $row->jibetu }}</td>
          <td>{{ $row->shupou_no }}</td>
          <td>{{ $row->zaikokubun }}</td>
          <td>{{ $row->vessel }}</td>
          <td>{{ $row->yamamoto }}</td>
          <td>{{ $row->shupou_uketuke_date }}</td>
          <td>{{ $row->setuzoku_code }}</td>
          <td>{{ $row->error_code }}</td>
          <td>{{ $row->error_message }}</td>
          </tr>
         @endforeach
        </table>
       </div>
      </div>
     </div>
     </div>
    </div>
 </body>

@endsection


