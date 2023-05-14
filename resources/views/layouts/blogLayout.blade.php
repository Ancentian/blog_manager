<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Ancentian Developers">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

	
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

	{{-- Sliders --}}
	<link href="{{asset('set/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('set/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('set/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('set/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('set/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	<!-- Template Main CSS File -->
	<link href="{{asset('set/assets/css/style.css')}}" rel="stylesheet">
	
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('set/css/style.css')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
	{{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
	<style>
		<style>
    .social-icons i {
        font-size: 1.5rem;
        margin-right: 0.5rem;
    }
    
    .social-icons i.bi-facebook {
        color: #1877f2;
    }
    
    .social-icons i.bi-twitter {
        color: #1da1f2;
    }
    
    .social-icons i.bi-instagram {
        color: #c13584;
    }
</style>
	</style>
</head>

<body>
	
	<!-- Header Start --> 
	

	
	<!-- Header Close --> 
	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
		  <a href="tel:+254 758 955 488"><i class="bi bi-phone d-flex align-items-center"><span>+254 758 955 488</span></i></a>&nbsp; &nbsp;&nbsp;&nbsp;
			<!-- Facebook icon -->
			<i class="bi bi-facebook d-flex align-items-center"><span class="visually-hidden">Facebook</span></i>&nbsp;	&nbsp;	
			<!-- Twitter icon -->
			<i class="bi bi-twitter d-flex align-items-center"><span class="visually-hidden">Twitter</span></i>&nbsp; &nbsp;
			<!-- Instagram icon -->
			<i class="bi bi-instagram d-flex align-items-center"><span class="visually-hidden">Instagram</span></i>&nbsp; &nbsp;
			<!-- LinkedIn icon -->
			<i class="bi bi-linkedin d-flex align-items-center"><span class="visually-hidden">LinkedIn</span></i>&nbsp; &nbsp;

			<!-- WhatsApp icon -->
			<i class="bi bi-whatsapp d-flex align-items-center"><span class="visually-hidden">WhatsApp</span></i>&nbsp; &nbsp;

		</div>
	  </section>
	  <!-- ======= Header ======= -->
	  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
	
		  <div class="logo me-auto">
			<h1><a href="{{route('blogIndex')}}">Amani</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
		  </div>
	
		  <nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
			  <li><a class="nav-link scrollto active" href="{{route('blogIndex')}}">Home</a></li>
			  <li><a class="nav-link scrollto" href="#about">Portfolio</a></li>
			  <li class="dropdown"><a href="#"><span>BLOGS</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
				  <li><a href="{{route('blogs')}}">Blogs</a></li>
				</ul>
			  </li>
			  <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		  </nav><!-- .navbar -->
	
		</div>
	  </header><!-- End Header -->
		
    @yield('content')
	{!! Toastr::message() !!}

	<!-- ======= Footer ======= -->
	&nbsp;
	
	<footer id="footer">
		<div class="container">
		  <div class="row">
			<div class="col-md-8">
				<h3>Delicious</h3>
		  <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
		  <div class="social-links">
			<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
			<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
			<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
			<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
			<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
		  </div>
		  
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="widget">
					<h3 class="text-capitalize">Subscribe Us</h3>
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
		  </div>
		  <div class="copyright">
			&copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
		  </div>
		  
		  <div class="credits">
			<!-- All the links in the footer should remain intact. -->
			<!-- You can delete the links only if you purchased the pro version. -->
			<!-- Licensing information: https://bootstrapmade.com/license/ -->
			<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		  </div>
		</div>
	  </footer><!-- End Footer -->
	
	  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	
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
		
		<!-- Template Main JS File -->
		<script src="{{asset('set/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('set/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
		<script src="{{asset('set/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
		<script src="{{asset('set/assets/js/main.js')}}"></script>
		
		<script src="{{ asset('set/js/script.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" ></script>
		
	
	</body>
	
	</html>