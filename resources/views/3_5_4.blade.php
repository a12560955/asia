@extends('layouts.base')
@section('title','(內文標題)')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active"><a href="#">募資計畫</a></li>
    <li class="breadcrumb-item active"><a href="#">募資個案</a></li>
    <li class="breadcrumb-item active" aria-current="page">捐款專頁</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-info"  style="line-height:50px;" href="#" role="button">募資專案</a>
            <br>
            <a class="btn btn-danger" style="line-height:50px;" href="#" role="button">募資個案</a>
            <br>
            <a class="btn btn-info text-center" style="line-height:28px;" href="#" role="button">募資成功<br>案件</a>
        </nav>
    </div>
    <div class="p-1">
        <div class="d-flex flex-row">
            <div class="p-1 w-75">
                <div class="card carousel-inner d-flex flex-column">
                    <div class="p-2 justify-content-center">
                        <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg"alt="專案圖片">
                    </div>
                    <div class="p-2 text-center">
                        <h2>捐款專頁</h2>
                        <br><br>
                    </div>
                    <div class="p-2 mx-2">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">捐款金額</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6" placeholder="$500NT" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">回饋贈品</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6" placeholder="黃色小鴨" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">捐款人姓名</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">收件人姓名</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">收件地址</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">聯絡電話</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6">
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">電子信箱</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <legend class="col-form-label col-sm-2 pt-0">付款方式</legend>
                                <div class="row col-sm-9">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                信用卡
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            ATM
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                        <label class="form-check-label" for="gridRadios3">
                                            超商付款
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">匯款帳號後五碼</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">電子信箱</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mr-6">
                                </div>
                            </div>
                            <div class="form-group row" >
                                <button type="submit" class="btn btn-primary mx-auto">確認送出</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="p-1 text-center justify-content-end w-25">
                <div class="flex-col text-center justify-content-center">
                    <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款500元以上</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款2000元以上</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
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