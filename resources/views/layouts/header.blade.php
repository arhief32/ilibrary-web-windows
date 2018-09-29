<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

<!-- Mobile Nav (max width 767px)-->
<div class="mobile-nav">
    <!-- Navbar Brand -->
    <div class="amado-navbar-brand">
        <a href="{{ route('home') }}"><img src="img/core-img/home.png" alt=""></a>
    </div>
    <!-- Navbar Toggler -->
    <div class="amado-navbar-toggler">
        <span></span><span></span><span></span>
    </div>
</div>

<!-- Header Area Start -->
<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <a href="{{ route('home') }}"><img src="img/core-img/home.png" alt=""></a>
    </div>

    <!-- Button Group -->
    <div class="amado-btn-group mt-30 mb-100">
        <a href="#" class="btn amado-btn mb-15" id="button-login" data-toggle="modal" data-target="#myModalLogin">Login</a>
        <a href="#" class="btn amado-btn mb-15" id="button-register" data-toggle="modal" data-target="#myModalRegister">Register</a>
        
    </div>

    <!-- Amado Nav -->
    <nav class="amado-nav">
        <ul>
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('booking') }}">Booking</a></li>
            <li><a href="{{ route('schedule') }}">Schedule</a></li>
        </ul>
    </nav>

    <!-- Button Group -->
    <div class="amado-btn-group mt-30 mb-100">
        <a href="#" class="btn amado-btn mb-15">PROMO</a>
    </div>
    
    <!-- Social Button -->
    <div class="social-info d-flex justify-content-between">
        <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
</header>
<!-- Header Area End -->

<div class="single-product-area section-padding-50 clearfix" style="margin-bottom: 100px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-50">
                        <div class="row">
                        <div class="col-md-3"><li style="text-align: center;"><a href="#" class="btn amado-btn" style="margin-right: 15px; margin-top:15; width: 250px;">New this week</a></li></div>
                        <div class="col-md-3"><li style="text-align: center;"><a href="#" class="btn amado-btn" style="margin-right: 15px; margin-top:15; width: 250px;">Weekly Programs</a></li></div>
                        <div class="col-md-3"><li style="text-align: center;"><a href="#" class="btn amado-btn" style="margin-right: 15px; margin-top:15; width: 250px;">Monthly Programs</a></li></div>
                        <div class="col-md-3"><li style="text-align: center;"><a href="#" class="btn amado-btn" style="margin-right: 15px; margin-top:15; width: 250px;">Annual Event</a></li></div>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>


<div class="slider-text">
	<div class="arrows-text">
	    <a class="previous-text" href="#">&#xf053;</a>
	    <a class="next-text" href="#">&#xf054;</a>
	</div>
	    <div class="slides-text">
			<div class="slide-text active blue" data-icon="&#xf0ac;">
				<h2>TOP FACILITIES</h2>
				<div class="text-slider"> Group and Self-Study Chamber <br>
	            Connection to the City Library <br>
	            Digital Space <br>
	            Self-Service Refreshment Corner</div>
				<!-- <a target="_blank" href="https://itunes.apple.com/gb/app/clocks+/id937380413?mt=8">Check me out</a> -->
			</div>
			<div class="slide-text white" data-icon="&#xf0f3;">
				<h2>PROGRAMS</h2>
				<div class="text-slider">Scholarship Mentorship<br>
	            English Connect<br>
	            Sharing Sessions<br>
	            Educational Exhibition</div>
			</div>
			<div class="slide-text red" data-icon="&#xf013;">
				<h2>BENEFITS *Free</h2>
				<div class="text-slider">Membership Card<br>
	            Access to most Co-Learning Space Facilities<br>
                Opportunities *for free scholarship mentorship
                </div>
            </div>
		</div>
		<div class="bullets-text">
		</div>
    </div>
</div>

<!-- Modal Login-->
<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Login</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input type="text" class="form-control" id="username-login">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password-login">
                </div>
            </div>
            <div class="modal-footer align-middle">
                <button type="button" class="btn amado-btn mb-15 active" data-dismiss="modal">Close</button>
                <button type="button" class="btn amado-btn mb-15" id="btn-login">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Register-->
<div class="modal fade" id="myModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Register</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input type="text" class="form-control" id="email-register">
                </div>
                <div class="form-group">
                    <label for="usr">Username:</label>
                    <input type="text" class="form-control" id="username-register">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password-register">
                </div>
            </div>
            <div class="modal-footer align-middle">
                <button type="button" class="btn amado-btn mb-15 active" data-dismiss="modal">Close</button>
                <button type="button" class="btn amado-btn mb-15" id="btn-register">Save changes</button>
            </div>
        </div>
    </div>
</div>
