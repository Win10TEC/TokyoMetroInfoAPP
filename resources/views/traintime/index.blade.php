@extends('layouts.common')
@section('title', '電車情報')
@section('keywords', 'train')
@section('description', '電車情報')
@include('layouts.head')
@include('layouts.header')
@section('content')
    <form action="/time" method="post">
<!--    <form action="{{action('TrainTimeController@index')}}" method="get">-->
        <div class="input-group mb-2">
        <input type="text" class="form-control" name="odpt:station">
        <div class="input-group-append">
            <button type="submit" class="btn btn-outline-secondary">検索</button>
        </div>
        </div>
    </form>
<br>
<br>
@endsection

@include('layouts.footer')
