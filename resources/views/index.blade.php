@extends('layouts.default')

@section('content')

<!-- Product Catagories Area Start -->
<div class="amado-pro-catagory clearfix">
    <div class="single-products-catagory clearfix">
        <a href="{{ route('self-study-chamber') }}">
            <img src="img/bg-img/SC1.png" alt="">
            <div class="hover-content">
                <div class="line"></div>
                 <!-- <p>From $180</p> -->
                <h4 style="color:red;">Mentoring Chamber</h4>
            </div>
        </a>
    </div>
    <div class="single-products-catagory clearfix">
        <a href="{{ route('study-group-chamber') }}">
            <img src="img/bg-img/sc22.jpg" alt="">
            <div class="hover-content">
                <div class="line"></div>
                <!-- <p>From $180</p> -->
                <h4 style="color:red;">Study Group Chamber</h4>
            </div>
        </a>
    </div>
    <div class="single-products-catagory clearfix">
        <a href="{{ route('lesehan') }}">
            <img src="img/bg-img/00003.jpg" alt="">
            <div class="hover-content">
                <div class="line"></div>
                <!-- <p>From $180</p> -->
                <h4 style="color:red;">Lesehan Chamber</h4>
            </div>
        </a>
    </div>
    <div class="single-products-catagory clearfix">
        <a href="{{ route('hall') }}">
            <img src="img/bg-img/00005.jpg" alt="">
            <div class="hover-content">
                <div class="line"></div>
                <!-- <p>From $180</p> -->
                <h4 style="color:red;">Hall</h4>
            </div>
        </a>
    </div>
    <div class="single-products-catagory clearfix">
        <a href="{{ route('reading-room') }}">
            <img src="img/bg-img/sc5.png" alt="">
            <div class="hover-content">
                <div class="line"></div>
                <!-- <p>From $18</p> -->
                <h4 style="color:red;">Reading Chamber</h4>
            </div>
        </a>
    </div>
    <div class="single-products-catagory clearfix">
        <a href="{{ route('refreshment-corner') }}">
            <img src="img/bg-img/sc6.png" alt="">
            <div class="hover-content">
                <div class="line"></div>
                <!-- <p>From $320</p> -->
                <h4 style="color:red;">Refreshment Corner</h4>
            </div>
        </a>
    </div>
</div>

@stop