@extends('layouts.base')
@section('title','(內文標題)')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active"><a href="#">募資計畫</a></li>
    <li class="breadcrumb-item active"><a href="#">募資專案</a></li>
    <li class="breadcrumb-item active"><a href="#">(專案名稱)</a></li>
    <li class="breadcrumb-item active" aria-current="page">捐款</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row container w-100">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-danger" style="line-height:50px;" href="#" role="button">募資專案</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">募資個案</a>
            <br>
            <a class="btn btn-info text-center" style="line-height:28px;" href="#" role="button">募資成功<br>案件</a>
        </nav>
    </div>
    <div class="p-1">
        <div class="d-flex flex-row">
            <div class="p-1 w-75">
                <div class="card carousel-inner d-flex flex-column">
                    <div class="p-2 justify-content-center">
                        <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                    </div>
                    <div class="p-2 text-center">
                        <h2>捐款專頁</h2>
                        <br><br>
                    </div>
                    <div>
                        <h5>請輸入捐款金額</h5>
                        <br>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="$NT" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">捐款</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-1 text-center justify-content-end w-25">
                <div class="flex-col text-center justify-content-center">
                     <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="./images/8.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款500元以上</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="./images/S_7726722608306.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款2000元以上</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="./images/S_7726722543771.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款5000元以上</h6>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottom')