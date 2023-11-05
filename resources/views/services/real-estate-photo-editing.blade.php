@extends('layouts.frontend.app')

@section('content')

    <!-- Dedicated to exceeding expectation-->

    <section class="highlights image-right sec_img">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="row intro mt-5">
                        <div class="col-12 p-0">
                            <h3 class="featured alt " style=" font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="">@lang('Simplify Your Vision with ') : <span class="text">@lang('Crystal-Clear Perspectives')</span></h2>
                            <p class="text-dark">@lang('Experience flawless image masking with us! Effortlessly extract intricate elements like hairs and furs. Seamlessly integrate subjects into any background. Elevate your editing game now!')</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">@lang('FREE TRAIL') <i class="las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                   
                </div>
                
            </div>
        </div>
    </section>


    <!-- Features -->
    <section id="featured" class="section-1 offers bg-white">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-calendar"></i>
                        <h5>@lang('250/Day')</h5>
                        <p class="paragraph">@lang('Introducing our seamless bulk jewellery image retouching service, without any interruptions.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>@lang('12 Hours')</h5>
                        <p class="paragraph">@lang('Transform your images with high-volume, lifelike shadow making services.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>@lang('Unlimited')</h5>
                        <p class="paragraph">@lang('Experience ultimate customer satisfaction with our free revisions for guaranteed content perfection.')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="title">
        <div class="container">
            <div class="row align-items-center gx-5">
                
                <div class="col-lg-5 col-sm-12 mb-3">
                    <button class="subHeading">What do we do? </button>
                    <h4 class="text-secondary ">@lang('Transform Your Property\'s Appeal with Expert Real Estate Image Editing')</h4>
                    <p class="paragraph">Capture Prospective Buyers' Interest and Drive Sales with Our Real Estate Photo Editing Services.
                        <br><br>
                        We excel at enhancing your property's visual appeal, both inside and out. Our skilled team delivers striking, flawless, and expertly refined images, precisely tailored to your specifications.<br><br>
                        Experience a hassle-free, timely delivery of numerous high-quality edited photos.

                    </p>
                </div>

                <div class="col-lg-7 col-sm-12">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <div class="card-box bg-white">
                                <div class="row">
                                    <div class="col-lg-6 mb-3" >
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/real_estate/lamp.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Light Stack')</h5>
                                            <p >@lang('Unlock the True Artistry of Photography: Expand Your Dynamic Range by Seamlessly Blending Multiple Shots into a Singular Masterpiece.
                                                ')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/real_estate/theatre.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Virtual Staging')</h5>
                                            <p>@lang('Capture Timeless Elegance: Transform Empty Spaces with Our Expert Modern Furniture Staging
                                                ')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/real_estate/shelf.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Interior / Exterior Retouch')</h5>
                                            <p>@lang('Refining Light, Perfecting Elements, and Eliminating Photography Flaws: Delivering Exceptional Retouched Photos, Every Time.')</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/real_estate/photo.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('HDR Photo')</h5>
                                            <p class="justify-content-center">@lang('Expertly Blend Multiple Exposure Images for Perfectly Balanced Real Estate Photos: Dark, shadow, and highlight elements seamlessly combined for a flawlessly exposed look through advanced photo editing.')</p>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sophisticated -->
    <section class=" offers sophisticated" >
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-5 col-12">
                    <style>
                        h1{
                            font-size: 3.0rem;
                        }
                    </style>
                    <h1 class="justify-content-center">@lang('Captivate Buyers with Stunning Real Estate Imagery')</h1>
                      
                </div>
                <div class="col-lg-7 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-lg-12 ">
                            <h4 class="featured alt text-secondary">@lang('Discover a World of Possibilities with Our Expert Retouching Services')</h4>
                            <div class="paragraph">
                                <p>@lang('Transform Your Images with Precision: Lens Distortion, Day-to-Dusk Magic, Seamless Item Removal, Mesmerizing Sky Replacements, Immaculate Lawn Retouching, Flawless Dust & Garbage Edits, TV Image Enhancements, and Expert Lighting Stacks.') 
                                </p>
                               <p>@lang('Unleash the Power of Professional Retouching: Where Creativity Meets Perfection!
                                ')</p>
                            </div>
                           
                        <ol class="services-list">
                            <div class="row gx-4">
                                <div class="col-lg-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Background editing')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Metal smoothing & Neutralizing')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Dust removal & nice reduction')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Total cleaning & recoloring
                                        ')</li>
                                   
                                
                                   
                                </div>

                                <div class="col-lg-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Changing gold color')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Creative jewelry editing
                                        ')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Drop shadow and mirror effect')</li>
                                </div>

                            </div>
                        </ol>
                        <p>@lang('Transforming Your Property Vision: Elevate Your Space with Expert Real Estate Photo Editing')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="title bg-white">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro gx-5">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('How We Execute Task?')</h3>
                        <p class="mt-2 ">@lang('We employ cutting-edge techniques and advanced technology to deliver top-rated results in record time, leaving your audience thoroughly impressed.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-5">
                        <img src="/front-assets/images/real_estate/mocup.png" class="fit-image" alt="real_easte_retouch">
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h4 class="text-secondary">@lang('Why choose us?')</h4>
                                <p class="paragraph">
                                    Discover the art of impeccable real estate imagery with PixClipping. Harnessing a decade of expertise, we meticulously transform your photos into visual masterpieces. Our seasoned team excels in removing distractions, sharpening images, and perfecting vertical/horizontal lines, ensuring your real estate captures attention effortlessly. <br><br>

                                    Within every frame, we eliminate in-frame distractions, enhancing overall clarity. Through a meticulous retouching process, we align, blend, and illuminate, culminating in stunning, symmetrical photos. Our creative mastery extends to controlling white balance, infusing brightness, and crispness into every image.<br><br>

                                    At PixClipping, we don't just edit; we elevate. We diligently follow your instructions, enhancing light, tone, and perspective. The result? Images of unparalleled quality, exuding professionalism at every pixel.

                                    <br><br>

                                    Need swift delivery? Reach out for our expedited service. Elevate your real estate visuals with PixClipping – where expertise meets excellence.

                                </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Partners --> 
    <section class="section-2 bg-light title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Engage Your Audience with Stunning Visuals')</h3>
                        <p class="mt-2">@lang('Our expertly edited real estate images blend perfect lighting with unmatched elegance, captivating potential buyers at first glance. Dive into our latest portfolio and witness the art of selling through striking visuals.')</p>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/real_estate/one.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 green">
                                <img src="{{asset('front-assets/images/real_estate/one.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/real_estate/two.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 blue">
                                <img src="{{asset('front-assets/images/real_estate/two.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/real_estate/three.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 black">
                                <img src="{{asset('front-assets/images/real_estate/three.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/real_estate/four.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 orange ">
                                <img src="{{asset('front-assets/images/real_estate/four.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="section-2  title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('Real Estate Photo Retouching Pricing')
                        </h3>
                        <p class="mt-2 ">@lang('Quality meets affordability with our Real Estate Retouching Services. Experience top-notch quality at budget-friendly prices. Enjoy a flat rate with no hidden fees.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        
                      <div class="side-box price_box py-5">
                        <div>
                               <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">$1.50</h1>
                            <p>@lang('as low as')</p>
                        </div>
                        <hr>
                        <p class="price-text">@lang('Transform your product photos with us and experience 100% satisfaction. Start recoloring today!')</p>
                        <a href="#" class="price_free_trial">@lang('Free Trial') <i class="las la-angle-double-right" style="font-size:20px"></i></a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/coin.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Affordable Pricing')</h5>
                                    <p class="justify-content-center">@lang('"Experience Professional-Level Retouching: Quality Results, Competitive Prices, No Overcharging.
                                        ')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/offer.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Discount on Big Volume')</h5>
                                    <p class="justify-content-center">@lang('Unlock Exclusive Savings: Enjoy Up to 30% Off on Project Work for Our Loyal Clients!')</p>
                                </div>
                            </div>
                        </div>

                        <div class="row intro">
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/revision.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Multiple Free Revisions')</h5>
                                    <p class="justify-content-center">@lang('Refine your retouching with subtle, personalized adjustments crafted to suit your specific needs.')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/payment.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Flexible Payment Policy
                                        ')</h5>
                                    <p class="justify-content-center">@lang('Experience hassle-free payments with our flexible options: pre-paid, post-paid, and pay as you go, tailored to simplify your payment schedule.')</p>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Dedicated to exceeding expectation-->
    @include('layouts.include.speciality')

    {{-- related services --}}
    <section id="services" class="section-1 offers bg-light pb-5">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Other Services You Might Need') </h3>
                    <p class="text-max-800 ">@lang('You might like some other professional editing & retouching services. Click and see our ventures, all services in one place.')</p>
                </div>
            </div>
            
            <div class="row align-items-center">
                <!-- Flip Card -->
                <div class="col-lg-4 col-md-4 col-12 mb-4">
                    <div class="flip-card">
                    <div class="flip-card-inner">
                        <!-- Front -->
                        {{--  --}}
                            
                            <div class="flip-card-front">
                                <img src="{{asset('front-assets/images/other_service/shadow_making.webp')}}" alt="Random Image" class="img-fluid w-100 h-100">
                                <div class="flip-text">@lang('Shadow Making')</div>
                                </div>
                                <!-- Back -->
                                <div class="flip-card-back  bg-white" style="text-align: center;">
                                    <div class="content-container d-flex flex-column align-items-center justify-content-center ">
                                        <h5 class="text-primary">@lang('Shadow Making')</h5>
                                        <p>@lang('Capture images with a lifelike touch, enhancing subjects through mirror effects and reflections.')</p>
                                        <a href="{{ route('services.slug', 'shadow-making') }}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('See More')  <i class="las la-angle-right"></i></a>
                                    </div>
                                    
                            
                            </div>
                        {{-- --}}
                    </div>
                    </div>
                </div>
                    
                <div class="col-lg-4 col-md-4 col-12 mb-4">
                    <div class="flip-card">
                    <div class="flip-card-inner">
                        <!-- Front -->
                        {{--  --}}
                            <div class="flip-card-front">
                                <img src="{{asset('front-assets/images/other_service/background.webp')}}" alt="Random Image" class="img-fluid w-100 h-100">
                                <div class="flip-text">@lang('Background Remove')</div>
                                </div>
                                <!-- Back -->
                                <div class="flip-card-back  bg-white" style="text-align: center;">
                                <div class="content-container d-flex flex-column align-items-center justify-content-center ">
                         
                                  <h5 class="text-primary">@lang('Background Remove')</h5>
                                    <p>@lang('Effortlessly remove unwanted image backgrounds, ensuring top-notch quality. Regain focus and clarity with our expert background correction services.')</p>
                                    <a href="{{route('services.slug','background-remove')}}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('See More')  <i class="las la-angle-right"></i></a>
                                </div>
                      
                            </div>
                        {{-- --}}
                    </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-12 mb-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="{{asset('front-assets/images/other_service/clipping.webp')}}" alt="Random Image" class="img-fluid w-100 h-100">
                                <div class="flip-text">@lang('Clipping Path')</div>
                            </div>
                            <!-- Back -->
                            <div class="flip-card-back  bg-white" style="text-align: center;">
                                <div class="content-container d-flex flex-column align-items-center justify-content-center ">
                                 
                                    <h5 class="text-primary">@lang('Clipping Path')</h5>
                                    <p>@lang('Effortlessly isolate subjects from any image. Our experts meticulously extract single or group subjects, ensuring precision and speedy delivery.')</p>
                                    <a href="{{route('services.slug','clipping-path')}}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('See More')  <i class="las la-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('action-blog')

@endsection

@push('style')
<style>
    /* jewelary-section-start */
.img-box{
  position: relative;
  /* height: 250px;
  width: 350px; */
  overflow: hidden;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  cursor: pointer;
}
.img-box-1{
   border-top-right-radius: 10%;
  border-bottom-left-radius: 10%;
 
}
.img-box-2{
  border-top-left-radius: 10%;
  border-bottom-right-radius: 10%;
}
.img-box img{
  width: 100%;
  height: 100%;
  transition: all 500ms ease-in-out;
}
.img-box .overlay{
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background: rgba(93, 174, 221, 0.685);
  opacity: 0;
  visibility: hidden;
  text-align: center;
} 
.img-box .overlay span a{
  color: #fff;
  font-size: 30px;
}
.img-box:hover .overlay{
  opacity: 1;
  visibility: visible;
}

.j-btn {
  border: none;
  background-color: rgba(255, 187, 0, 0.979);
  padding: 15px 50px;
  border-radius: 10px;
  transition: .5s;
}
.j-btn:hover{
 background-color: rgb(219, 144, 4);
}
.j-btn a{
  color: #000;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
}
.j-btn a i{
  margin-left: 5px;
}

.sec_img {
            background-image: url("{{asset('front-assets/images/real_estate/main.webp')}}");
            background-size: cover;
            background-attachment: unset;
            background-repeat: no-repeat;
            height: 490px;
            padding-top: 80px;
            position: relative;
        }

</style>
@endpush
@section('page-script')
<script>

    Fancybox.bind('[data-fancybox="gallery"]', {
      // Your custom options
    });
    
    
    </script>
@endsection
