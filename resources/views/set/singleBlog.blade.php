@extends('layouts.blogLayout')
@section('content')
	
	<div class="main-wrapper ">
		<section class="page-title bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block text-center">
							<span class="text-white">News details</span>
							<h1 class="text-capitalize mb-4 text-lg">{{$article->title}}</h1>
							<ul class="list-inline">
								<li class="list-inline-item"><a href="{{route('blogIndex')}}" class="text-white">Home</a></li>
								<li class="list-inline-item"><span class="text-white">/</span></li>
								<li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
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
							<a href="#" class="social-icon">
								<i class="fab fa-facebook"></i>
							  </a>	
							  <a href="#" class="social-icon">
								<i class="fab fa-twitter"></i>
							  </a>	
							  <a href="#" class="social-icon">
								<i class="fab fa-instagram"></i>
							  </a>	
							  <a href="#" class="social-icon">
								<i class="fab fa-linkedin-in"></i>
							  </a>	
							  <a href="#" class="social-icon">
								<i class="fab fa-whatsapp"></i>
							  </a>							  
							<div class="col-lg-12 mb-5">
								<div class="single-blog-item">
									<img src="{{ Storage::url('blog_photos/'.$article->upload) }}" style="width: 690px; height: 470;" alt="" class="img-fluid rounded">
									
									<div class="blog-item-content bg-white p-5">
										<div class="blog-item-meta bg-gray py-1 px-2">
											<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{$article->tag_name}}</span>
											<span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
											{{-- @php
												$date = $article->created_at;
												$date = Carbon::parse($date); // now date is a carbon instance
												$elapsed = $date->diffForHumans(Carbon::now());
											@endphp --}}
											<span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> </span>
										</div> 
										
										<h2 class="mt-3 mb-4"><a href="blog-single.html">Improve design with typography?</a></h2>
										<p class="lead mb-4">{!! $article->introduction !!}</p>
										
										<p>{!! $article->body !!}</p>
										
										<!-- <h3 class="quote">{{$article->excerpt}}</h3> -->
										<div class="sc-brians-take alert alert-info info-box-main">
											<figure class="sc-picture pull-xs-left">
												<img class="lazyload" decoding="async" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" data-src="#" alt="Frankie-Caruso" width="94" height="94">
												<noscript>
													<img class="lazyload" decoding="async" src="#" alt="Frankie-Caruso" width="94" height="94">
												</noscript>
											</figure>
											<p>
												<cite class="sc-title"><br>{{$article->author}}'s Take:<br></cite>
											</p>
											<p class="custom-p">{!!$article->excerpt!!}</p>
										</div>
										
										<p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically.</p>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto expedita sapiente.</p>
										
										<div class="tag-option mt-5 clearfix">
											<ul class="float-left list-inline"> 
												<li>Tags:</li> 
												@foreach($tags as $tag)
												<li class="list-inline-item"><a href="{{ url('blogsByCategory/'.$tag->id) }}" rel="tag">{{$tag->tag_name}}</a></li>|
												@endforeach
											</ul>        
											
											<ul class="float-right list-inline">
												<li class="list-inline-item">
													<a href="#" class="social-icon" style="background-color: #3b5998;">
													  <i class="fab fa-facebook" style="color: #fff;"></i>
													</a>
												  </li>
												  <li class="list-inline-item">
													<a href="#" class="social-icon" style="background-color: #1da1f2;">
													  <i class="fab fa-twitter" style="color: #fff;"></i>
													</a>
												  </li>
												  <li class="list-inline-item">
													<a href="#" class="social-icon" style="background-color: #c32aa3;">
													  <i class="fab fa-instagram" style="color: #fff;"></i>
													</a>
												  </li>
												  <li class="list-inline-item"><a href="#" class="social-icon" style="background-color: #0e76a8;"><i class="fab fa-linkedin-in" style="color: #fff;"></i></a></li>
												  <li class="list-inline-item">
													<a href="#" class="social-icon" style="background-color: #25D366;">
													  <i class="fab fa-whatsapp" style="color: #fff;"></i>
													</a>
												  </li>	  
											</ul>
										</div>
									</div>
								</div>
							</div>							
							<div class="col-lg-12 mb-5" hidden>
								<div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">
									<a class="post-prev align-items-center" href="#">
										<div class="posts-prev-item mb-4 mb-lg-0">
											<span class="nav-posts-desc text-color">- Previous Post</span>
											<h6 class="nav-posts-title mt-1">
												Donec consectetuer ligula <br>vulputate sem tristique.
											</h6>
										</div>
									</a>
									<div class="border"></div>
									<a class="posts-next" href="#">
										<div class="posts-next-item pt-4 pt-lg-0">
											<span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>
											<h6 class="nav-posts-title mt-1">
												Ut aliquam sollicitudin leo.
											</h6>
										</div>
									</a>
								</div>
							</div>
							
							<div class="col-lg-12 mb-5">
								<div class="comment-area card border-0 p-5">
									<h4 class="mb-4">2 Comments</h4>
									<ul class="comment-tree list-unstyled">
										@foreach($comments as $comment)
										@if ($comment->status == 1)
										<li class="mb-5">
											<div class="comment-area-box">
												<img alt="" src="{{asset('set/images/blog/user.jpg')}}" style="height: 40px; width: 40px; border-radius: 50%;" class="img-fluid float-left mr-3 mt-2">												
												<h5 class="mb-1">{{$comment->name}}</h5>
												<span>Nairobi, Kenya</span>
												
												<div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
													<a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
													<span class="date-comm">Posted {{$comment->created_at}} </span>
												</div>
												
												<div class="comment-content mt-3">
													<p>{{$comment->comment}} </p>
												</div>
											</div>
										</li>		
										@else
											
										@endif
										@endforeach
									</ul>
								</div>
							</div>
							
							<div class="col-lg-12">
								<form action="{{route('storeComment')}}" method="POST">
									@csrf
									<h4 class="mb-4">Write a comment</h4>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group" hidden>
												<input class="form-control" type="text" name="article_id" value="{{$article->id}}">
											</div>
											<div class="form-group">
												<input class="form-control" type="text" name="name" id="name" placeholder="Name:">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="email" name="email" id="mail" placeholder="Email:">
											</div>
										</div>
									</div>
									<textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>
									<input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
								</form>
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
								@foreach($articles as $article)
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
								<a href="{{ url('blogsByCategory/'.$tag->id) }}">{{$tag->tag_name }}</a> 
								@endforeach
							</div>
						</div>
					</div>   
				</div>
			</div>
		</section>	
	@endsection	