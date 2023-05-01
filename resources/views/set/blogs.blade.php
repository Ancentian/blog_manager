@extends('layouts.blogLayout')
@section('content')
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
										<p class="mb-4">{!! Str::limit($article->excerpt, 110, '...') !!}</p>
										
										<a href="{{ url('singleBlog/'.$article->id) }}" class="btn btn-small btn-main btn-round-full">Read More</a>
									</div>
								</div>
							</div>
							@endforeach
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
								
								@foreach($blogs as $article)
								<div class="media border-bottom py-3">
									<a href="#"><img class="mr-4" style="height: 75px; width: 87px" src="{{ Storage::url('blog_photos/'.$article->upload) }}" alt=""></a>
									<div class="media-body">
										<h6 class="my-2"><a href="{{ url('singleBlog/'.$article->id) }}">{{$article->title}}</a></h6>
										<span class="text-sm text-muted">{{$article->created_at->diffForHumans()}}</span>
									</div>
								</div>
								@endforeach
							</div>
							
							<div class="sidebar-widget bg-white rounded tags p-4 mb-3">
								<h5 class="mb-4">Tags</h5>
								
								@foreach($tags as $tag)
								<a href="{{ url('blogsByCategory/'.$tag->id) }}">{{$tag->tag_name}}</a>
								@endforeach
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
		
		@endsection