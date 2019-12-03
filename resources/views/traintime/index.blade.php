@extends('layouts.common')
@section('title', '電車情報')
@section('keywords', 'train')
@section('description', '電車情報')
@include('layouts.head')
@include('layouts.header')
@section('content')
<p>{{$msg}}</p>
    <form action="/time" method="post">
        <div class="input-group mb-2">
        <input type="text" class="form-control" name="station">
        <div class="input-group-append">
            <button type="button" class="btn btn-outline-secondary">検索</button>
        </div>
        </div>
    </form>
<br>
<br>
@endsection

@include('layouts.footer')
