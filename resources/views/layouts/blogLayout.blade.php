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
			  <li class="dropdown"><a href="#"><span>Blogs</span> <i class="bi bi-chevron-down"></i></a>
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
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		
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
		
		<!-- Template Main JS File -->
		<script src="{{asset('set/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('set/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
		<script src="{{asset('set/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
		<script src="{{asset('set/assets/js/main.js')}}"></script>
		
		<script src="{{ asset('set/js/script.js')}}"></script><script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
		
	</body>
	</html>