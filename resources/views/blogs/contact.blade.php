@extends('layouts.blogs')
@section('content')


<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container box_1170">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Post Archive
        </h1>
        <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="category.html">
        Archive</a></p>
      </div>
    </div>
  </div>
</section>


<section class="contact-page-area section-gap">
  <div class="container box_1170">
    <div class="row">
      <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
      <div class="col-lg-4 d-flex flex-column address-wrap">
        <div class="single-contact-address d-flex flex-row">
          <div class="icon">
            <span class="lnr lnr-home"></span>
          </div>
          <div class="contact-details">
            <h5>Dhaka, Bangladesh</h5>
            <p>56/8, West Panthapath</p>
          </div>
        </div>
        <div class="single-contact-address d-flex flex-row">
          <div class="icon">
            <span class="lnr lnr-phone-handset"></span>
          </div>
          <div class="contact-details">
            <h5>00 (880) 9865 562</h5>
            <p>Mon to Fri 9am to 6 pm</p>
          </div>
        </div>
        <div class="single-contact-address d-flex flex-row">
          <div class="icon">
            <span class="lnr lnr-envelope"></span>
          </div>
          <div class="contact-details">
            <h5><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80f3f5f0f0eff2f4c0e3efe4e5f4e8e5ede5f3aee3efed">[email&#160;protected]</a></h5>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <form class="form-area " id="myForm" action="https://preview.colorlib.com/theme/bounty/mail.php" method="post" class="contact-form text-right">
          <div class="row">
            <div class="col-lg-6 form-group">
              <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
              <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
              <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
            </div>
            <div class="col-lg-6 form-group">
              <textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
            </div>
            <div class="col-lg-12 d-flex justify-content-between">
              <div class="alert-msg" style="text-align: left;"></div>
              <button class="genric-btn primary circle text-uppercase" style="float: right;">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection