<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>App Name - @yield('title')</title>
    </head>
    <style>
        .nav{
            background-color: #040C0E;
        }
        .nav > li > a{
            color: #BE9063;
        }
        .carousel .carousel-item {
            height: 250px;
        }
 
    </style>

    <body>
        @section('Nav')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" height="50" width="100" class="d-inline-block align-top" alt="BV">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
            </div>
        </nav>



        <ul class="nav justify-content-end nav-pills nav-fill">
            <li class="nav-item">
                <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" height="50" width="100" class="d-inline-block align-top" alt="BV">
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="#">關於我們</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">最新消息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">募資計畫</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">產品設計展示</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">會員專區</a>
            </li>
        </ul>

        <div class="carouse-top">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="http://img06.tooopen.com/images/20170123/tooopen_sy_197476923676.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="http://petonea.com/file//n251/t.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://i.ytimg.com/vi/bLltMkKxmYA/maxresdefault.jpg" alt="Third slide">
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
        


        <div class="container">
            @yield('content')
        </div>
        
        
        @section('bottom')

        @show

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

