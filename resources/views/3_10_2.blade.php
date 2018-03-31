@extends('layouts.base')
@section('title','(內文標題)')
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
            <a class="btn btn-danger dropdown-toggle text-center" style="line-height:28px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">申請副木<br>專案</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item bg-danger" href="#">個案資料</a>
                <a class="dropdown-item" href="#">副木樣式選擇</a>
            </div>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">歷史紀錄</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">帳戶設定</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="card">
            <div class="card-header w-100">
                <h4 class="text-center">申請副木專案</h4>
            </div>
            <div class="card-body w-100">
                <div>
                    <label>(1)家庭背景：</label>
                    <textarea class="form-control text-left rounded mr-3" style="resize: none;" id="exampleFormControlTextarea1" rows="5">請輸入文字...</textarea>
                </div>
                <br>
                <div>
                    <label>(2)受傷原因：</label>
                    <textarea class="form-control text-left rounded mr-3" style="resize: none;" id="exampleFormControlTextarea1" rows="5">請輸入文字...</textarea>
                </div>
                <div class="w-100 text-center mt-5">
                    <button type="submit" class="btn btn-outline-danger btn-lg my-1 mx-2">儲存</button>
                    <button type="button" class="btn btn-outline-info btn-lg my-1 mx-2">取消</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('bottom')