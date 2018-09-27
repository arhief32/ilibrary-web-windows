@extends('layouts.default')

@section('content')

<div>
1. TOP FACILITIES
	- Group and Self-Study Chamber
	- Connection to the City Library
	- Digital Space
	- Self-Service Refreshment Corner

		2. PROGRAMS
	- Scholarship Mentorship
	- English Connect
	- Sharing Sessions
	- Educational Exhibition

		3. BENEFITS *free
	- Membership Card
	- Access to most Co-Learning Space Facilities
	- Opportunities *for free scholarship mentorship
</div>





<!-- <section class="carousel slide cid-qBHwCdQuWc" data-interval="false" id="slider2-4" data-rv-view="5725">
    <div class="container content-slider">
        <div class="content-slider-wrap">
            <div>
                <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
                    <div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets2/images/matthew-henry-58760-2000x1333.jpg);">
                        <div class="container container-slide"><div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.2;"></div>
                            <img src="assets2/images/matthew-henry-58760-2000x1333.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-center">
                                    <p class="lead mbr-text mbr-fonts-style display-5">Vivamus fermentum sodales augue et pretium. Sed porttitor velit eget risus tincidunt pulvinar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets2/images/vladislav-muslakov-261627-2000x1333.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.2;"></div>
                            <img src="assets2/images/vladislav-muslakov-261627-2000x1333.jpg">
                                <div class="carousel-caption justify-content-center">
                                    <div class="col-10 align-center">
                                        <p class="lead mbr-text mbr-fonts-style display-5"> Pellentesque metus mi, egestas vitae pharetra id, volutpat non neque.<br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets2/images/david-mao-7091-2000x1333.jpg);">
                        <div class="container container-slide">
                            <div class="image_wrapper">
                                <div class="mbr-overlay" style="opacity: 0.2;"></div>
                                <img src="assets2/images/david-mao-7091-2000x1333.jpg">
                                    <div class="carousel-caption justify-content-center">
                                        <div class="col-10 align-center">
                                            <p class="lead mbr-text mbr-fonts-style display-5">Duis tincidunt vestibulum leo ut feugiat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-4">
                        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-4">
                        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div> 
        </div>
    </div>
</section> -->







<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
    	    <img src="img/bg-img/sc22.jpg" alt="" />
    	    <div class="portfolio_images_overlay text-center">
    		    <h6 class="clrd-font">Mentoring Chamber</h6>
    		    <p class="clrd-font product_price"> <i class="fa clrd-font" aria-hidden="true"></i></p>
    		    <a href="{{ route('self-study-chamber') }}" class="btn btn-primary">Click here</a>
    	    </div>
    	    <a class="fancybox" rel="ligthbox" href="img/bg-img/sc22.jpg">
    		    <div class="zoom"></div>
    	    </a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
    		<img src="img/bg-img/sc22.jpg" alt="" />
    		<div class="portfolio_images_overlay text-center">
    			<h6 class="clrd-font">Study Group Chamber</h6>
    			<p class="clrd-font product_price"> <i class="fa clrd-font" aria-hidden="true"></i></p>
    			<a href="{{ route('study-group-chamber') }}" class="btn btn-primary">Click here</a>
    		</div>
    		<a class="fancybox" rel="ligthbox" href="img/bg-img/sc22.jpg">
    			<div class="zoom"></div>
    		</a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
    		<img src="img/bg-img/00003.jpg" alt="" />
    		<div class="portfolio_images_overlay text-center">
    			<h6 class="clrd-font">Lesehan Chamber</h6>
    			<p class="clrd-font product_price"> <i class="fa clrd-font" aria-hidden="true"></i></p>
    			<a href="{{ route('lesehan') }}" class="btn btn-primary">Click here</a>
    		</div>
    		<a class="fancybox" rel="ligthbox" href="img/bg-img/00003.jpg">
    			<div class="zoom"></div>
    		</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
    		<img src="img/bg-img/00005.jpg" alt="" />
    		<div class="portfolio_images_overlay text-center">
    			<h6 class="clrd-font">Hall</h6>
    			<p class="clrd-font product_price"> <i class="fa clrd-font" aria-hidden="true"></i></p>
    			<a href="#" class="btn btn-primary">Click here</a>
    		</div>
    		<a class="fancybox" rel="ligthbox" href="img/bg-img/00005.jpg">
    			<div class="zoom"></div>
    		</a>
    	</div>


        <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
        	<img src="img/bg-img/sc5.png" alt="" />
        	<div class="portfolio_images_overlay text-center">
        		<h6 class="clrd-font">Reading Chamber</h6>
        		<p class="clrd-font product_price"> <i class="fa clrd-font" aria-hidden="true"></i></p>
        		<a href="{{ route('reading-room') }}" class="btn btn-primary">Click here</a>
        	</div>
        	<a class="fancybox" rel="ligthbox" href="img/bg-img/sc5.png">
        		<div class="zoom"></div>
        	</a>
        </div>
    	<div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text">
    		<img src="img/bg-img/sc6.png" alt="" />
    		<div class="portfolio_images_overlay text-center">
    			<h6 class="clrd-font">Refreshment Corner</h6>
    			<p class="clrd-font product_price"> <i class="fa clrd-font" aria-hidden="true"></i></p>
    			<a href="{{ route('refreshment-corner') }}" class="btn btn-primary">Click here</a>
    		</div>
    		<a class="fancybox" rel="ligthbox" href="img/bg-img/sc6.png">
    			<div class="zoom"></div>
    		</a>
    	</div>
    </div>
</div>












<style>
*{
	padding:0;
	margin:0;
    -webkit-transition: 1s;
    transition: 1s;
}
.clrd-font{
	background: #FF512F;
	background: -webkit-linear-gradient(to right, #F09819, #FF512F);
	background: linear-gradient(to right, #F09819, #FF512F);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}
.btn-primary {
	background-color:transparent;
	color: #fff;
	border: 2px solid #fff;
	font-size:20px;
	text-transform: uppercase;
	border-radius: 0px;	
}
.btn-primary:hover {
	background-color:transparent;
	border-color: #d6962c;
	color: #d6962c;
	border-radius: 20px;
}

.single_portfolio_text{
	display:inline-block;
	padding:0;
	position:relative;
	overflow:hidden;
}
.single_portfolio_text img{
	width:100%;
}

.single_portfolio_text:hover .portfolio_images_overlay{
	top:5%;
	left: 5%;
}

.portfolio_images_overlay{
	width: 90%;
	height: 90%;
	background: rgba(0, 0, 0, 0.8);
	padding: 20px;
	margin: 0 auto;
	top: -100%;
	left: 5%;
	position: absolute;
	transition:.6s;
	
}
.portfolio_images_overlay h6{
	text-transform: uppercase;
	color: #fff;
	font-size: 30px;
	font-weight: 900;
	border: 2px solid #fff;
	padding-top: 10px;
	padding-bottom: 10px;
}

.portfolio_images_overlay .product_price{
	font-size: 35px;
	color: #fff;
	font-weight:800;
	line-height:30px;
}
.portfolio_images_overlay .product_price i{
    margin-right: -10px;
}
.zoom{
	width: 200px;
    height: 200px;
    position: absolute;
    bottom: -100px;
    right: -100px;
    border-radius: 50%;

	background: #FF512F;
	background: -webkit-linear-gradient(to right, #F09819, #FF512F);
	background: linear-gradient(to right, #F09819, #FF512F);
    box-shadow:0px 0px 0px 10px rgba(0,0,0,0.5);
	opacity:0.9;
}
.zoom:before {
	content: "\f00e";
    font-family: FontAwesome;
    color: rgba(255, 255, 255, 0.5);
    font-size: 70px;
    padding-right: 20px;
    position: absolute;
    top: 10px;
    left: 30px;
}
@media (min-width:769px) and (max-width:991px) {
	.portfolio_images_overlay {
		padding: 0px;
	}
}
@media (max-width:768px) {
	.portfolio_images_overlay{
		padding: 170px 20px;
	}
}
@media (max-width:580px) {
	.portfolio_images_overlay{
		padding: 100px 20px;
	}
}
@media (max-width:480px) {
	.portfolio_images_overlay{
		padding: 40px 20px;
	}
}
@media (max-width:320px) {
	.portfolio_images_overlay{
		padding: 20px;
	}
}
</style>

<!-- <script>
$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script> -->

@stop