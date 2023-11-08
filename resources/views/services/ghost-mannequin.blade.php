@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/ghost/main.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">@lang('Capturing Images with Natural Depth
                                ') : <span class="text">@lang('Ghost Mannequin Service')</span></h2>
                            <p>@lang('Enhance Your Photos with Ghost Mannequin Magic! Say goodbye to wrinkles and mannequins. Experience the realism of our 3D ghost effect service. Grab more viewers\' attention today!')</p>
                            <a href="{{route('free-trail')}}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('FREE TRAIL') <i class="las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="featured" class="section-1 bg-white offers">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-calendar"></i>
                        <h5>@lang('1000/Day')</h5>
                        <p class="text-center">@lang('Ghost mannequin editing: Experts in bulk.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>@lang('12 Hours')</h5>
                        <p>@lang('Save your time - receive stunning images in just 12 hours!"
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>@lang('Unlimited')</h5>
                        <p>@lang('Limitless revisions, lightning-fast delivery, and devoted support – guaranteed.')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- what do we do --}}
    <section class="bg-light">
        <div class="container">
            <div class="row align-items-center gx-5">
                
                <div class="col-lg-6 mb-3">
                    <button class="subHeading">@lang('What color clipping?') </button>
                    <h4 class="text-secondary ">@lang('Excellence defined: Our high-quality ghost mannequin editing.')</h4>
                    <p class="paragraph">
                        @lang('We excel in high-quality ghost mannequin editing services. Our professional neck joint service ensures an accurate portrayal of every part of the cloth. By adding a captivating 3D effect, we infuse vibrancy and confidence into your clothing products. Say goodbye to wrinkles and unwanted spots as we make them vanish seamlessly.') <br>
                        @lang('Experience super-fast service with the added benefit of free revisions, tailored to your needs. Our personalised web app simplifies the ordering process, making it effortless for our valued clients. Trust us to elevate your product visuals and bring out the best in your clothing line.')
                        
                    </p>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/ghost/icon/gallary.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Perfect \'Ghost\' Effect - Enchanting Impact
                                        ')</h5>
                                    <p class="justify-content-center">@lang('Transform your photos with our expert touch! Experience the natural ghost mannequin effect, giving your products the look of a real-life model wearing them.
                                        ')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3" >
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/ghost/icon/target.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('SEO-Powered Web Photos
                                        ')</h5>
                                    <p >@lang('No need for additional post-processing. Utilise our edited images directly for your purpose.

                                        ')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/ghost/icon/output.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Experience Consistent Output
                                        ')</h5>
                                    <p>@lang('Expertly crafted photos with unmatched depth - courtesy of our dedicated in-house retouchers.
                                        ')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/ghost/icon/chart.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Supercharge Your Sales!
                                        ')</h5>
                                    <p>@lang('Transform viewers into buyers and boost sales with our flawless mannequin effect.
                                        ')</p>
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
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <style>
                        h1{
                            font-size: 3rem;
                        }
                    </style>
                    <h1>@lang('Enhance Efficiency '): <br> @lang('Eliminate Apparel Mannequin')</h1>
                </div>
                <div class="col-12 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">@lang('Your one-stop solution for all your needs')</h4>
                            <div class="paragraph">
                                <p>@lang('Unlimited image volume? No problem! Count on our team for timely delivery and top-notch quality. Boost your photo performance today!
                                    ')</p>
                                <u></u>
                            </div>
                            
                            <ol class="services-list">
                                <div class="row">
                                    <div class="col-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Ghost Mannequin')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Retouch Wrinkle')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Add 3D Effect')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Shape Adjustment')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Accurate Resizing')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Remove Dust & Noise')</li>
                                    
                                    </div>
                                    
                                    <div class="col-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Camera RAW Correction') </li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Free Focus Stacking')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Adjustable Layer File')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Image formate')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('One-time pay rate')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Payment Gateway')</li>
                                    
                                    </div>
                                </div>
                                
                            </ol>
                            <h6 class="text-secondary">@lang('Transform static images into dynamic, tailored fits with our expert ghost mannequin photo editing services.')</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="section-2 bg-light title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('How We Execute Task')
                        </h3>
                        <p class="mt-2 ">@lang('PixClipping: Lifelike ghost mannequin photo editing. Quick and professional turnaround')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/ghost/execute.png" class="fit-image" alt="Masking">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                            
                                <p class="paragraph">
                                   @lang('Our expert team enhances your photos by removing dummies and adding neck-shot top and bottom. We apply 3D effects for an authentic look and retouch the image, removing dust and wrinkles while maintaining a natural appearance. With our ghost mannequin service, your garments will look freshly ironed in the photos.
                                   
                                   ')
                                   <br> <br>
                                   @lang('We ensure symmetrical images, correct lengths for arms, sleeves, and legs, and position objects at the centre. You have the flexibility to adjust height, width, and DPI as needed. Additionally, we provide an Editable Photoshop Layer file for future use on-demand.')

                                   <br><br>
                                   @lang('For flat lay photography, we offer realistic and web-ready apparel images, allowing you to capture clothes without mannequins worry-free.')
                                </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section-2 title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-sm-12 heading">
                        <h3 class="mb-0">@lang('Speed, Quality, and Consistency. Providing exceptional Ghost Mannequin Photo Editing Services')</h3>
                        <p class="mt-2 ">@lang('Discover our invisible mannequin service for sharp & flawless product images. Check out our latest post-productions.')</p>
                    </div>
                </div>
                  
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img">
                                <a href="{{asset('front-assets/images/ghost/portfolio/one_1.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/one.png')}}" alt="">
                                </a>
                                
                            </div>
                            <div class="jewelary-btn d-flex align-items-center justify-content-center">
                                <a href="#">Makeapointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img1 ">
                                <a href{{asset('front-assets/images/ghost/portfolio/two_2.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/two.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img2">
                                <a href="{{asset('front-assets/images/ghost/portfolio/three_3.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/three.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4   d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img3">
    
                                <a href="{{asset('front-assets/images/ghost/portfolio/four_4.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/four.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img4 ">
                                <a href="{{asset('front-assets/images/ghost/portfolio/five_5.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/five.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img5">
                                <a href="{{asset('front-assets/images/ghost/portfolio/six_6.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/six.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img6">
                                <a href="{{asset('front-assets/images/ghost/portfolio/one_1.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/one.png')}}" alt="..">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img7">
                                <a href="{{asset('front-assets/images/ghost/portfolio/seven_7.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/seven.png')}}" alt="..">
                                </a>
                            </div>
                            <div class="jewelary-img8">
                                <a href="{{asset('front-assets/images/ghost/portfolio/eight_8.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/ghost/portfolio/eight.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing " class="section-1 title plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Ghost Mannequin Pricing: Affordable Solutions for Your Needs!')</h3>
                    <p class="text-max-800 ">@lang('Boost sales dramatically with our cost-effective ghost mannequin photo editing. No hidden fees, just pay for services.')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$0.79 - $1.49')</span>
                        <ul class="list-group list-group-flush mt-4">
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
                        <span class="price">@lang('$1.50 - $2.49')</span>
                        <ul class="list-group list-group-flush mt-4">
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
                        <ul class="list-group list-group-flush mt-4">
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
                                <img src="{{asset('front-assets/images/other_service/photo_recolor.webp')}}" alt="Random Image" class="img-fluid w-100 h-100">
                                <div class="flip-text">@lang('Photo Recolor')</div>
                                </div>
                                <!-- Back -->
                                <div class="flip-card-back  bg-white" style="text-align: center;">
                                <div class="content-container d-flex flex-column align-items-center justify-content-center ">
                         
                                  <h5 class="text-primary">@lang('Photo Recolor')</h5>
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
                                <img src="{{asset('front-assets/images/other_service/clipping.webp')}}" alt="Random Image" class="img-fluid w-100 h-100">
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
                    
                
                
            </div>
        </div>
    </section>

    @include('action-blog')


@endsection


@push('style')
    <style>
        
.jewelary-box{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

}

.jewelary-box img{
  width: 100%;
  border-radius: 20px;
  padding: 5px;
}
.jewelary-img1 img{
width: 180px;
height: 200px;

}
.jewelary-img2 img{
  width: 180px;
  height: 150px;
}
.jewelary-img5 img{
  height: 230px;
}

.jewelary-img6 img{
  height: 230px;
}
.jewelary-btn{
  width: 100%;
  margin-top: 20px;
}
.jewelary-btn a{
  padding: 10px 20px;
  background-color: orange; 
  border-radius: 10%;
  color: #000;
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
