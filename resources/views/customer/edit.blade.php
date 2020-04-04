{{-- layouts/admin.blade.phpを読み込む--}}
@extends('layouts.layout')


{{-- layout.blade.phoの@yield('title')にニュースの新規作成を埋め込む --}}
@section('title','本船情報登録')
@section('subtitle','本船情報登録')

{{-- layout.blade.phpの@yield('content')に以下のタグを埋め込む　--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <body>
                    <form action ="{{ action('VesselController@edit') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0 )
                            <ul>
                                @foreach($errors -> all() as $e )
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <h4>本船情報</h4>
                        <br>
                        
                        <div class ="form-group row">
                            <label class="col-md-1">本船NO.</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="vessel_no" value="{{ old('vessel_no') }}">
                                </div>
                            <label class="col-md-1">契約NO.</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="contract_no" value="{{ $vessel_form->contract_no }}">
                                </div>
                            <label class="col-md-1">商品名</label>
                               <div class="col-md-2">
                                    <input type="text" class="form-control" name ="product" value="{{ $vessel_form->product }}">
                                </div>
                        </div>
                        <br>
                        
                       <div class ="form-group row">
                            <label class="col-md-1">本船名</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name ="name_of_vessel" value="{{ old('name_of_vessel') }}">
                                </div>
                            <label class="col-md-1">B/L NO.</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name ="bl_no" value="{{ old('bl_no') }}">
                                </div>
                        </div>
                        <br>

                        <div class ="form-group row">
                            <label class="col-md-1">B/L DATE</label>
                                <div class="col-md-2" for="bl_date">
                                    <input type="date" class="form-control" name="bl_date" value="{{old("bl_date")}}">
                                </div>
                            <label class="col-md-1" for="container">コンテナ数</label>
                                 <div class="col-md-2">
                                    <input type="text" class="form-control" name ="containers" value="{{ $vessel_form->containers }}">
                                </div>
                            <label class="col-md-1">数量（MT)</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="quantity" value="{{ old('quantity') }}">
                                </div>
                            <label class="col-md-1">船社</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="shipping_company" value="{{ $vessel_form->shipping_company }}">
                                </div>
                        </div>
                        <br>
                        
                        <div class ="form-group row">
                            <label class="col-md-1" for="discharging_port">揚港</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="port_of_discharging" value="{{ $vessel_form->port_of_discharging }}">
                                </div>
                            <label class="col-md-1">入港日</label>
                                <div class="col-md-2" for="arrival_date">
                                    <input type="date" class="form-control" name="time_of_arrival" value="{{ $vessel_form->time_of_arrival }}">
                                </div>
                        </div>
                        <br>
                        <br>
                        
                        <h4>送金情報登録</h4>
                        <br>
                        <div class ="form-group row">
                            <label class="col-md-1">外貨金額（USD)</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="usd" value="{{ old('usd') }}">
                                </div>
                            <label class="col-md-1">単価</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="unit_price" value="{{ old('unit_price') }}">
                                </div>
                            <label class="col-md-1">スポットレート</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="rate" value="{{ old('rate') }}">
                                </div>
                        </div>  
                        <br>
                        
                        <div class ="form-group row">
                            <label class="col-md-1">円貨</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="japanese_yen" value="{{ old('japanese_yen') }}">
                                </div>
                            <label class="col-md-1">ユーザンス金利（％）</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name ="interest_rate" value="{{ old('interest_rate') }}">
                                </div>
                            <label class="col-md-1">バンクチャージ</label>
                                <div class="col-md-2">
                                    <input type="radio" name="bank_charge" value="true">あり
                                    <input type="radio" name="bank_charge" value="false">なし
                                </div>
                            
                            <div class="col-md-3">
                                <input type="hidden" name="id" value="">
                                {{csrf_field()}}
                                <input type="submit" class="btn btn-primary" value="更新">
                            </div>
                        </div>   
                   </form>
                </div>
            </body>
</div>
@endsection
