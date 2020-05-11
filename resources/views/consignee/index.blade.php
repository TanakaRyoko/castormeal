@extends('layouts.layout')
@section('title','荷受人一覧')

@section('content')
    <div class="container">
        <div class="listcontainer">
        <div class="row">
            <h2>荷受人一覧</h2>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ action('ConsigneeController@create')}}" role="button" class="btn btn-primary">荷受人追加</a>
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
                        　　<th width="40%">荷受人名</th>
                        　　<th width="10%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $consignees)
                            <tr>
                                <td>{{ $consignees -> consignee_code }}</td>
                                <td>{{ $consignees -> consignee }}</td>
                                <td>
                                    <div>
                                        <a href="{{ action('ConsigneeController@delete', ['id' => $consignees->id]) }}">削除</a>
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