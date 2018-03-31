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
            <a class="btn btn-info dropdown-toggle" style="line-height:50px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">會員捐助</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">進行中募資案件</a>
                    <a class="dropdown-item" href="#">募資成功案件</a>
                    <a class="dropdown-item" href="#">所有捐助案件</a>
                </div>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">追蹤紀錄</a>
            <br>
            <a class="btn btn-info text-center" style="line-height:28px;" href="#" role="button">查詢捐款<br>明細</a>
            <br>
            <a class="btn btn-danger" style="line-height:50px;" href="#" role="button">帳戶設定</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="card">
            <div class="card-header w-100">
                <h4 class="text-center">帳戶設定</h4>
            </div>
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="p-1 w-75 ml-5">
                        <div class="d-flex flex-row">
                            <div class="p-1 ml-5 mt-1 w-25">
                                <label>登入帳號</label>
                            </div>
                            <div class="p-1 w-50">
                                <input type="text" class="form-control" value="該使用者之帳號" readonly>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-1 ml-5 mt-1 w-25">
                                <label>原始密碼</label>
                            </div>
                            <div class="p-1 w-50">
                                <input type="password" class="form-control" value="">
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-1 ml-5 mt-1 w-25">
                                <label>更改密碼</label>
                            </div>
                            <div class="p-1 w-50">
                                <input type="password" class="form-control" value="">
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-1 ml-5 mt-1 w-25">
                                <label>再次輸入密碼</label>
                            </div>
                            <div class="p-1 w-50">
                                <input type="password" class="form-control" value="">
                            </div>
                        </div>
                        <div class="w-75 text-center mt-3">
                            <button type="button" class="btn btn-warning btn-lg btn-block mx-5">確認更改密碼</button>
                        </div>
                    </div> 
                    <div class="p-1 w-25 border-left border-secondary">
                        <div class="ml-3">
                            <h6><b>平台系統通知</b></h6>
                            <hr>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">最新通知</label>
                                <br>
                                <small class="text-danger">當每周最新募資專案上架時收到電子信件通知</small>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">專案進度報告通知</label>
                                <br>
                                <small class="text-danger">當捐助之專案達成時收到電子信件通知</small>
                            </div>
                            <div class="text-center mt-2">
                                <button type="button" class="btn btn-primary">儲存設定</button>
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