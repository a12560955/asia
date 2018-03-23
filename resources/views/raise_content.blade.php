@extends('layouts.base')
@section('title','(內文標題)')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active"><a href="#">募資計畫</a></li>
    <li class="breadcrumb-item active"><a href="#">募資專案</a></li>
    <li class="breadcrumb-item active" aria-current="page">(專案名稱)</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row container w-100">
    <div class="p-2">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-danger" href="#" role="button">募資專案</a>
            <br>
            <a class="btn btn-info" href="#" role="button">募資個案</a>
            <br>
            <a class="btn btn-info text-center" href="#" role="button">募資成功<br>案件</a>
        </nav>
    </div>
    <div class="p-2">
        <div class="d-flex flex-row">
            <div class="p-2">
                <div class="card carousel-inner d-flex flex-column">
                    <div class="p-2">
                        <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                    </div>
                    <div class="p-2 text-center">
                        <h2>專案標題</h2>
                    </div>
                    <div class="p-2">
                        <p>專案內容</p>
                        <p>使命願景</p>
                        <p>使用條例</p>
                    </div>
                    <div class="p-2">    
                        <img class="card-img-top" src="https://pic.pimg.tw/belleaya/1456691753-3592257110.jpg?v=1456691775" alt="">
                    </div>
                    <div class="d-flex flex-row text-center">
                        <div class="p-2">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">目前募集金額</h5>
                                    <br>
                                    <h6 class="card-subtitle mb-2">$5000元</h6>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">捐款人數</h5>
                                    <br>
                                    <h6 class="card-subtitle mb-2">20人</h6>
                                </div>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">受贈人數</h5>
                                    <br>
                                    <h6 class="card-subtitle mb-2 ">5人</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 text-center">
                        <h5>受贈患者</h5>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-2">
                                <div class="card" style="width:10rem;">
                                    <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                                    <div class="card-body">
                                        <h6>鸚鵡兄弟</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="card" style="width:10rem;">
                                    <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                                    <div class="card-body">
                                        <h6>鸚鵡兄弟</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="card" style="width:10rem;">
                                    <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                                    <div class="card-body">
                                        <h6>鸚鵡兄弟</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2">
                                <div class="card" style="width:10rem;">
                                    <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                                    <div class="card-body">
                                        <h6>鸚鵡兄弟</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 text-center">
                <h4 class="text-center">進行中</h4>
                <button type="button" class="btn btn-outline-info btn-lg btn-block">我要捐款</button>
                <button type="button" class="btn btn-outline-info btn-lg btn-block">追蹤案件</button>
                <button type="button" class="btn btn-outline-info btn-lg btn-block">留言板</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottom')