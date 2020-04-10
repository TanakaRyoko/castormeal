{{-- layouts/admin.blade.phpを読み込む--}}
@extends('layouts.layout')


{{-- layout.blade.phoの@yield('title')にニュースの新規作成を埋め込む --}}
@section('title','商品登録')
@section('subtitle','商品登録')

{{-- layout.blade.phpの@yield('content')に以下のタグを埋め込む　--}}
@section('content')
<br>
<br>
<br>
    <div class="container">
        <div class="listcontainer">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <body>
                    <form action ="{{ action('ProductController@create') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0 )
                            <ul>
                                @foreach($errors -> all() as $e )
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        
                        
                    <a href="{{ route('home') }}" class="btn btn-outline-success">戻る</a>    
                        
                            <div class ="form-group row">
                                <label class="col-md-2">商品コード</label>
                                    <div class="col-md-4">
                                        <input type="string" class="form-control" name ="product_code" value="{{ old('product_code') }}">
                                    </div>
                                <label class="col-md-2">商品名</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name ="product" value="{{ old('product') }}">
                                    </div>
                               
                                
                            </div>
                           
                            <br>
                            <br>
                            
                            <div class="col-md-3">
                                <input type="hidden" name="id" value="">
                                {{csrf_field()}}
                                <input type="submit" class="btn btn-primary" value="登録">
                            </div>
                   </form>
                </body>
            </div>
        </div>
    </div>
</div>    
@endsection
