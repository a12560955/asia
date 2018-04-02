@extends('layouts.user')
@section('title','一般會員註冊')
@section('content')
<div class="d-flex flex-row">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-danger"  style="line-height:50px;" href="#" role="button">會員資料</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">會員捐助</a>
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
            <div class="card-body w-100">
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
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>姓名：</label>
                            </div>
                            <div class="col- ml-5">
                                <input type="text" class="form-control">
                                <small class="form-text text-muted">
                                    選填
                                </small>
                            </div>
                        </div>  
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>登入帳號：</label>
                            </div>
                            <div class="col- ml-3">
                                <input type="text" class="form-control">
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>
                            </div>
                        </div>  
                        <br>  
                        <div class="row w-50">
                            <div class="col-">
                                <label>密碼：</label>
                            </div>
                            <div class="col- ml-5">
                                <input type="password" class="form-control">
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>
                            </div>
                        </div>  
                        <br>
                        <div class="row w-50">
                            <div class="col- mr-2">
                                <label>再次輸入<br>密碼：</label>
                            </div>
                            <div class="col- ml-4">
                                <input type="password" class="form-control">
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>
                            </div>
                        </div>  
                        <br>      
                        <div class="row w-50">
                            <div class="col-">
                                <label>所得：</label>
                            </div>
                            <div class="col- ml-5">
                                <input type="text" class="form-control">
                                <small class="form-text text-muted">
                                    選填
                                </small>
                            </div>
                        </div>  
                        <br>                 
                        <div class="row w-50">
                            <div class="col-">
                                <label>生日：</label>
                            </div>
                            <div class="col- ml-5" >
                                <div class="form-inline">
                                    <input type="text" style="width:5rem;" class="form-control">年<input type="text" style="width:5rem;" class="form-control">月<input type="text" style="width:5rem;" class="form-control">日
                                </div>
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>
                            </div>
                            
                        </div> 
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>性別：</label>
                            </div>
                            <div class="col- ml-5">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">男</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">女</label>
                                </div>
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>
                            </div>
                        </div>  
                        <br>      
                        <div class="row w-50">
                            <div class="col-">
                                <label>聯絡信箱：</label>
                            </div>
                            <div class="col- ml-3">
                                <input type="text" class="form-control">
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>
                            </div>
                        </div>  
                        <br>
                        <div class="row w-50">
                            <div class="col-">
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
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>            
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>連絡電話：</label>
                            </div>
                            <div class="col- ml-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col-">
                                <label>職業：</label>
                            </div>
                            <div class="col- ml-5">
                                <select class="custom-select">
                                    <option selected>選擇你的職業</option>
                                    <option value="1">學生</option>
                                    <option value="2">上班族</option>
                                    <option value="3">軍公教</option>
                                </select>
                                <small class="form-text text-muted">
                                    必要輸入
                                </small>   
                            </div>
                        </div>
                        <br>
                        <div class="row w-50">
                            <div class="col- mr-2">
                                <label>使用條款</label>
                            </div>
                            <div class="col- ml-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">同意募資平台<a href="#"><u>服務條款</u></a></label>
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <button type="submit" class="btn btn-primary my-1 mx-5">註冊</button>
                        <button type="submit" class="btn btn-primary my-1 ml-5">取消</button>
                    </div>
                    
                </form>

            </div>

        </div>
    </div>
</div>
@endsection
