@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class=" highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/background_remove/main_image.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">Professional  <span class="text">Photo</span></h2>
                            <p>Eliminate unwanted image backdrops effortlessly while ensuring the utmost quality. Restore focus and clarity by correcting background imperfections with our exceptional expertise.</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">FREE TRAIL <i class=" las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="featured" class="section-1 bg-white offers title">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-calendar"></i>
                        <h5>@lang('10k/Day')</h5>
                        <p>@lang('High-quality background removal service for big volumes of images.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>12 Hours</h5>
                        <p>@lang('Get your images within 12 hours - save time, stress-free!"
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>Unlimited</h5>
                        <p>@lang('Limitless revisions, lightning-fast delivery, and dedicated support - unleash your vision!')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="title">
        <div class="container">
            <div class="row align-items-center gx-5">
                
                <div class="col-lg-5 mb-3">
                    <button class="subHeading">@lang('What do we do?') </button>
                    <h4 class="text-secondary ">@lang('Get next-level photos')</h4>
                    <p class="paragraph">@lang('Experience excellence with our precision cutout services: Expert background removal, precise subject focus, and unparalleled quality results. Optimise your time and budget by entrusting us with your project.')

                    </p>
                </div>

                <div class="col-lg-7">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <div class="card-box">
                                <div class="row">
                                    
                                    <div class="col-lg-6 mb-3" >
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/background_remove/cut.png')}}" alt="" style="width: 70px">
                                            <h5 class="text-secondary mt-0">@lang('Image Cutouts')</h5>
                                            <p class="text-center ">@lang('Effortlessly extract subjects of any shape or products in record time.')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/background_remove/transparency.png')}}" alt="" style="width: 70px">
                                            <h5 class="text-secondary mt-0">@lang('Transparent/Any Colour')</h5>
                                            <p class="text-center ">@lang('Subject shines on your chosen backdrop - your vision, our expertise.')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/background_remove/web-design.png')}}" alt="" style="width: 70px">
                                            <h5 class="text-secondary mt-0">@lang('Customised Editing
                                                ')</h5>
                                            <p class="text-center ">@lang('Cut, replace, amaze: Elevate your visuals with stunning backgrounds.')</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/background_remove/background-check.png')}}" alt="" style="width: 70px">
                                            <h5 class="text-secondary mt-0">@lang('Background Composition')</h5>
                                            <p class="text-center ">@lang('Transform your images with stunning on-demand creative backgrounds.')</p>
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
    <section class="title offers sophisticated" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <style>
                        h1{
                            font-size: 3rem;
                        }
                    </style>
                    <h1>@lang('Background Mastery'): <br> @lang('Leaving no room for imperfection')</h1>
                </div>
                <div class="col-12 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">@lang('Achieve seamless background removal with just the essentials.')</h4>
                            <div class="paragraph">
                                <p>@lang('Say goodbye to bad image quality – our Photoshop experts remove unwanted backgrounds while preserving natural details.With our proficient team, we ensure timely delivery of edited images with refined backgrounds.
                                    ')</p>
                                <u></u>
                            </div>
                            
                        <ol class="services-list">
                            <div class="row">
                                <div class="col-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Maintain curve & details</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Accurate feathering</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Object removing</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Extend background</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Adjustable layer file</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Free focus stacking</li>
                                   
                                </div>
                                
                                <div class="col-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Background color </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Inline clipping path')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('100% Satisfaction')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Image formate')</li>
                                   
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Rush hour delivery</li>
                                  
                                </div>
                                
                            </div>
                            
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2 title" >
        <div class="container">
            <div class="row align-items-center gx-5">

                <div class="col-lg-6 ">
                    <h4 class="text-secondary ">@lang('Pen Tool magic: Cutting out backgrounds with razor-sharp precision')</h4>
                    <p class="paragraph"> @lang('Get premium-quality image background removal with our special offer! Our skilled team meticulously outlines every edge, guaranteeing the finest results within your deadline. ')</p>

                    <div class="list">
                        <ol class="services-list">
                           
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon">@lang('Crafted by our skilled team
                                ')
                            </li>
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon"> @lang('Precision to the max.')
                            </li>
                            <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon"> @lang('Quality without compromise')
                            </li>
                    
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <img src="{{asset('front-assets/images/background_remove/main_imge_2.png')}}" class="fit-image" alt="background remover">
                </div>
                
            </div>
        </div>
    </section>

    <section class="section-1 bg-light title" >
        <div class="container">
            <div class="row align-items-center gx-5">
                
                <div class="col-6">
                    <img src="{{asset('front-assets/images/background_remove/main_image_3.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-6">
                    
                    <h3 class="text-secondary ">@lang('Instantly erase backgrounds with the magical touch of the Wand Tool')</h3>
                    <p class="paragraph"> @lang('Attention E-commerce Sellers! "Enhance your e-commerce visuals with lightning-fast image processing: vibrant subjects, contrasting backgrounds, and fewer details for swift cutout perfection. ')</p>

                    <div class="list">
                        
                        <ol class="services-list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon">@lang(' High volume Image Processing

                                        ')
                                    </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon">@lang('Fast Turnaround')
                                    </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon">@lang(' Cost Savings. ')
                                    </li>
                            
                                </div>
                                
                            </div>
                            
                        </ol>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <section class="section-2 title" >
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-5">
                    
                    <h3 class="text-secondary ">@lang('Cutout at lightning speed, starting from just $0.15!')</h3>
                    <p class="paragraph"> @lang('For rapid, high-quality bulk image background removal, this offer is your ideal solution. Our precision rivals the Pen tool, ensuring exacting image quality and accuracy. Optimal results are achieved with a distinct background colour (green preferred) contrasting the subject, while keeping photo details to a minimum.
                        ')</p>

                    <div class="list">
                        
                        <ol class="services-list">
                            <div class="col-lg-12">
                                <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon">@lang('Quick Delivery During Rush-Hour
                                    ')
                                </li>
                                <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon"> @lang('Flexible Project-Based Engagement
                                    ')
                                </li>
                                <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon"> @lang('Unbeatable Market-Beating Prices')
                                </li>
                        
                            </div>
                            
                        </ol>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img src="{{asset('front-assets/images/background_remove/main_image_4.png')}}" class="fit-image" alt="Jewelry Retouch">
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
                        <p class="mt-2 ">@lang('Let our expert team swiftly remove photo backgrounds and enhance them to perfection, delivering stunning results in record time.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/background_remove/mocup.png" class="fit-image" alt="Masking">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h4 class="text-secondary">@lang('Why choose us?')</h4>
                                <p class="paragraph">
                                   @lang('Struggling to edit your photo background during rush hour? Let our expert team handle it for you! We can quickly remove or improve the background to your exact specifications, making post-processing a breeze.
                                   Using the latest version of Photoshop CC, our skilled editing team can seamlessly isolate your subject and replace the background of your choice. Even for complex-edged images, we guarantee a professionally retouched background that will leave your image looking stunning.
                                   ')
                                   <br><br>
                                   @lang('At PixClipping, we are committed to delivering impressive results through our image background removal service. Trust us to make your photos stand out with enhanced backgrounds. Say goodbye to worries and uncertainties, and let us provide you with the perfect image mask, freeing your subject from the background.')
                                </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners -->
    <section class="section-2 bg-white">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Professional Image Background Remover
                            ')</h3>
                        <p class="mt-2">@lang('Transform your images with expert background removal and manipulation according to your vision - check out our impressive samples!')</p>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/background_remove/portfolio/one.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 green">
                                <img src="{{asset('front-assets/images/background_remove/portfolio/one.webp')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/background_remove/portfolio/two.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 blue">
                                <img src="{{asset('front-assets/images/background_remove/portfolio/two.webp')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/background_remove/portfolio/three.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 black">
                                <img src="{{asset('front-assets/images/background_remove/portfolio/three.webp')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/background_remove/portfolio/four.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 orange ">
                                <img src="{{asset('front-assets/images/background_remove/portfolio/four.webp')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing " class="section-1 title  plans title">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Experience the pinnacle of photo background removal - supreme quality at the lowest cost.')</h3>
                    <p class="text-max-800 ">@lang('Affordable background removal and customised colours, no extra charge.')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$0.29 - $0.69')</span>
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
                        <span class="price">@lang('$0.70 - $2.99')</span>
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

@push('style')
    <style>
    .content-container {
        margin: 0 auto;
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