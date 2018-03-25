@extends('layouts.base')
@section('title','(內文標題)')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active"><a href="#">募資計畫</a></li>
    <li class="breadcrumb-item active" aria-current="page">募資專案</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row">
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
        <h2 class="text-center">募資專案</h2>
        <div class="list-group">
            <p class="flex-column border">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">進行中50%</div>
                    
                </div>
                <div class="d-flex flex-row">
                    <div class="p-1">
                        <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" height="100" width="150" class="d-inline-block rounded" alt="BV">
                    </div>
                    <div class="p-1">
                        <h5><b>燒傷生心理重建服務</b></h5>
                        <h6 class="text-warning">專案編號：666</h6>
                        <p>傷友在意外發生後通常會有創傷反應，專業心理諮商的介入可以縮短創傷反應的時期，早日恢復以往的生活。運用兒童遊戲治療、個別及團體諮商服務、心理評估服務、專案服務、心理講座...</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="#"><span class="badge badge-pill badge-danger">我要捐款❤</span></a>
                            <a href="#"><span class="badge badge-pill badge-warning">了解詳情❤</span></a> 
                        </div>

                    </div>
                </div>
            </p>

            <p class="flex-column border">
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">已完成120%</div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-1">
                        <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" height="100" width="150" class="d-inline-block rounded" alt="BV">
                    </div>
                    <div class="p-1">
                        <h5><b>燒傷生心理重建服務</b></h5>
                        <h6 class="text-warning">專案編號：666</h6>
                        <p>傷友在意外發生後通常會有創傷反應，專業心理諮商的介入可以縮短創傷反應的時期，早日恢復以往的生活。運用兒童遊戲治療、個別及團體諮商服務、心理評估服務、專案服務、心理講座...</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="#"><span class="badge badge-pill badge-danger">我要捐款❤</span></a>
                            <a href="#"><span class="badge badge-pill badge-warning">了解詳情❤</span></a> 
                        </div>

                    </div>
                </div>
            </p>
            <p class="flex-column border">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">已完成100%</div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-1">
                        <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" height="100" width="150" class="d-inline-block rounded" alt="BV">
                    </div>
                    <div class="p-1">
                        <h5><b>燒傷生心理重建服務</b></h5>
                        <h6 class="text-warning">專案編號：666</h6>
                        <p>傷友在意外發生後通常會有創傷反應，專業心理諮商的介入可以縮短創傷反應的時期，早日恢復以往的生活。運用兒童遊戲治療、個別及團體諮商服務、心理評估服務、專案服務、心理講座...</p>
                        <div class="d-flex flex-row-reverse">
                            <a href="#"><span class="badge badge-pill badge-danger">我要捐款❤</span></a>
                            <a href="#"><span class="badge badge-pill badge-warning">了解詳情❤</span></a> 
                        </div>

                    </div>
                </div>
            </p>
        </div>
    </div>
</div>
@endsection
@section('bottom')