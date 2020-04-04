{{-- layouts/admin.blade.phpを読み込む--}}
@extends('layouts.layout')


{{-- layout.blade.phoの@yield('title')にニュースの新規作成を埋め込む --}}
@section('title','本船情報登録')
@section('subtitle','本船情報登録')

{{-- layout.blade.phpの@yield('content')に以下のタグを埋め込む　--}}
@section('content')
    <head>
  <title>Export Data to Excel in Laravel using Maatwebsite</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<style type="text/css">-->
  <!-- /*.box{*/-->
  <!-- /* width:600px;*/-->
  <!-- /* margin:0 auto;*/-->
  <!-- /* border:1px solid #ccc;*/-->
  <!-- /*}*/-->
  <!--</style>-->
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Export Data to Excel in Laravel using Maatwebsite</h3><br />
   <button id="square_btn" onClick="history.back()">戻る</button>
   <div align="center">
    <a href="{{ route('export_excel.excel') }}" class="btn btn-success">Export to Excel</a>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr>
      <td>契約№</td>
      <td>商品名</td>
      <td>船社</td>
      <td>揚港</td>
      <td>出航日</td>
      <td>コンテナ数</td>
     </tr>
     @foreach($vessel_data as $vessel)
     <tr>
      <td>{{ $vessel->contract_no }}</td>
      <td>{{ $vessel->product }}</td>
      <td>{{ $vessel->port_of_discharging }}</td>
      <td>{{ $vessel->estimate_time_of_loading }}</td>
      <td>{{ $vessel->time_of_arrival }}</td>
      <td>{{ $vessel->containers }}</td>
     </tr>
     @endforeach
    </table>
   </div>
   
  </div>
 </body>

@endsection


