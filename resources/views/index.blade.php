@extends('layouts.common')

@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')

@include('layouts.head')

@include('layouts.header')

@section('content')
<p>コンテンツ内容が入ります</p>
@endsection

@include('layouts.footer')
