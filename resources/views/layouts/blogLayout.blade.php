<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
	
	<meta name="author" content="">
	
	<title>Amani</title>
	
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{ asset('set/plugins/bootstrap/css/bootstrap.min.css')}}">
	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"  crossorigin="anonymous">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="{{ asset('set/plugins/themify/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('set/plugins/fontawesome/css/all.css')}}">
	<link rel="stylesheet" href="{{ asset('set/plugins/magnific-popup/dist/magnific-popup.css')}}">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{ asset('set/plugins/slick-carousel/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('set/plugins/slick-carousel/slick/slick-theme.css')}}">
	
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('set/css/style.css')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
	{{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
</head>

<body>
	
	<!-- Header Start --> 
	
	<header class="navigation">
		<div class="header-top ">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-2 col-md-4">
						<div class="header-top-socials text-center text-lg-left text-md-left">
							<a href="#" target="_blank"><i class="ti-facebook"></i></a>
							<a href="#" target="_blank"><i class="ti-twitter"></i></a>
							<a href="#" target="_blank"><i class="ti-github"></i></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
						<div class="header-top-info">
							<a href="tel:+23-345-67890">Call Us : <span>+254-345-67890</span></a>
							<a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg  py-4" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="#">
					Amani<span>kit.</span>
				</a>
				
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>
				
				<div class="collapse navbar-collapse text-center" id="navbarsExample09">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{route('blogIndex')}}">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown" hidden>
							<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
							<ul class="dropdown-menu" aria-labelledby="dropdown03">
								<li><a class="dropdown-item" href="about.html">Our company</a></li>
								<li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
							<ul class="dropdown-menu" aria-labelledby="dropdown05">
								<li><a class="dropdown-item" href="{{route('blogs')}}">Blogs</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
	
	<!-- Header Close --> 
		
    @yield('content')
	{!! Toastr::message() !!}

    <!-- footer Start -->
		<footer class="footer section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="widget">
							<h4 class="text-capitalize mb-4">Company</h4>
							
							<ul class="list-unstyled footer-menu lh-35">
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="widget">
							<h4 class="text-capitalize mb-4">Quick Links</h4>
							
							<ul class="list-unstyled footer-menu lh-35">
								<li><a href="#">About</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Team</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="widget">
							<h4 class="text-capitalize mb-4">Subscribe Us</h4>
							<p>Subscribe to get latest news article and resources  </p>
							
							<form action="{{route('storeSubscriber')}}" class="sub-form" method="POST">
								@csrf
								<input type="email" name="email" class="form-control mb-3 @error('email') is-invalid @enderror" placeholder="Subscribe Now ...">
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
								<button type="submit" class="btn btn-main btn-small">Subscribe</button>
								{{-- <a href="#" class="">subscribe</a> --}}
							</form>                                           
						</div>
					</div>
					
					<div class="col-lg-3 ml-auto col-sm-6">
						<div class="widget">
							<div class="logo mb-4">
								<h3>Amani<span>kit.</span></h3>
							</div>
							<h6><a href="tel:+23-345-67890" >Support@megakit.com</a></h6>
							<a href="mailto:support@gmail.com"><span class="text-color h4">+254-456-6588</span></a>
						</div>
					</div>
				</div>
				
				<div class="footer-btm pt-4">
					<div class="row">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="copyright">
								&copy; Copyright <span class="text-color">Ancent</span> to <a href="#" target="_blank">Amani</a>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="copyright">
								<a href="#" target="_blank"></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
							<ul class="list-inline footer-socials">
								<li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i>Facebook</a></li>
								<li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i>Twitter</a></li>
								<li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	</div>
	
	<!-- 
		Essential Scripts
		=====================================-->
		
		
		<!-- Main jQuery -->
		<script src="{{ asset('set/plugins/jquery/jquery.js')}}"></script>
		<script src="{{ asset('set/js/contact.js')}}"></script>
		<!-- Bootstrap 4.3.1 -->
		<script src="{{ asset('set/plugins/bootstrap/js/popper.js')}}"></script>
		<script src="{{ asset('set/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<!--  Magnific Popup-->
		<script src="{{ asset('set/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
		<!-- Slick Slider -->
		<script src="{{ asset('set/plugins/slick-carousel/slick/slick.min.js')}}"></script>
		<!-- Counterup -->
		<script src="{{ asset('set/plugins/counterup/jquery.waypoints.min.js')}}"></script>
		<script src="{{ asset('set/plugins/counterup/jquery.counterup.min.js')}}"></script>
		
		<!-- Google Map -->
		<script src="{{ asset('set/plugins/google-map/map.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
		
		<script src="{{ asset('set/js/script.js')}}"></script><script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
		
	</body>
	</html>