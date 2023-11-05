@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class=" highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">Achieve Your Preferred 
                                <span class="text">Headshot</span></h2>
                            <p>@lang('Our goal is to enhance your natural features, ensuring you exude confidence and elegance. Share your preferences, and we\'ll work our magic in no time!')</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">FREE TRAIL <i class="las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/headshot/main.png')}}" class="fit-image" alt="headshot Retouch">
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
                        <h5>@lang('5000k/Day')</h5>
                        <p class="paragraph">@lang('Transform your images with high-volume, lifelike shadow making services.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>12 Hours</h5>
                        <p class="paragraph">@lang('Save your time - receive stunning images in just 12 hours!"')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon lab la-uniregistry"></i>
                        <h5>Unlimited</h5>
                        <p class="paragraph">@lang('Limitless revisions, lightning-fast delivery, and devoted support – guaranteed.')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sophisticated -->
    <section class=" offers sophisticated" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <style>
                        h1{
                            font-size: 3.5rem;
                        }
                    </style>
                    <h1 class="justify-content-center">Enhance Your Image with Executive HeadShots</h1>
                      
                </div>
                <div class="col-12 col-lg-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">@lang('Corporate / Business Headshot Retouch
                                ')</h4>
                            <div class="paragraph">
                                <p>@lang('Refine imperfections in headshots using our specialised Photoshop tool. With over a decade of expertise, we offer swift and top-tier retouching services. Your editing needs are understood, and we\'re dedicated to helping you achieve your goals promptly.
                                    ')</p>
                                <u></u>
                            </div>
                           
                        <ol class="services-list">
                            <div class="row">
                                <div class="col-12">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Add shadows & reflection')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Reshape, Liquefy')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Camera raw correction')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Make symmetrical')</li>
                                
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Image format as you need')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Adjustable layer file</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Rush hour delivery</li>
                                </div>

                                <p>Crafting Exceptional Headshot Images, Tailored to Your Vision</p>
                            </div>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Benefits -->
    <section class="section-2 title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Captivating Headshots Your Best Impression in a Glance!')
                        </h3>
                        <p class="mt-2">@lang('Experience flawless photo retouching tailored to your instructions. Timely delivery guaranteed, transforming raw images into exclusive masterpieces. Take the leap and give us a try!')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/headshot/main_2.png" class="fit-image" alt="mocup">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <div class="card-box bg-white">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/headshot/icon/quality.gif')}}" alt="">
                                                <h4 class="text-secondary mt-0">@lang('Quality guaranteed')</h4>
                                                <p class="justify-content-center">@lang('We consistently provide clients with satisfying end results. This leads to minimal revisions and repeat business, as well as referrals to others. ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3" >
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/headshot/icon/idea.gif')}}" alt="">
                                                <h4 class="text-secondary mt-0">@lang('Retouching Idea')</h4>
                                                <p >@lang('Let us recommend the perfect headshot retouch style for your photos.')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/headshot/icon/money-bag.gif')}}" alt="">
                                                <h4 class="text-secondary mt-0">@lang('Unbeaten price')</h4>
                                                <p>@lang('we\'re always affordable. Your retouching needs, perfectly balanced with your budget.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/headshot/icon/sleep.gif')}}" alt="">
                                                <h4 class="text-secondary mt-0">@lang('Quick turn-around')</h4>
                                                <p>@lang('Our skilled retouchers guarantee swift delivery of flawlessly retouched images, precisely meeting your time requirements. ')</p>
                                            </div>
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

    <section class="title bg-white">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('How We Retouch Headshot Images')</h3>
                        <p class= mt-2">@lang('We expertly preserve natural details and enhance skin tone through advanced composition, ensuring the finest photo aesthetics. ')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <p class="paragraph">
                                    Our skilled retouchers meticulously tailor each image to your preferences, ensuring a truly professional result. Every natural detail is thoughtfully highlighted and refined. <br> <br>
                                    Discover flawless image retouching with us. From refining skin texture to brightening teeth, eliminating dark circles, and harmonising skin tone, we perfect every aspect of your headshot. What sets us apart is our commitment to preserving the authentic contours and lines of your portrait – no excessive warping or distortion. <br><br>
                                    The PixClipping team is dedicated to accentuating natural intricacies through our headshot retouching services. By expertly adjusting posture and enhancing colours, we seamlessly bring the subject to life, detached from the background. Share your instructions and let us capture your perfect expression.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/headshot/mocup.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Partners -->
    <section class="section-2 bg-light">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Headshot Retouching Sample')</h3>
                        <p class="mt-2">@lang('Headshot photos mirror your identity and are paramount for a thriving career. Elevate your innate beauty with our headshot retouching. ')</p>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/headshot/one.jpg')}}"  data-fancybox="gallery" data-caption="Headshot image one">
                            <figure class="snip1205 black">
                                <img src="{{asset('front-assets/images/headshot/one.jpg')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/headshot/two.png')}}"  data-fancybox="gallery" data-caption="Headshot image two">
                            <figure class="snip1205 blue">
                                <img src="{{asset('front-assets/images/headshot/two.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/headshot/three.jpg')}}"  data-fancybox="gallery" data-caption="Headshot image three">
                            <figure class="snip1205 black">
                                <img src="{{asset('front-assets/images/headshot/three.jpg')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/headshot/four.png')}}"  data-fancybox="gallery" data-caption="Headshot image three">
                            <figure class="snip1205 black">
                                <img src="{{asset('front-assets/images/headshot/four.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
                 
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing " class="section-1 plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Headshot Retouching Service Cost')</h3>
                    <p class="text-max-800 ">@lang('We excel in top-tier headshot retouching that fits your budget. Tailor your order, skip needless charges.')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$2.49 - $3.99')</span>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Les design and simple edge')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                       
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Single diamond')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Single gemstone')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Cluster ring')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Long chain')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                           
                        </ul>
                        <a href="#" class="smooth-anchor btn mx-auto primary-button"><i class="las la-arrow-circle-right"></i>@lang('See Sample')</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/medium.png')}}" class="icon" alt="pricing icon">
                        <h4>@lang('Medium')</h4>
                        <span class="price">@lang('$4.00 - $5.99')</span>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Curvy design')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Multiple edges')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Two colors')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Double diamond')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Double gemstone')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
    
                        </ul>
                        <a href="{{route('login')}}" class="smooth-anchor btn mx-auto primary-button"><i class="las la-arrow-circle-right"></i>@lang('See Sample')</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/complex.png')}}" class="icon" alt="pricing icon">
                        
                        <h4>@lang('Complex')</h4>
                        <span class="price">@lang('Talk to us')</span>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Complex design</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Group of Jewelry </span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Numerous edge</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Multiple diamonds</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Multiple gemstones')</span>
                                <i class="icon-min m-0 las la-check-circle text-right"></i>
                            </li>
                        </ul>
                        <a href="{{route('contact')}}" class="smooth-anchor btn mx-auto primary-button"><i class="las la-arrow-circle-right"></i>@lang('See Sample')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dedicated to exceeding expectation-->

    @include('layouts.include.speciality')
    {{-- related services --}}
    <section id="services" class="section-1 offers pb-5">
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
                                <img src="{{asset('front-assets/images/other_service/multi_clip.webp')}}" alt="Random Image" class="img-fluid w-100 h-100">
                                <div class="flip-text">@lang('Ghost Mannequin')</div>
                                </div>
                                <!-- Back -->
                                <div class="flip-card-back  bg-white" style="text-align: center;">
                                <div class="content-container d-flex flex-column align-items-center justify-content-center ">
                         
                                  <h5 class="text-primary">@lang('Ghost Mannequin')</h5>
                                    <p>@lang('Enhance photos by eliminating mannequins, smoothing wrinkles, and adding a realistic 3D ghost effect. Capture attention with our Ghost Mannequin Service.
                                        ')</p>
                                    <a href="{{route('services.slug','ghost-mannequin')}}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('See More')  <i class="las la-angle-right"></i></a>
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
                                <img src="{{asset('front-assets/images/other_service/image_masking.webp')}}" alt="Random Image" class="img-fluid w-100 h-100">
                                <div class="flip-text">@lang('Clipping Path')</div>
                            </div>
                            <!-- Back -->
                            <div class="flip-card-back  bg-white" style="text-align: center;">
                                <div class="content-container d-flex flex-column align-items-center justify-content-center ">
                                 
                                    <h5 class="text-primary">@lang('Clipping Path')</h5>
                                    <p>@lang('Effortlessly remove unwanted image backgrounds, ensuring top-notch quality. Regain focus and clarity with our expert background correction services')</p>
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

@section('page-script')
<script>
Fancybox.bind('[data-fancybox="gallery"]', {
  // Your custom options
});
</script>
@endsection