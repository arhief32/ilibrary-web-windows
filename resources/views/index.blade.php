@extends('layouts.default')

@section('content')

<!-- <div>
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
</div> -->

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

@stop