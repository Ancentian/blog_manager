@extends('layouts.blogLayout')
@section('content')

<div class="main-wrapper ">
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{asset('set/assets/img/slide/fitlady.jpeg')}});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Unlock Your</span> Full Power</h2>
                <p class="animate__animated animate__fadeInUp">Embrace Your Inner Strength! Join our fitness revolution and sculpt the body of your dreams. Dive into our invigorating fitness section for some workout tips and exhilarating workouts. Get ready to break a sweat and unlock your full potential. <a href="{{ route('blogs') }}">Click Here</a> to ignite your fitness journey now!</p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url({{asset('set/assets/img/slide/apple.jpeg')}});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Unlock</span> Optimal Health! </h2>
                <p class="animate__animated animate__fadeInUp">Discover our health section's treasure trove of invaluable insights and practical advice. Explore a world of wellness where vibrant living and longevity await. From nutrition tips to holistic approaches, we've got you covered. <a href="{{ route('blogs') }}">Click Here</a> to take charge of your well-being today and embark on a journey towards a healthier, happier you!</p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url({{ asset('set/assets/img/slide/mind.jpeg') }});">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Nurture</span> Your Soul!</h2>
                <p class="animate__animated animate__fadeInUp">Elevate Your Mind, Nurture Your Soul! Step into our sanctuary of mental wellness, where tranquility and self-discovery intertwine. Uncover the secrets to cultivating inner peace, reducing stress, and embracing mindfulness. <a href="{{ route('blogs') }}">Click Here</a> to begin your transformative journey today and embark on a path towards balance and serenity.</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
<!-- Section Intro Start -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
	<div class="container-fluid">

	  <div class="row">

		<div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{asset('set/assets/img/gymrope.jpeg')}}");'>
		  {{-- <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
		</div>

		<div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

		  <div class="content">
			<h3><strong>HELLO & WELCOME</strong></h3>
			<p>We’re thrilled to have you here and can't wait to share the passion for health, fitness, and wellness with you! Whether you're struggling to lose weight, looking to enhance your fitness routine, or simply seeking a healthier lifestyle, this blog is here to help.</p>
				<p>Head over to the BLOG to find out more, and feel free to leave your comments and feedback. TOGETHER, let's make health, fitness, and wellness a part of our daily lives!</p>
			{{-- <ul>
			  <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
			  <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
			  <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
			</ul>  --}}
			
		  </div>

		</div>

	  </div>

	</div>
  </section><!-- End About Section -->


<!-- Section Intro END -->
<!-- Section About Start -->

<section class="section about position-relative" hidden>
	<div class="bg-about"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6 offset-md-0">
				<div class="about-item ">
					<span class="h6 text-color">What we are</span>
					<h2 class="mt-3 mb-4 position-relative content-title">We are dynamic team of creative people</h2>
					<div class="about-content">
						<h4 class="mb-3 position-relative">We are Perfect Solution</h4>
						<p class="mb-5">We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.</p>

						<a href="#" class="btn btn-main btn-round-full">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
&nbsp;
<!-- Section About End -->
<section class="section latest-blog bg-2" >
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Articles</span>
					<h2 class="content-title text-white">Latest Articles</h2>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			@foreach($articles as $article)
			<div class="col-lg-4 col-md-6">
				<div class="card bg-transparent border-0">
					<img src="{{ Storage::url('blog_photos/'.$article->upload) }}" style="height: 220px" alt="" class="img-fluid rounded">

					<div class="card-body ">
						<div class="blog-item-meta">
							<a href="#" class="text-white-50">{{ $article->tag_name}}<span class="ml-2 mr-2">/</span></a>
							
							<a href="#" class="text-white-50 ml-2"><i class="fa fa-user mr-2"></i>{{$article->author}}</a>
						</div> 
						<h3 class="mt-3 mb-5 lh-36"><a href="#" class="text-white ">{{$article->title}}</a></h3>
						<a href="{{ url('singleBlog/'. $article->id) }}" class="btn btn-small btn-solid-border btn-round-full text-white">Learn More</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials" hidden>
		<div class="container position-relative">
  
		  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
			<div class="swiper-wrapper">
  
			  <div class="swiper-slide">
				<div class="testimonial-item">
				  <img src="{{asset('set/assets/img/user.jpg')}}" class="testimonial-img" alt="">
				  <h3>Saul Goodman</h3>
				  <h4>Ceo &amp; Founder</h4>
				  <div class="stars">
					<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
				  </div>
				  <p>
					<i class="bx bxs-quote-alt-left quote-icon-left"></i>
					Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
					<i class="bx bxs-quote-alt-right quote-icon-right"></i>
				  </p>
				</div>
			  </div><!-- End testimonial item -->
  
			  <div class="swiper-slide">
				<div class="testimonial-item">
				  <img src="{{asset('set/assets/img/user.jpg')}}" class="testimonial-img" alt="">
				  <h3>Sara Wilsson</h3>
				  <h4>Designer</h4>
				  <div class="stars">
					<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
				  </div>
				  <p>
					<i class="bx bxs-quote-alt-left quote-icon-left"></i>
					Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
					<i class="bx bxs-quote-alt-right quote-icon-right"></i>
				  </p>
				</div>
			  </div><!-- End testimonial item -->
  
			  <div class="swiper-slide">
				<div class="testimonial-item">
				  <img src="{{asset('set/assets/img/user.jpg')}}" class="testimonial-img" alt="">
				  <h3>Jena Karlis</h3>
				  <h4>Store Owner</h4>
				  <div class="stars">
					<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
				  </div>
				  <p>
					<i class="bx bxs-quote-alt-left quote-icon-left"></i>
					Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
					<i class="bx bxs-quote-alt-right quote-icon-right"></i>
				  </p>
				</div>
			  </div><!-- End testimonial item -->
  
			  <div class="swiper-slide">
				<div class="testimonial-item">
				  <img src="{{asset('set/assets/img/user.jpg')}}" class="testimonial-img" alt="">
				  <h3>Matt Brandon</h3>
				  <h4>Freelancer</h4>
				  <div class="stars">
					<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
				  </div>
				  <p>
					<i class="bx bxs-quote-alt-left quote-icon-left"></i>
					Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
					<i class="bx bxs-quote-alt-right quote-icon-right"></i>
				  </p>
				</div>
			  </div><!-- End testimonial item -->
  
			  <div class="swiper-slide">
				<div class="testimonial-item">
				  <img src="{{asset('set/assets/img/user.jpg')}}" class="testimonial-img" alt="">
				  <h3>John Larson</h3>
				  <h4>Entrepreneur</h4>
				  <div class="stars">
					<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
				  </div>
				  <p>
					<i class="bx bxs-quote-alt-left quote-icon-left"></i>
					Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
					<i class="bx bxs-quote-alt-right quote-icon-right"></i>
				  </p>
				</div>
			  </div><!-- End testimonial item -->
  
			</div>
			<div class="swiper-pagination"></div>
		  </div>
  
		</div>
	  </section>
	  <!-- End Testimonials Section -->

@endsection