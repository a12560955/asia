<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>@yield('title')</title>
    </head>
    <style>
        .carousel .carousel-item {
            height: 250px;
        }
    </style>
    <script>
        $custom-file-text: (
            en: "Browse",
            es: "Elegir",
            zh: "預覽",
            zh-tw: "預覽"
        );
    </script>
    <body class="bg-light">
        @section('nav')
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <img src="./images/asia_logo_s.jpg" height="50" width="50" class="d-inline-block align-top" alt="BV">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">關於我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">最新消息</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">募資計畫</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">產品設計展示</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">會員專區</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="carouse-top container">
                <div id="carouselExampleIndicators" class="carousel slide x-2" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            {{--  圖片大小為1080*720 但圖片會依 開啟網頁使用者之螢幕大小而有改變 詳細請見1080.jpg  --}}
                            {{--  圖片只會顯示到深黃色那部分 但大小依然需要1080*720  --}}
                        <img class="w-100" src="./images/1080.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="w-100" src="./images/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="w-100" src="./images/3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        @show
        
        <nav aria-label="breadcrumb" class="container">
            @yield('breadcrumb')
        </nav>


        <div class="container">
            @yield('content')
        </div>
        
        
        @section('bottom')
            <ul class="nav mb-0 bg-secondary">
                <li class="nav-item">
                        這是底頁
                </li>
            </ul>          
        @show

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

