@extends('layouts.common')

@section('title', '電車情報')
@section('keywords', 'train')
@section('description', '電車情報')

@include('layouts.head')

@include('layouts.header')

@section('content')
<br>
<div class="alert alert-primary" role="alert">
    <h4 class="alert-heading">現在の運行状況 / Current operation status</h4>
    <span>路線名をクリックすると、運行状況が確認できます。</span><br>
    <span>Click the route name to check the operation status.</span>
</div>
<div class="accordion" id="accordions" role="tablist">
@if(isset($data))
@foreach ($data as $item)
    @if($item['railway'] == "Marunouchi")
    <div class="card-header" role="tab" id="heading1">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #F62E36;" class="text-body stretched-link text-decoration-none" href="#collapse1" aria-expanded="true" aria-controls="collapse1"> 丸ノ内線 / Marunouchi </a>
        </h5>
    </div>
    <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordions">
        <div class="card" style=" background-color: #F62E36;">
            <div class="card-body">
                <h4 class="railway-title-text">丸ノ内線 / Marunouchi</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @elseif($item['railway'] == "Hanzomon")
    <div class="card-header" role="tab" id="heading2">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #8F76D6;" class="text-body stretched-link text-decoration-none" href="#collapse2" aria-expanded="true" aria-controls="collapse2"> 半蔵門線 / Hanzomon </a>
        </h5>
    </div>
    <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordions">
        <div class="card" style=" background-color: #8F76D6;">
            <div class="card-body">
                <h4 class="railway-title-text">半蔵門線 / Hanzomon</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @elseif($item['railway'] == "Hibiya")
    <div class="card-header" role="tab" id="heading3">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #B5B5AC;" class="text-body stretched-link text-decoration-none" href="#collapse3" aria-expanded="true" aria-controls="collapse3"> 日比谷線 / Hibiya </a>
        </h5>
    </div>
    <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordions">
        <div class="card" style=" background-color: #B5B5AC;">
            <div class="card-body">
                <h4 class="railway-title-text">日比谷線 / Hibiya</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @elseif($item['railway'] == "Chiyoda")
    <div class="card-header" role="tab" id="heading4">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #00BB85;" class="text-body stretched-link text-decoration-none" href="#collapse4" aria-expanded="true" aria-controls="collapse4"> 千代田線 / Chiyoda </a>
        </h5>
    </div>
    <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordions">
        <div class="card" style=" background-color: #00BB85;">
            <div class="card-body">
                <h4 class="railway-title-text">千代田線 / Chiyoda</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @elseif($item['railway'] == "Ginza")
    <div class="card-header" role="tab" id="heading5">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #FF9500;" class="text-body stretched-link text-decoration-none" href="#collapse5" aria-expanded="true" aria-controls="collapse5"> 銀座線 / Ginza </a>
        </h5>
    </div>
    <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordions">
        <div class="card" style=" background-color: #FF9500;">
            <div class="card-body">
                <h4 class="railway-title-text">銀座線 / Ginza</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @elseif($item['railway'] == "Tozai")
    <div class="card-header" role="tab" id="heading6">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #009BBF;" class="text-body stretched-link text-decoration-none" href="#collapse6" aria-expanded="true" aria-controls="collapse6"> 東西線 / Tozai </a>
        </h5>
    </div>
    <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordions">
        <div class="card" style=" background-color: #009BBF;">
            <div class="card-body">
                <h4 class="railway-title-text">東西線 / Tozai</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @elseif($item['railway'] == "Namboku")
    <div class="card-header" role="tab" id="heading7">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #00AC9B;" class="text-body stretched-link text-decoration-none" href="#collapse7" aria-expanded="true" aria-controls="collapse7"> 南北線 / Namboku </a>
        </h5>
    </div>
    <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordions">
        <div class="card" style=" background-color: #00AC9B;">
            <div class="card-body">
                <h4 class="railway-title-text">南北線 / Namboku</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @elseif($item['railway'] == "Fukutoshin")
    <div class="card-header" role="tab" id="heading8">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #9C5E31;" class="text-body stretched-link text-decoration-none" href="#collapse8" aria-expanded="true" aria-controls="collapse8"> 副都心線 / Fukutoshin </a>
        </h5>
    </div>
    <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8" data-parent="#accordions">
        <div class="card" style=" background-color: #9C5E31;">
            <div class="card-body">
                <h4 class="railway-title-text">副都心線 / Fukutoshin</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @else
    <div class="card-header" role="tab" id="heading9">
        <h5 class="mb-0">
            <a data-toggle="collapse" style="color: #C1A470;" class="text-body stretched-link text-decoration-none" href="#collapse9" aria-expanded="true" aria-controls="collapse9"> 有楽町線 / Yurakucho </a>
        </h5>
    </div>
    <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9" data-parent="#accordions">
        <div class="card" style=" background-color: #C1A470;">
            <div class="card-body">
                <h4 class="railway-title-text">有楽町線 / Yurakucho</h4>
                <p class="railway-main-text">{{$item['trainInformationText']}}</p>
            </div>
        </div>
    </div>
    @endif
@endforeach
</div>
@endif
<br>
@endsection

@include('layouts.footer')
