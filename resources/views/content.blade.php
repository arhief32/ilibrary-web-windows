@extends('layouts.default')

@section('content')

<!-- Product Details Area Start -->
    <div class="single-product-area section-padding-20 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($images as $image)
                                    <li 
                                        data-target="#product_details_slider" 
                                        data-slide-to="{{ $image['number'] }}" 
                                        style="background-image: url({{ $image['image'] }});">
                                    </li>
                                @endforeach
                                
                            </ol>
                            <div class="carousel-inner">
                                @foreach($images as $image)
                                    <div class="carousel-item {{ $image['status'] }}">
                                        <a class="gallery_img" href="{{ $image['image'] }}">
                                            <img class="d-block w-100" src="{{ $image['image'] }}" alt="{{ $image['spell'] }} slide">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_product_desc">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">Rp {{ $price }},-</p>
                            <a href="#">
                                <h6>{{ $title }}</h6>
                            </a>
                            <!-- Ratings & Review -->
                            <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="review">
                                    <a href="#">Write A Review</a>
                                </div>
                            </div>
                            <!-- Avaiable -->
                            <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                        </div>
                        <div class="short_overview my-5">
                            <p>{{ $text }}</p>
                        </div>
                        <!-- Add to Cart Form -->
                        <div class="cart clearfix">
                            <div class="cart-btn d-flex mb-50">
                                <p>Day(s)</p>
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <button id="booking_button" class="btn amado-btn">BOOKING !</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Area End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- !INMPORTANT - INI JANGAN DIHAPUS BUAT TEST JQUERY DI BOOKINGNYA -->
<script>
$(document).ready(function(){
    $('#booking_button').click(function(){
        var days = $('#qty').val();
        console.log(days);
    });
});
</script>

@stop
