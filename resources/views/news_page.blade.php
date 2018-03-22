@extends('layouts.base')
@section('title','(內文標題)')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active"><a href="#">最新消息</a></li>
    <li class="breadcrumb-item active" aria-current="page">(內文標題)</li>
</ol>
@endsection
@section('content')
    <div class="container bg-light">
        <div class="justify-content-center">
            <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" class="rounded mx-auto d-block">
        </div>
        <div>
            <p>美國總統川普啟動301條款的大刀將砍向中國，第一步制裁方式，將對中國產品課稅。白宮21日預告，川普22日將就中國的「經濟侵略」，簽署備忘錄。白宮稍早公布川普行程，他訂於美東時間22日中午12時30分簽署備忘錄，白宮明確指出，川普將針對「中國的經濟侵略」簽署備忘錄。事實上，貿易代表萊特海澤（Robert Lighthizer）21日於聯邦眾院歲入委員會聽證上已明白預告，中國在智慧財產權上對美國企業的侵害，是美中貿易間的嚴重問題，川普很快就會就「301調查」對中國做出制裁決定。</p>
        </div>


    </div>
@endsection
@section('bottom')