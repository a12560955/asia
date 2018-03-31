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
            <a class="btn btn-danger text-center" style="line-height:28px;" href="#" role="button">查詢捐款<br>明細</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">帳戶設定</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="card">
            <div class="card-header w-100">
                <h4 class="text-center">查詢捐款明細</h4>
            </div>
            <div class="card-body">
                <div class="w-50 mx-auto">
                    <form>
                        <div class="form-check ml-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                全部區間
                            </label>
                        </div>
                        <div class="form-check mt-2 ml-3">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                日期區間
                            </label>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-sm-4 col-form-label text-center">起始日</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control mt-1" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-center">迄止日</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control mt-1" value="">
                            </div>
                        </div>
                        <button type="button" class="btn btn-outline-danger btn-block">查詢</button>
                        
                        
                    </form>
                </div>
                


                
                    
                    


            </div>

        </div>
    </div>
</div>
@endsection
@section('bottom')