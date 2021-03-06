@extends('layouts.base')
@section('title','歷史紀錄')
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
            <a class="btn btn-danger" style="line-height:50px;" href="#" role="button">歷史紀錄</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">帳戶設定</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="card">
            <div class="card-header w-100">
                <h4 class="text-center">歷史紀錄</h4>
            </div>
            <div class="card-body w-100">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">時間</th>
                            <th scope="col" class="text-center">事件</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><h6>2018年</h6><p>1月20日</p></th>
                            <td>中國就診醫院 <br>病例確診原因：骨折 <br>復健預估時間：一年 <br>醫師：侯醫師 </td>
                        </tr>
                        <tr>
                            <th scope="row"><h6>2018年</h6><p>2月5日</p></th>
                            <td>治療方式：復健並配給副木協助復健 <br>副木樣式選擇：02(手臂) <br>醫師：侯醫師 </td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>
@endsection
@section('bottom')