<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/fav.png">

    <meta name="author" content="codepixer">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta charset="UTF-8">

    <title>Ruft Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Rubik:500" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('blog_assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('blog_assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog_assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('blog_assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('blog_assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('blog_assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('blog_assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('blog_assets/css/main.css')}}">
</head>
<body>

    <section class="header-top">
        <div class="container box_1170">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="index.html" class="logo">
                        <img src="{{asset('blog_assets/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 search-trigger">
                    <a href="#" class="search">
                        <i class="lnr lnr-magnifier" id="search"></i></a>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <header id="header">
        <div class="container box_1170 main-menu">
            <div class="row align-items-center justify-content-center d-flex">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html">Home</a></li>
                        
                        <li class="menu-has-children"><a href="#">Blog</a>
                            <ul>
                                <li><a href="{{route('blogDetails')}}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container box_1170">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>

    <!-- content -->
    @yield('content')

    <footer class="footer-area section-gap">
        <div class="container box_1170">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Us</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                        magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Newsletter</h6>
                        <p>Stay updated with our latest trends</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">Instagram Feed</h6>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="{{asset('blog_assets/img/i1.jpg')}}" alt=""></li>
                            <li><img src="{{asset('blog_assets/img/i2.jpg')}}" alt=""></li>
                            <li><img src="{{asset('blog_assets/img/i3.jpg')}}" alt=""></li>
                            <li><img src="{{asset('blog_assets/img/i4.jpg')}}" alt=""></li>
                            <li><img src="{{asset('blog_assets/img/i5.jpg')}}" alt=""></li>
                            <li><img src="{{asset('blog_assets/img/i6.jpg')}}" alt=""></li>
                            <li><img src="{{asset('blog_assets/img/i7.jpg')}}" alt=""></li>
                            <li><img src="{{asset('blog_assets/img/i8.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget f_social_wd">
                        <h6 class="footer_title">Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="f_social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-12 footer-text text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Ancent</a>
</p>
            </div>
        </div>
    </footer>

    <script src="{{asset('blog_assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="{{asset('blog_assets/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('blog_assets/js/easing.min.js')}}"></script>
    <script src="{{ asset('blog_assets/js/hoverIntent.js')}}"></script>
    <script src="{{ asset('blog_assets/js/superfish.min.js')}}"></script>
    <script src="{{ asset('blog_assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('blog_assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('blog_assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('blog_assets/js/jquery.tabs.min.js')}}"></script>
    <script src="{{ asset('blog_assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('blog_assets/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('blog_assets/js/mail-script.js')}}"></script>
    <script src="{{ asset('blog_assets/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
  </script>
</body>
</html>