@extends('layouts.blogLayout')
@section('content')

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          {{-- <span class="text-white">TERMS AND CONDITIONS</span> --}}
          <h1 class="text-capitalize mb-4 text-lg">DISCLAIMER</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{route('blogIndex')}}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">DISCLAIMER</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <p>
                The information provided on this website is only for general informational purposes only. It is not a substitute for expert or professional medical guidance, diagnosis, or treatment. Please, always seek the advice of your healthcare provider with any questions regarding your fitness, health, and wellness needs. 
                 <p>
                  <strong>Website Content </strong> <br>
                This website’s content, including text, images, videos, and other material, is designed for educational purposes and should not replace your relationship with your healthcare provider. The information presented should not diagnose, treat, cure, or prevent any disease and should not be relied upon as a medical recommendation.
                 </p>
                 <p>
                  <strong>Reliance On This Website For Information</strong> <br>
                Any reliance you place on the information on this website is strictly at your own risk. This website's owners, authors, and contributors disclaim any liability for any adverse effects or consequences resulting from using or interpreting the information presented.
                We advise you to consult with a healthcare professional before starting any new fitness or wellness program, changing your diet, or adopting new health practices since the information on this website may not be suitable for everyone, and individual circumstances and medical conditions should be considered.
                 </p>
                 <p>
                  <strong>Third-Party Links And Affiliates </strong> <br>
                This website may contain links to third-party websites and those from within out affiliate network. We offer these links for your convenience and do not signify endorsement or responsibility for these external sites' content, accuracy, or availability. We do not have control over these external sites' nature, content, and availability and disclaim any responsibility for their content.
                By using this website, you agree to these terms and conditions and acknowledge that you have read and understood this disclaimer. If you do not agree with this disclaimer or any part of it, please discontinue using this website.     
                 </p>
                </p>
                 
            </div>
        </div>
    </div>
</section>

@endsection


  