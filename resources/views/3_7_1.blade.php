@extends('layouts.base')
@section('title','(內文標題)')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item" aria-current="page">產品設計展示</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-danger"  style="line-height:50px;" href="#" role="button">副木</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">媽媽手</a>
            <br>
            <a class="btn btn-info text-center" style="line-height:50px;" href="#" role="button">尺側偏移</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="d-flex flex-row">
            <div class="p-1 w-100">
                <div class="card carousel-inner d-flex flex-column">
                    <div class="p-2 text-center">
                        <h2>產品設計展示</h2>
                    </div>
                    <div class="p-2">
                        <div class="card mx-3">
                            <div class="card-body w-100">
                                <div class="card-group w-100">
                                    <div class="card w-50">
                                        <div>
                                            <div class="card-header bg-white">
                                                <img class="card-img-top" src="./images/S_7666095774631.jpg" alt="副木">
                                            </div>
                                            <div class="card-group">
                                                <div class="card mx-2 my-2">
                                                    <img class="card-img-top" src="./images/S_7666095774631.jpg" alt="副木">
                                                </div>
                                                <div class="card mx-2 my-2">
                                                    <img class="card-img-top" src="./images/S_7666095774631.jpg" alt="副木">
                                                </div>
                                                <div class="card mx-2 my-2">
                                                    <img class="card-img-top" src="./images/S_7666095774631.jpg" alt="副木">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card w-50">
                                        <div class="card-header">
                                            <h5 class="card-title">名稱：右手副木</h5>
                                        </div>
                                        <div class="card-body">            
                                            <div>
                                                <h5>功能說明：</h5>
                                                <p class="card-text">取代傳統不透氣不易拆卸的石膏，讓使用者可以輕鬆拆卸，避免潰爛發生。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mx-3">
                            <div class="card-body w-100">
                                <div class="card-group w-100">
                                    <div class="card w-50">
                                        <div>
                                            <div class="card-header bg-white">
                                                <img class="card-img-top" src="./images/S_7666095774631.jpg" alt="副木">
                                            </div>
                                            <div class="card-group">
                                                <div class="card mx-2 my-2">
                                                    <img class="card-img-top" src="./images/S_7666095774631.jpg" alt="副木">
                                                </div>
                                                <div class="card mx-2 my-2">
                                                    <img class="card-img-top" src="./images/S_7666095774631.jpg" alt="副木">
                                                </div>
                                                <div class="card mx-2 my-2">
                                                    <img class="card-img-top" src="./images/S_7666095774631.jpg" alt="副木">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card w-50">
                                        <div class="card-header">
                                            <h5 class="card-title">名稱：右手副木</h5>
                                        </div>
                                        <div class="card-body">            
                                            <div>
                                                <h5>功能說明：</h5>
                                                <p class="card-text">取代傳統不透氣不易拆卸的石膏，讓使用者可以輕鬆拆卸，避免潰爛發生。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>             
                    </div> 
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottom')