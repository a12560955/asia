@extends('layouts.base')
@section('title','最新消息')
@section('nav')
@section('news_breadcrumb')
@section('content')
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex flex-row">
                <div class="p-2">
                    <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" height="100" width="150" class="d-inline-block " alt="BV">
                </div>
                <div class="p-2">
                    <div class="d-flex w-50 justify-content-between">
                        <h5 class="mb-1">(標題)我真的很絕望</h5>
                        <small>2018/03/22</small>
                    </div>
                    <p class="mb-1">(內文)~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
                    <small>(誰發布的)</small>
                </div>
            </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex flex-row">
                <div class="p-2">
                    <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" height="100" width="150" class="d-inline-block " alt="BV">
                </div>
                <div class="p-2">
                    <div class="d-flex w-50 justify-content-between">
                        <h5 class="mb-1">(標題)我真的很絕望</h5>
                        <small>2018/03/22</small>
                    </div>
                    <p class="mb-1">(內文)~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
                    <small>(誰發布的)</small>
                </div>
            </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex flex-row">
                <div class="p-2">
                    <img src="http://5b0988e595225.cdn.sohucs.com/images/20170919/397817fa369d4d9e8be5507aed9ccb05.jpeg" height="100" width="150" class="d-inline-block " alt="BV">
                </div>
                <div class="p-2">
                    <div class="d-flex w-50 justify-content-between">
                        <h5 class="mb-1">(標題)我真的很絕望</h5>
                        <small>2018/03/22</small>
                    </div>
                    <p class="mb-1">(內文)~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
                    <small>(誰發布的)</small>
                </div>
            </div>
        </a>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
@section('bottom')