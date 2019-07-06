<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stuff Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700'" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('frontendjs/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('frontend/js/respond.min.j')}}s"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Stuff</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="blog.html">Blog</a>
									<ul class="dropdown">
										<li><a href="single.html">Blog Single</a></li>
										<li><a href="#">Video</a></li>
										<li><a href="#">Read</a></li>
										<li><a href="#">Lifestyle</a></li>
									</ul>
								</li>
								<li><a href="event.html">Event</a></li>
								<li><a href="travel.html">Travel</a></li>
								<li><a href="about.html">About Me</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{ asset('assets/frontend/images/img_bg_1.jpg') }} )">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
												<span class="cat"><a href="#">Events</a></span>
												<span class="date">20 March 2018</span>
												<span class="pos">By <a href="#">Rich</a></span>
											</p>
					   					<h1>How a website designer began customizing and designing</h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url({{ asset('assets/frontend/images/img_bg_2.jpg')}}">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
												<span class="cat"><a href="#">Events</a></span>
												<span class="date">20 March 2018</span>
												<span class="pos">By <a href="#">Rich</a></span>
											</p>
					   					<h1>How a website designer began customizing and designing</h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url({{ asset('assets/frontend/images/img_bg_3.jpg')}}">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
												<span class="cat"><a href="#">Events</a></span>
												<span class="date">20 March 2018</span>
												<span class="pos">By <a href="#">Rich</a></span>
											</p>
					   					<h1>How a website designer began customizing and designing</h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url({{ asset('assets/frontend/images/img_bg_4.jpg')}}">
			   		<div class="overlay"></div>
			   		<div class="container">
			   			<div class="row">
				   			<div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
				   						<p class="meta">
												<span class="cat"><a href="#">Events</a></span>
												<span class="date">20 March 2018</span>
												<span class="pos">By <a href="#">Rich</a></span>
											</p>
					   					<h1>Top 5 Places To Start Your Vacation This Summer</h1>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-1.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-2.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Read</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-slider">
								<div class="owl-carousel">
									<div class="item">
										<a href="blog.html" class="image-popup-link"><img src="{{asset('assets/frontend/images/blog-3.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
									</div>
									<div class="item">
										<a href="blog.html" class="image-popup-link"><img src="{{asset('assets/frontend/images/blog-4.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
									</div>
								</div>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Travel</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-4.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Lifestyle</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-5.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-6.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-8">
						<div class="blog-entry">
							<div class="blog-img">
								<div class="video colorlib-video" style="background-image: url({{ asset('assets/frontend/images/blog-8.jpg')}}">
									<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play"></i></a>
									<div class="overlay"></div>
								</div>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Watch</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Watch our video how to make website</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-7.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-9.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-10.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-11.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-12.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="blog.html"><img src="{{asset('assets/frontend/images/blog-13.jpg')}}" class="img-responsive" alt="html5 bootstrap template"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="#">Events</a></span>
									<span class="date">20 March 2018</span>
									<span class="pos">By <a href="#">Rich</a></span>
								</p>
								<h2><a href="blog.html">Recipe for your site</a></h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary </p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-instagram">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading text-center">
					<h2>Instagram</h2>
				</div>
			</div>
			<div class="row">
				<div class="instagram-entry">
					<a href="#" class="instagram text-center" style="background-image: url({{asset('assets/frontend/images/gallery-1.jpg')}}">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{asset('assets/frontend/images/gallery-2.jpg')}}>
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{asset('assets/frontend/images/gallery-3.jpg')}}>
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{asset('assets/frontend/images/gallery-4.jpg')}}>
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{asset('assets/frontend/images/gallery-5.jpg')}}>
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{asset('assets/frontend/images/gallery-6.jpg')}}>
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{asset('assets/frontend/images/gallery-7.jpg')}}>
					</a>
					<a href="#" class="instagram text-center" style="background-image: url({{asset('assets/frontend/images/gallery-8.jpg')}}>
					</a>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3">
						<h2>Navigational</h2>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="{{asset('assets/frontend/#')}}'"><i class="icon-check"></i> Home</a></li>
								<li><a href="#"><i class="icon-check"></i> About Me</a></li>
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="#"><i class="icon-check"></i> Travel</a></li>
								<li><a href="#"><i class="icon-check"></i> Lifestyle</a></li>
								<li><a href="#"><i class="icon-check"></i> Fashion</a></li>
								<li><a href="#"><i class="icon-check"></i> Health</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h2>Recent Post</h2>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url({{ asset('assets/frontend/images/blog-1.jpg')}}>
							</a>
							<div class="desc">
								<h3><a href="blog.html">Be a designer</a></h3>
								<p class="admin"><span>25 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url({{ asset('assets/frontend/images/blog-2.jpg')}}>
							</a>
							<div class="desc">
								<h3><a href="blog.html">How to build website</a></h3>
								<p class="admin"><span>24 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url({{ asset('assets/frontend/images/blog-3.jpg')}}>
							</a>
							<div class="desc">
								<h3><a href="blog.html">Create website</a></h3>
								<p class="admin"><span>23 March 2018</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<h2>Archive</h2>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> February 2018</a></li>
								<li><a href="#"><i class="icon-check"></i> January 2018</a></li>
								<li><a href="#"><i class="icon-check"></i> December 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> November 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> October 2017</a></li>
								<li><a href="#"><i class="icon-check"></i> September 2017</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h2>Tags</h2>
						<p class="tags">
							<span><a href="#"><i class="icon-tag"></i> Modeling</a></span>
							<span><a href="#"><i class="icon-tag"></i> Fashion</a></span>
							<span><a href="#"><i class="icon-tag"></i> Life</a></span>
							<span><a href="#"><i class="icon-tag"></i> Blog</a></span>
							<span><a href="#"><i class="icon-tag"></i> Workout</a></span>
							<span><a href="#"><i class="icon-tag"></i> Vacation</a></span>
							<span><a href="#"><i class="icon-tag"></i> Travel</a></span>
							<span><a href="#"><i class="icon-tag"></i> Exercise</a></span>
							<span><a href="#"><i class="icon-tag"></i> Health</a></span>
							<span><a href="#"><i class="icon-tag"></i> News</a></span>
							<span><a href="#"><i class="icon-tag"></i> Model</a></span>
							<span><a href="#"><i class="icon-tag"></i> Women</a></span>
							<span><a href="#"><i class="icon-tag"></i> Animals</a></span>
							<span><a href="#"><i class="icon-tag"></i> Nature</a></span>
							<span><a href="#"><i class="icon-tag"></i> Art</a></span>
							<span><a href="#"><i class="icon-tag"></i> Sea</a></span>
							<span><a href="#"><i class="icon-tag"></i> Ocean</a></span>
							<span><a href="#"><i class="icon-tag"></i> Office</a></span>
							<span><a href="#"><i class="icon-tag"></i> Home</a></span>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>
							<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small> 
							<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('assets/frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('assets/frontend/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('assets/frontend/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/magnific-popup-options.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('assets/frontend/js/main.js')}}"></script>

	</body>
</html>

