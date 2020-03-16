{{-- layouts/admin.blade.phpを読み込む--}}
@extends('layouts.layout')


{{-- layout.blade.phoの@yield('title')にニュースの新規作成を埋め込む --}}
@section('title','本船')


{{-- layout.blade.phpの@yield('content')に以下のタグを埋め込む　--}}
@section('conten')
    <div class="row">
        <div class="col-md-8 mx-auto">
           <h2>本船情報登録</h2> 
        </div>
    </div>
@endsection
