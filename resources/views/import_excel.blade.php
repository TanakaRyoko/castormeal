{{-- layouts/admin.blade.phpを読み込む--}}
@extends('layouts.layout')


{{-- layout.blade.phoの@yield('title')にニュースの新規作成を埋め込む --}}
@section('title','本船情報登録')
@section('subtitle','本船情報登録')

{{-- layout.blade.phpの@yield('content')に以下のタグを埋め込む　--}}
@section('content')
    <head>
  <title>Import Excel File in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  
  <div class="container">
   <h3 align="center">Import Excel File in Laravel</h3>
    <br />
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
   <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Select File for Upload</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
   
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Customer Data</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>契約№</th>
        <th>商品</th>
        <th>船社</th>
        <th>揚港</th>
        <th>出航日</th>
        <th>入港日</th>
        <th>コンテナ数</th>
       </tr>
       @foreach($data as $row)
       <tr>
        <td>{{ $row->ContractNo }}</td>
        <td>{{ $row->Product }}</td>
        <td>{{ $row->ShippingCompany }}</td>
        <td>{{ $row->PortOfDischarging }}</td>
        <td>{{ $row->EstimateOfLoading }}</td>
        <td>{{ $row->TimeOfArrival }}</td>
        <td>{{ $row->containers }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
@endsection


