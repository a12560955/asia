@extends('layouts.base')
@section('title','雍有明副木募資')
@section('nav')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active"><a href="#">募資計畫</a></li>
    <li class="breadcrumb-item active" aria-current="page">募資成功案件</li>
</ol>
@endsection
@section('content')
<div class="d-flex flex-row">
    <div class="p-1">
        <br><br>
        <nav class="nav flex-column">
            <a class="btn btn-info"  style="line-height:50px;" href="#" role="button">募資專案</a>
            <br>
            <a class="btn btn-info" style="line-height:50px;" href="#" role="button">募資個案</a>
            <br>
            <a class="btn btn-danger text-center" style="line-height:28px;" href="#" role="button">募資成功<br>案件</a>
        </nav>
    </div>
    <div class="p-1 w-100">
        <div class="d-flex flex-row">
            <div class="p-1 w-75">
                <div class="card carousel-inner d-flex flex-column">
                    <div class="p-2 justify-content-center">
                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAFNuP015NIk-rNGVVITOCuwrxml64sGQ-gYQHpdhvvBX1cbQv" alt="病患圖片">
                    </div>
                    <div class="p-2 text-center">
                        <h2>雍有明副木募資</h2>
                    </div>
                    <div class="p-2">
                        <div class="card-group">
                            <div class="card mx-3">
                                <div class="card-body">
                                    <h5 class="card-title">病患故事</h5>
                                </div>
                            </div>
                            <div class="card mx-3">
                                <div class="card-body border">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7-0b9g0Qfgk" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div> 
                    <hr>
                    <div class="p-2">
                        <h5 class="text-center">治療進度</h5>
                        <div class="card bg-light mb-3 mx-3">
                            <div class="card-header">日期</div>
                            <div class="card-body">
                                <h5 class="card-title">標題</h5>
                                <p class="card-text">內容</p>
                            </div>
                        </div>
                        <div class="card bg-light mb-3 mx-3">
                            <div class="card-header">日期</div>
                            <div class="card-body">
                                <h5 class="card-title">標題</h5>
                                <p class="card-text">內容</p>
                            </div>
                        </div>
                        <div class="card bg-light mb-3 mx-3">
                            <div class="card-header">日期</div>
                            <div class="card-body">
                                <h5 class="card-title">標題</h5>
                                <p class="card-text">內容</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="p-1 w-25 text-center justify-content-end">
                <div>
                    <hr>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="text-left">募款進度：100%</h4>
                    <h4 class="text-left">募款金額：$10,000</h4>
                    <h5>目標$10,000</h5>
                </div>
                <hr>
                <button type="button" class="btn btn-outline-info btn-lg btn-block" disabledㄕ>已結束</button>
                <button type="button" class="btn btn-outline-info btn-lg btn-block">追蹤案件</button>
                <button type="button" class="btn btn-outline-info btn-lg btn-block">留言板</button>
                <div class="flex-col text-center justify-content-center">
                    <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="./images/8.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款500元以上</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="./images/S_7726722608306.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款2000元以上</h6>
                            </div>
                        </div>
                    </div>
                    <div class="p-1">
                        <div class="card">
                            <img class="card-img-top" src="./images/S_7726722543771.jpg" alt="專案圖片">
                            <div class="card-body">
                                <h6>捐款5000元以上</h6>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="w-100">
            <div class="card bg-light mb-3">
                <div class="card-header">
                    <div class="d-flex flex-row">
                        <div class="p-1 w-50">
                            <h5 class="mt-2">雍有明的平均花費10,000元</h5>
                        </div>
                        <div class="p-1 w-50">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link text-danger" href="#">費用明細</a></li>
                                    <li class="page-item"><a class="page-link" href="#">診斷</a></li>
                                    <li class="page-item"><a class="page-link" href="#">程序</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-group text-center">
                        <div class="card border-light mx-2">
                            <div class="card-header">醫院費用</div>
                            <div class="card-body">
                                <p class="card-text">$0元</p>
                            </div>
                        </div>
                        <div class="card border-light mx-2">
                            <div class="card-header">醫護人員</div>
                            <div class="card-body">
                                <p class="card-text">$0元</p>
                            </div>
                        </div>
                        <div class="card border-light mx-2">
                            <div class="card-header">藥物治療</div>
                            <div class="card-body">
                                <p class="card-text">$0元</p>
                            </div>
                        </div>
                        <div class="card border-light mx-2">
                            <div class="card-header">交通費用</div>
                            <div class="card-body">
                                <p class="card-text">$0元</p>
                            </div>
                        </div>
                        <div class="card border-light mx-2">
                            <div class="card-header">材料費用</div>
                            <div class="card-body">
                                <p class="card-text">$0元</p>
                            </div>
                        </div>
                        <div class="card border-light mx-2">
                            <div class="card-header">其他費用</div>
                            <div class="card-body">
                                <p class="card-text">$0元</p>
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