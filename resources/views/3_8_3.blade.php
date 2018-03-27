@extends('layouts.user')
@section('title','(內文標題)')

@section('content')
    <div class="d-flex flex-row">
        <div class="p-1 w-100">
            <br>
            <h6 class="text-danger text-center">註冊完成！</h6><br>
            <h4 class="text-center">登入</h4>
            <div class="d-flex w-100">
                <div class="p-2 w-100  d-flex justify-content-center">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputusername1">帳號輸入</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="登入帳號">                 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">密碼輸入</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="登入密碼">
                            <small id="emailHelp" class="form-text text-muted">無法登入嗎？請點選<a href="#">忘記密碼</a></small>
                        </div>
                        <div class="form-check d-flex flex-row-reverse">
                            <div class="p-1 align-self-center">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">記住我</label>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary ml-3">回主畫面</button>
                        <button type="submit" class="btn btn-primary ml-3">登入</button>
                        <br>
                        <br>
                        <h4><a href="#">非會員立即註冊</a></h4>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection
