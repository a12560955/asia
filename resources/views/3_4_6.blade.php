@extends('layouts.base')
@section('title','(內文標題)')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active"><a href="#">募資計畫</a></li>
    <li class="breadcrumb-item active"><a href="#">募資專案</a></li>
    <li class="breadcrumb-item active" aria-current="page">留言板</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row container w-100">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-danger" style="line-height:50px;" href="#" role="button">募資專案</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">募資個案</a>
            <br>
            <a class="btn btn-info text-center" style="line-height:28px;" href="#" role="button">募資成功<br>案件</a>
        </nav>
    </div>
    <div class="p-1">
        <div class="d-flex flex-row">
            <div class="p-1">
                <div class="card carousel-inner d-flex flex-column">
                    <div class="p-2 justify-content-center">
                        <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" style="width:50rem;" alt="專案圖片">
                    </div>
                    <div class="p-2 text-center">
                        <h2>專案標題</h2>
                    </div>
                    <div class="p-2">
                        <form>
                            <hr>
                            <div class="form-group bg-light">
                                <div class="ml-3">
                                    <img src="https://lh4.ggpht.com/-j44G_ZA_FfY/VPMLTUjPNnI/AAAAAAAA2mI/PBGMudJYhc0/s1600/1-old.png" height="50" width="50" alt="王小名" class="rounded-circle">
                                    <label for="exampleFormControlTextarea1">王小明</label>
                                </div>
                                <div class="form-row">
                                    <div class="col-9 ml-5 my-2">
                                        <textarea class="form-control text-left" style="resize: none;" id="exampleFormControlTextarea1" rows="3">輸入你想要寫的內容...</textarea>
                                    </div>
                                    <div class="col-2 ml-3 my-2">
                                        <br><br>
                                        <button type="submit" class="btn btn-warning border border-dark">我要留言</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </form>
                        <hr>
                            <div class="form-group bg-light">
                                <div class="mx-3">
                                    <img src="https://lh4.ggpht.com/-j44G_ZA_FfY/VPMLTUjPNnI/AAAAAAAA2mI/PBGMudJYhc0/s1600/1-old.png" height="50" width="50" alt="王小名" class="rounded-circle">
                                    <label for="exampleFormControlTextarea1">王小明說：</label>
                                </div>
                                <div class="ml-5">
                                    <p class="ml-5">做善事還有贈品拿，真開心！</p>
                                </div>
                            </div>
                        <hr>
                        <hr>
                            <div class="form-group bg-light">
                                <div class="mx-3">
                                    <img src="https://lh4.ggpht.com/-j44G_ZA_FfY/VPMLTUjPNnI/AAAAAAAA2mI/PBGMudJYhc0/s1600/1-old.png" height="50" width="50" alt="王小名" class="rounded-circle">
                                    <label for="exampleFormControlTextarea1">王小明說：</label>
                                </div>
                                <div class="ml-5">
                                    <p class="ml-5">大家好我叫王小明！</p>
                                </div>
                            </div>
                        <hr>
                    </div>
                    
           
                </div>
            </div>
            <div class="p-1 text-center justify-content-end">
                <h4 class="text-center">進行中</h4>
                <button type="button" class="btn btn-outline-info btn-lg btn-block">我要捐款</button>
                <button type="button" class="btn btn-outline-info btn-lg btn-block">追蹤案件</button>
                <button type="button" class="btn btn-outline-info btn-lg btn-block">留言板</button>
                <div class="flex-col text-center justify-content-center">
                    <div class="p-1">
                        <div class="card" style="width:10rem;">
                            <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款500元以上</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="card" style="width:10rem;">
                            <img class="card-img-top" src="https://i.imgur.com/GYwQ6c9.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款2000元以上</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="card" style="width:10rem;">
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