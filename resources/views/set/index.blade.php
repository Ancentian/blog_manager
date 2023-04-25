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
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('set/plugins/themify/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('set/plugins/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('set/plugins/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('set/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('set/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('set/css/style.css')}}">

</head>

<body>

<!-- Header Start --> 

<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
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
				<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
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
						<li><a class="dropdown-item" href="{{route('blog')}}">Blogs</a></li>
					</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
			</ul>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="{{route('contact')}}" class="btn btn-solid-border btn-round-full">Get a Quote</a>
			</form>
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                @foreach($articles as $article)
	<div class="col-lg-6 col-md-6 mb-5">
		<div class="blog-item">
			<img src="{{ Storage::url('blog_photos/'.$article->upload) }}" style="height: 225px; width: 348px;" alt="" class="img-fluid rounded">

			<div class="blog-item-content bg-white p-4">
				<div class="blog-item-meta  py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
				</div> 

				<h3 class="mt-3 mb-3"><a href="{{ url('singleBlog/'.$article->id) }}">{{$article->title}}</a></h3>
				<p class="mb-4">{{$article->excerpt}}</p>

				<a href="{{ url('singleBlog/'.$article->id) }}" class="btn btn-small btn-main btn-round-full">Read More</a>
			</div>
		</div>
	</div>
	@endforeach

	<div class="col-lg-6 col-md-6 mb-5">
		<div class="blog-item">
			<img src="{{asset('set/images/blog/2.jpg')}}" alt="" class="img-fluid rounded">

			<div class="blog-item-content bg-white p-4">
				<div class="blog-item-meta py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Design</span>
				</div>   

				<h3 class="mt-3 mb-3"><a href="blog-single.html">Interactivity connect consumer</a></h3>
				<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

				<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 mb-5">
		<div class="blog-item">
			<img src="{{asset('set/images/blog/3.jpg')}}" alt="" class="img-fluid rounded">

			<div class="blog-item-content bg-white p-4">
				<div class="blog-item-meta py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Community</span>
				</div>  

				<h3 class="mt-3 mb-3"><a href="blog-single.html">Marketing Strategy to bring more affect</a></h3>
				<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

				<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 mb-5">
		<div class="blog-item">
			<img src="{{asset('set/images/blog/4.jpg')}}" alt="" class="img-fluid rounded">

			<div class="blog-item-content bg-white p-4">
				<div class="blog-item-meta py-1 px-2">
					<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Marketing</span>
				</div>  

				<h3 class="mt-3 mb-3"><a href="blog-single.html">Marketing Strategy to bring more affect</a></h3>
				<p class="mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p>

				<a href="blog-single.html" class="btn btn-small btn-main btn-round-full">Learn More</a>
			</div>
		</div>
	</div>
</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap">
	<div class="sidebar-widget search card p-4 mb-3 border-0">
		<input type="text" class="form-control" placeholder="search">
		<a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
	</div>

	<div class="sidebar-widget card border-0 mb-3" hidden>
		<img src="{{asset('set/images/blog/blog-author.jpg')}}" alt="" class="img-fluid">
		<div class="card-body p-4 text-center">
			<h5 class="mb-0 mt-4">Arther Conal</h5>
			<p>Digital Marketer</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

			<ul class="list-inline author-socials">
				<li class="list-inline-item mr-3">
					<a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
				</li>
				<li class="list-inline-item mr-3">
					<a href="#"><i class="fab fa-twitter text-muted"></i></a>
				</li>
				<li class="list-inline-item mr-3">
					<a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
				</li>
				<li class="list-inline-item mr-3">
					<a href="#"><i class="fab fa-pinterest text-muted"></i></a>
				</li>
				<li class="list-inline-item mr-3">
					<a href="#"><i class="fab fa-behance text-muted"></i></a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
		<h5>Latest Posts</h5>

        <div class="media border-bottom py-3">
            <a href="#"><img class="mr-4" src="{{asset('set/images/blog/bt-3.jpg')}}" alt=""></a>
            <div class="media-body">
                <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
                <span class="text-sm text-muted">03 Mar 2018</span>
            </div>
        </div>

        <div class="media border-bottom py-3">
            <a href="#"><img class="mr-4" src="{{asset('set/images/blog/bt-2.jpg')}}" alt=""></a>
           <div class="media-body">
                <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
                <span class="text-sm text-muted">03 Mar 2018</span>
            </div>
        </div>

        <div class="media py-3">
            <a href="#"><img class="mr-4" src="{{asset('set/images/blog/bt-1.jpg')}}" alt=""></a>
            <div class="media-body">
                <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
                <span class="text-sm text-muted">03 Mar 2018</span>
            </div>
        </div>
	</div>

	<div class="sidebar-widget bg-white rounded tags p-4 mb-3">
		<h5 class="mb-4">Tags</h5>

		<a href="#">Web</a>
		<a href="#">agency</a>
		<a href="#">company</a>
		<a href="#">creative</a>
		<a href="#">html</a>
		<a href="#">Marketing</a>
		<a href="#">Social Media</a>
		<a href="#">Branding</a>
	</div>
</div>
            </div>   
        </div>

        <div class="row mt-5">
            <div class="col-lg-8">
                <nav class="navigation pagination py-2 d-inline-block">
                    <div class="nav-links">
                        <a class="prev page-numbers" href="#">Prev</a>
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

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

					<form action="#" class="sub-form">
						<input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
						<a href="#" class="btn btn-main btn-small">subscribe</a>
					</form>
				</div>
			</div>

			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3>Amani<span>kit.</span></h3>
					</div>
					<h6><a href="tel:+23-345-67890" >Support@megakit.com</a></h6>
					<a href="mailto:support@gmail.com"><span class="text-color h4">+23-456-6588</span></a>
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
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i>Twitter</a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
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
    
    <script src="{{ asset('set/js/script.js')}}"></script>

  </body>
  </html>