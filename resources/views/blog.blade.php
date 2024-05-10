﻿@extends('layout')
@section('content')
    </head>

    <body>
        <x-media-card/>

        <x-nav-card />

        <section class="hero-wrap hero-wrap-2" style="background-image: url({{('images/bg_3.jpg')}});"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 text-center">
                        <h1 class="mb-3 bread">Read our blog</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i
                                        class="fa fa-chevron-right"></i></a></span> <span>Blog <i
                                    class="fa fa-chevron-right"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="{{route('blog-single')}}" class="block-20"
                                style="background-image: url({{('images/image_1.jpg')}});">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day">29</span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr">2020</span>
                                        <span class="mos">June</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="{{route('blog-single')}}" class="block-20"
                                style="background-image: url({{('images/image_2.jpg')}});">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day">29</span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr">2020</span>
                                        <span class="mos">June</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry">
                            <a href="{{route('blog-single')}}" class="block-20"
                                style="background-image: url({{('images/image_3.jpg')}});">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day">29</span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr">2020</span>
                                        <span class="mos">June</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="{{route('blog-single')}}" class="block-20"
                                style="background-image: url({{('images/image_4.jpg')}});">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day">29</span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr">2020</span>
                                        <span class="mos">June</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="{{route('blog-single')}}" class="block-20"
                                style="background-image: url({{('images/image_5.jpg')}});">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day">29</span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr">2020</span>
                                        <span class="mos">June</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry">
                            <a href="{{route('blog-single')}}" class="block-20"
                                style="background-image: url({{('images/image_6.jpg')}});">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center pt-2 mb-4 topp">
                                    <div class="one">
                                        <span class="day">29</span>
                                    </div>
                                    <div class="two pl-1">
                                        <span class="yr">2020</span>
                                        <span class="mos">June</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="{{route('blog-single')}}">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="{{route('blog-single')}}">2</a></li>
                                <li><a href="{{route('blog-single')}}">3</a></li>
                                <li><a href="{{route('blog-single')}}">4</a></li>
                                <li><a href="{{route('blog-single')}}">5</a></li>
                                <li><a href="{{route('blog-single')}}">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <x-footer-card/>
@endsection
