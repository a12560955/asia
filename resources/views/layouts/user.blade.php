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
        @show
        
        <nav aria-label="breadcrumb" class="container">
            @yield('breadcrumb')
        </nav>


        <div class="container">
            @yield('content')
        </div>
        
        

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

