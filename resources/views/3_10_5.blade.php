@extends('layouts.base')
@section('title','帳戶設定')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item"><a href="#">會員專區</a></li>
    <li class="breadcrumb-item" aria-current="page">病患會員</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-info"  style="line-height:50px;" href="#" role="button">會員資料</a>
            <br>
            <a class="btn btn-info dropdown-toggle text-center" style="line-height:28px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">申請副木<br>專案</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">個案資料</a>
                <a class="dropdown-item" href="#">副木樣式選擇</a>
            </div>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">歷史紀錄</a>
            <br>
            <a class="btn btn-danger" style="line-height:50px;" href="#" role="button">帳戶設定</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="card">
            <div class="card-header w-100">
                <h4 class="text-center">帳戶設定</h4>
            </div>
            <div class="card-body w-100">
                <div class="d-flex flex-row">
                    <div class="p-1 ml-5 mt-1 w-25">
                        <label>登入帳號</label>
                    </div>
                    <div class="p-1 w-50">
                        <input type="text" class="form-control" value="該使用者之帳號" readonly>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-1 ml-5 mt-2 w-25">
                        <label>原始密碼</label>
                    </div>
                    <div class="p-1 w-50">
                        <input type="password" class="form-control" value="">
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-1 ml-5 mt-2 w-25">
                        <label>更改密碼</label>
                    </div>
                    <div class="p-1 w-50">
                        <input type="password" class="form-control" value="">
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-1 ml-5 mt-2 w-25">
                        <label>再次輸入密碼</label>
                    </div>
                    <div class="p-1 w-50">
                        <input type="password" class="form-control" value="">
                    </div>
                </div>
                <div class="w-75 text-center my-4">
                    <button type="button" class="btn btn-warning btn-lg btn-block mx-5">確認更改密碼</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('bottom')