@extends('layouts.base')
@section('title','查詢捐款明細')
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
                    <h5><b>捐款收據明細</b></h5>
                    
                </div>
                <table class="table w-50 mx-auto">
                    <tbody>
                        <tr>
                            <th scope="row">
                                捐款日期
                            </th>
                            <td>
                                2018/03/25
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                捐款人姓名
                            </th>
                            <td>
                                潘安
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                捐款代號
                            </th>
                            <td>
                                12356522
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                捐款金額
                            </th>
                            <td>
                                $500
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="#">捐款收據圖片檔.jpg</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                收據寄出日期
                            </th>
                            <td>
                                2018/04/01
                            </td>
                        </tr>
                    </tbody>
                </table>


                
                    
                    


            </div>

        </div>
    </div>
</div>
@endsection
@section('bottom')