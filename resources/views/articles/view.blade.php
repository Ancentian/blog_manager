@extends('layouts.master')
@section('content')
<div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">
                        
                        <div class="blog-view">
                            <div class="blog-single-post">
                                <a href="{{route('articles/list')}}" class="back-btn"><i class="feather-chevron-left"></i> Back</a>
                                <div class="blog-image">
                                    <a href="javascript:void(0);"><img alt="" src="{{asset('assets/img/category/blog-detail.jpg')}}" class="img-fluid"></a>
                                </div>
                                <h3 class="blog-title">{{$article->title}}</h3>
                                <div class="blog-info">
                                    <div class="post-list">
                                        <ul>
                                            <li>
                                                <div class="post-author">
                                                    <a href="#"><img src="{{asset('assets/img/profiles/avatar-14.jpg')}}" alt="Post Author"> <span>by Prof. Lester </span></a>
                                                </div>
                                            </li>
                                            <li><i class="feather-clock"></i> Dec 6, 2017</li>
                                            <li><i class="feather-message-square"></i> 40 Comments</li>
                                            <li><i class="feather-grid"></i> Set Theory, Mathematician</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>{{$article->body}}</p>
                                    </div>
                            </div>
                            
                            <div class="card author-widget clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">About Author</h4>
                                </div>
                                <div class="card-body">
                                    <div class="about-author">
                                        <div class="about-author-img">
                                            <div class="author-img-wrap">
                                                <a href="profile.html"><img class="img-fluid" alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                            </div>
                                        </div>
                                        <div class="author-details">
                                            <a href="#" class="blog-author-name">Prof. Darren Elder <span>Biologist, Male, 40 Years Old</span></a>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="card blog-comments">
                                <div class="card-header">
                                    <h4 class="card-title">Comments (5)</h4>
                                </div>
                                <div class="card-body pb-0">
                                    <ul class="comments-list">
                                        <li hidden>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="assets/img/profiles/avatar-13.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-by">
                                                        <h5 class="blog-author-name">Michelle Fairfax <span class="blog-date"> <i class="feather-clock me-1"></i>Dec 6, 2017</span></h5>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <a class="comment-btn" href="#">
                                                        <i class="fa fa-reply me-2"></i> Reply
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="comments-list reply">
                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-author">
                                                            <img class="avatar" alt="" src="assets/img/profiles/avatar-06.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-by">
                                                                <h5 class="blog-author-name">Gina Moore <span class="blog-date"> <i class="feather-clock me-1"></i> 6 Dec 2022</span></h5>
                                                            </div>
                                                            <p>gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur</p>
                                                            <a class="comment-btn" href="#">
                                                                <i class="fa fa-reply me-2"></i> Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-author">
                                                            <img class="avatar" alt="" src="assets/img/profiles/avatar-05.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-by">
                                                                <h5 class="blog-author-name">Carl Kelly <span class="blog-date"> <i class="feather-clock me-1"></i> 7 Dec 2022</span></h5>
                                                            </div>
                                                            <p> pellentesque urna varius vitae, gravida pellentesque urna consectetur adipiscing elit. Nam viverra euismod.</p>
                                                            <a class="comment-btn" href="#">
                                                                <i class="fa fa-reply me-2"></i> Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        @foreach ($comments as $key)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt="" src="{{asset('assets/img/profiles/user.jpg')}}">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-by">
                                                        <h5 class="blog-author-name">{{$key->name}} <span class="blog-date"> <i class="feather-clock me-1"></i> {{$key->created_at}}</span></h5>
                                                    </div>
                                                    <p>{{$key->comment}}</p>
                                                    <a class="comment-btn" href="#">
                                                        <i class="fa fa-reply me-2"></i> Reply
                                                    </a>
                                                    <a class="comment-btn" href="{{url('publish/comment', $key->id)}}">
                                                        <i class="fa fa-reply me-2"></i> Publish
                                                    </a>
                                                </div>
                                            </div>
                                        </li> 
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            
                            
                            <div class="card new-comment clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Leave Comment</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Enter your name">
                                            <label for="floatingInput">Name<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Your Email address<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control bg-grey" placeholder="Comments"></textarea>
                                        </div>
                                        <div class="submit-section">
                                            <button class="submit-btn btn-primary btn-blog" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="card blog-share clearfix">
                                <div class="card-header">
                                    <h4 class="card-title">Share the post</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="social-share">
                                        <li><a href="#"><i class="feather-twitter"></i></a></li>
                                        <li><a href="#"><i class="feather-facebook"></i></a></li>
                                        <li><a href="#"><i class="feather-linkedin"></i></a></li>
                                        <li><a href="#"><i class="feather-instagram"></i></a></li>
                                        <li><a href="#"><i class="feather-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
   @endsection