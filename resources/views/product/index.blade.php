@extends('layouts.layout')
@section('title','商品一覧')

@section('content')
    <div class="container">
        <div class="listcontainer">
        <div class="row">
            <h2>商品一覧</h2>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ action('ProductController@create')}}" role="button" class="btn btn-primary">商品追加</a>
            </div>
            <br>
            <br>
            <div class="col-md-12">
            <a href="{{ route('home') }}" class="btn btn-outline-success">戻る</a>
            </div>
            <br>
            
        </div>    
        <div class="col-md-12">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="30%">コード</th>
                        　　<th width="40%">商品名</th>
                        　　<th width="10%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $products)
                            <tr>
                                <td>{{ $products -> product_code }}</td>
                                <td>{{ $products -> product }}</td>
                                <td>
                                    <div>
                                        <a href="{{ action('ProductController@delete', ['id' => $products->id]) }}">削除</a>
                                    </div>
                                </td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection