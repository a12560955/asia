@extends('layouts.base')
@section('title','會員資料')
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
            <a class="btn btn-danger"  style="line-height:50px;" href="#" role="button">會員資料</a>
            <br>
            <a class="btn btn-info dropdown-toggle text-center" style="line-height:28px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">申請副木<br>專案</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">個案資料</a>
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
                <h4 class="text-center">會員資料</h4>
            </div>
            <div class="card-body ml-4">
                <form enctype="multipart/form-data">
                    <div style="width:10rem;">
                        <img class="border" style="width:10rem;" src="./images/boy.png" alt="大頭照">
                        <div>
                            <input type="file" id="user" accept="image/gif, image/jpeg, image/png">
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row w-50">
                            <div class="col-">
                                <label>暱稱：</label>
                            </div>
                            <div class="col- ml-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>姓名：</label>
                            </div>
                            <div class="col- ml-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>  
                        <br>                  
                        <div class="row w-50">
                            <div class="col-">
                                <label>性別：</label>
                            </div>
                            <div class="col- ml-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">男</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">女</label>
                                </div>
                            </div>
                        </div>  
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>身分證字號：</label>
                            </div>
                            <div class="col- ml-1">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col- mr-2">
                                <label>病歷號：</label>
                            </div>
                            <div class="col- ml-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>             
                        <div class="row w-50">
                            <div class="col-">
                                <label>生日：</label>
                            </div>
                            <div class="col- ml-5 form-inline" >
                                <input type="text" style="width:5rem;" class="form-control">年<input type="text" style="width:5rem;" class="form-control">月<input type="text" style="width:5rem;" class="form-control">日
                            </div>
                        </div> 
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>聯絡信箱：</label>
                            </div>
                            <div class="col- ml-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>  
                        <br>
                        <div class="row w-50">
                            <div class="col- mt-2">
                                <label>聯絡地址：</label>
                            </div>
                            <div class="col- ml-3">
                                <select class="custom-select my-1 mr-sm-2" style="width:10rem;" id="inlineFormCustomSelectPref">
                                    <option selected>請選擇縣</option>
                                    <option value="1">One</option>
                                </select>
                                <select class="custom-select my-1 mr-sm-2" style="width:10rem;" id="inlineFormCustomSelectPref">
                                    <option selected>請選擇鄉鎮市區</option>
                                    <option value="1">One</option>
                                </select> 
                                <input class="form-control" type="text" placeholder="請輸入街道">                
                            </div>
                        </div>
                        <br>  
                        <div class="row w-50">
                            <div class="col-">
                                <label>連絡電話：</label>
                            </div>
                            <div class="col- ml-3 form-inline">
                                <input type="text" class="form-control" style="width:4rem;">
                                <label class="mx-1">-</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>手機：</label>
                            </div>
                            <div class="col- ml-5 form-inline">
                                <input type="text" class="form-control" style="width:6rem;">
                                <label class="mx-1">-</label>
                                <input type="text" class="form-control" style="width:6rem;">
                                <label class="mx-1">-</label>
                                <input type="text" class="form-control" style="width:6rem;">
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>職業：</label>
                            </div>
                            <div class="col- ml-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>所得：</label>
                            </div>
                            <div class="col- ml-5 form-inline">
                                <input type="text" class="form-control">
                                <label>NTD</label>
                            </div>
                        </div>  
                        <br>  
                        <div class="form-inline row w-50 text-center">
                            <button type="submit" class="btn btn-primary my-1 ml-5 mx-2">儲存</button>
                            <button type="button" class="btn btn-primary my-1 ml-5 mx-2">取消</button>
                        </div>
                        
                    </div>
                    
                </form>

            </div>

        </div>
    </div>
</div>
@endsection
@section('bottom')