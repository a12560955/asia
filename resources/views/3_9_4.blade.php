@extends('layouts.base')
@section('title','(內文標題)')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item"><a href="#">會員專區</a></li>
    <li class="breadcrumb-item" aria-current="page">一般會員</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-info"  style="line-height:50px;" href="#" role="button">會員資料</a>
            <br>
            <a class="btn btn-danger dropdown-toggle" style="line-height:50px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">會員捐助</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">進行中募資案件</a>
                    <a class="dropdown-item" href="#">募資成功案件</a>
                    <a class="dropdown-item bg-danger text-light" href="#">所有捐助案件</a>
                </div>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">追蹤紀錄</a>
            <br>
            <a class="btn btn-info text-center" style="line-height:28px;" href="#" role="button">查詢捐款<br>明細</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">帳戶設定</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="card">
            <div class="card-header w-100">
                <h4 class="text-center">所有捐助案件</h4>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body d-flex flex-row"> 
                        {{--  專案募資的顏色這裡改  --}}
                        <div class="p-1 w-25 bg-info">
                            <h3>專案募資</h3>
                        </div>
                        <div class="p-1 w-75">
                            <div class="w-100">
                                <div class="d-flex flex-row">
                                    <div class="p-1 w-25 text-success"><h5>成功</h5></div>
                                    <div class="p-1 w-50 mx-auto">
                                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFNuP015NIk-rNGVVITOCuwrxml64sGQ-gYQHpdhvvBX1cbQv" alt="病患圖片">
                                    </div>
                                    <div class="p-1 w-25"></div>
                                </div>
                                
                            </div>
                            <div class="w-100 mx-auto text-center">
                                <h5>專案標題</h5>
                                <p>專案內容</p>
                            </div>
                            <div class="w-100">
                                <div class="d-flex flex-row">
                                    <div class="p-1 w-50">
                                        <p class="mt-1">目前募資$2000</p>
                                    </div>
                                    <div class="p-1 w-50">
                                        <p>捐款人數：3</p>                                        
                                    </div>
                                </div>
                            </div>
                        </div>           
                    </div>
                </div>
                <div class="card mt-1">
                    <div class="card-body d-flex flex-row">
                        <div class="p-1 w-25">
                            <h3>個案募資</h3>
                        </div>
                        <div class="p-1 w-75">
                            <div class="w-100">
                                <div class="d-flex flex-row">
                                    <div class="p-1 w-25"><h5>進行中</h5></div>
                                    <div class="p-1 w-50 mx-auto">
                                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFNuP015NIk-rNGVVITOCuwrxml64sGQ-gYQHpdhvvBX1cbQv" alt="病患圖片">
                                    </div>
                                    <div class="p-1 w-25"></div>
                                </div>
                                
                            </div>
                            <div class="w-100 mx-auto text-center">
                                <h5>個案標題</h5>
                                <p>個案內容</p>
                                <div class="progress mx-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
                                </div>
                            </div>
                            <div class="w-100">
                                <div class="d-flex flex-row">
                                    <div class="p-1 w-50 d-flex flex-row">
                                        <div class="p-1 w-50">
                                            <p>集資$2500</p>
                                        </div>
                                        <div class="p-1 w-50">
                                            <p>目前募資$2000</p>
                                        </div>
                                    </div>
                                    <div class="p-1 w-50">
                                        <p class="mt-1">捐款人數：3</p>                                        
                                    </div>
                                </div>
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