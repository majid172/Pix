@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/clipping_path/cycle/cycle.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">@lang('Effortlessly Isolate Subjects with Precision

                                ') : <span class="text">@lang('Maintain a precise edge')</span></h2>
                            <p>@lang('Unlock the ability to separate subjects from images as needed. Our skilled professionals accurately cut out single or group subjects, delivering exceptional results in record time!')</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">@lang('FREE TRAIL') <i class="las la-angle-right"></i></a>
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
                        <h5>@lang('5000/Day')</h5>
                        <p>@lang('Achieve top-notch image clipping paths for large volumes.
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>@lang('12 Hours')</h5>
                        <p>@lang('Effortless time-saving: Images delivered in just 12 hours!')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>@lang('Unlimited')</h5>
                        <p>@lang('Unlimited revisions, lightning-fast delivery, and dedicated support – all included!')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row align-items-center gx-5">
                
                <div class="col-lg-5">
                    <button class="subHeading">What do we do? </button>
                    <h4 class="text-secondary ">@lang('Best clipping path provider')</h4>
                    <p class="paragraph">Precision Clipping Path Service for Flawless Results
                        Experience the best clipping path service with Pix Clipping Ltd. Our experts skillfully isolate subjects with both hard and soft edges, ensuring that only the subject remains, while the background disappears. <br><br>
                        When dealing with blurry images, we employ a zoom-in technique to enhance accuracy. Following your instructions, we meticulously cut with precision, whether it's 1px, 2px, inline, or maintaining the original Path name. We prioritise preserving image details and implementing active clipping paths.<br><br>
                        Save time, maintain your schedule, and enjoy peace of mind with our exceptional services.
                    </p>
                </div>

                <div class="col-lg-7">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <div class="card-box">
                                <div class="row">
                                    
                                    <div class="col-lg-6 mb-3" >
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/ghost/icon/gallary.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Inhouse Clipping Team
                                                ')</h5>
                                            <p >@lang('We collaborate with in-house designers exclusively, ensuring no outsourcing for image clipping.
                                                ')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/ghost/icon/output.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Hand-drawn Clipping')</h5>
                                            <p>@lang('Our committed team manually tailors clipping services to your exact needs
                                                ')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/ghost/icon/chart.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Accurate Shape & Feathering ')</h5>
                                            <p>@lang('Our skilled team carefully carves a precise path while preserving the delicate and authentic form on both sides.
                                                ')</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/ghost/icon/gallary.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Satisfaction Guaranteed')</h5>
                                            <p class="justify-content-center">@lang('At PixClipping, quality is never compromised, and your happiness is our constant pursuit.
                                                ')</p>
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
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <style>
                        h1{
                            font-size: 3.0rem;
                        }
                    </style>
                    <h1>Image Clipping Path Service: <br> Path to Perfection</h1>
                </div>
                <div class="col-12 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">Assisting You with</h4>
                            <div class="paragraph">
                                <p>Our skilled team of clipping path designers meticulously clip the outlines, remove backgrounds, refine edges, and perform deep etching to elevate the quality of your images. Experience the finest image clipping path service with unparalleled quality and swift turnaround time.</p>
                                <u></u>
                            </div>
                           
                        <ol class="services-list">
                            <div class="row">
                                <div class="col-12">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Provide a precise anchor point
                                    </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Cutting along the edge
                                    </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">The active clipping path
                                    </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Cut away the focal points
                                    </li>
                                
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Several cutting paths
                                    </li>
                                <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Image storage with the largest possible resolution
                                </li>
                                <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Urgent delivery
                                </li>
                                <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Priced Reasonably

                                </li>
                                </div>
                                
                            </div>
                            
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-1 " >
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6">
                    
                    <h4 class="text-secondary ">@lang('Multi Path Service: Separate Colour, Parts, Object in Photos')</h4>
                    <p class="paragraph"> @lang('We meticulously outline objects in photos. Adjust colours and create dynamic effects effortlessly with our multiple clipping path services. Elevate your visuals now!')</p>

                    <div class="list">
                        <ol class="services-list">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('In photos, separate each and every component of the image.')
                                    </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('The image\'s texture and colour can be added piece by piece depending on your needs.')
                                    </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon"> @lang('Create the ideal composition in the image with a lot more information to draw the audience\'s attention. Preview the same shot with an enhanced look.')
                                    </li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon"> @lang('For you to save time on editing, we offer a flawless cutout. Our skilled team produces customised clipping paths as per the specifications, which streamlines the retouching procedure')
                                    </li>
                                
                                </li>
                                </div>
                                
                            </div>
                            
                        </ol>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('front-assets/images/clipping_path/multi_path/image.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                
            </div>
        </div>
    </section>


    <!-- Benefits -->
    <section class="title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro gx-5">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">Why Should You Choose Pix Clipping Ltd  for Clipping Path ?
                        </h3>
                        <p class="mt-2 ">With our efficient clipping services, we ensure unwavering quality while respecting your time and goals. Your convenience is our priority.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-md-5">
                        <img src="/front-assets/images/clipping_path/sampo_botole/img1.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h4 class="text-secondary">@lang('Why choose us?')</h4>
                                <p class="paragraph">
                                    Our designers manually complete all of the work in order to offer the best clipping path service. To construct a path around the image, we use the Pen Tool in Adobe Photoshop. We don't use the magic wand tool or any other simple gimmicks that can damage the images. Every time we clip, we go edge-to-edge. <br><br>

                                    Our in-house production designers can quickly trim photos to even the most intricate margins. Therefore, we can provide you with large-scale e-commerce (Amazon, eBay) clipping services. We are capable of clipping your photographs accurately under pressure, regardless of how large or complicated your projects are. <br><br>

                                    Pix Clipping Ltd can assist you in meeting your deadline by providing photographs the same day as your order  Additionally, we provide a specialised staff for frequent customers who request a minimum of 500 pictures for cutout. Therefore, you can relax knowing that we will meet all of your needs when you use our clipping path services.
                                </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section-2 ">    
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Accuracy. Speed. Satisfaction
                            ')</h3>
                        <p class="mt-2 ">@lang('Our skilled designers precisely outline the subject, preserving its natural details and ensuring a sharp, clean appearance. Take a look at a recent sample of our clipping path services. ')</p>
                    </div>
                </div>
                  
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img">
                                <a href="{{asset('front-assets/images/clipping_path/partner/one.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/one.png')}}" alt="">
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
                                <a href="{{asset('front-assets/images/clipping_path/partner/two.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/two.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img2">
                                <a href="{{asset('front-assets/images/clipping_path/partner/three.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/three.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4   d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img3">
    
                                <a href="{{asset('front-assets/images/clipping_path/partner/four.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/four.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img4">
                                <a href="{{asset('front-assets/images/clipping_path/partner/six.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/six.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img5">
                                <a href="{{asset('front-assets/images/clipping_path/partner/five.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/five.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img6">
                                <a href="{{asset('front-assets/images/clipping_path/partner/seven.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/seven.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img7">
                                <a href="{{asset('front-assets/images/clipping_path/partner/eight.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/eight.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img8">
                                <a href="{{asset('front-assets/images/clipping_path/partner/three.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/three.png')}}" alt="">
                                </a>
                            </div>
                        </div>
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
                    <h3>@lang('Value-Based Pricing for Clipping Path Services')</h3>
                    <p class="text-max-800 ">@lang('The best clipping path service is available at a reasonable price. Get a price estimate for your particular needs. No additional fees or charges are included in our fixed rate.')</p>
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
                                <img src="{{asset('front-assets/images/other_service/ghost.webp')}}" alt="Random Image" class="img-fluid w-100 h-100">
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
                                <div class="flip-text">@lang('Image Masking')</div>
                            </div>
                            <!-- Back -->
                            <div class="flip-card-back  bg-white" style="text-align: center;">
                                <div class="content-container d-flex flex-column align-items-center justify-content-center ">
                                    <h5 class="text-primary">@lang('Image Masking')</h5>
                                    <p>@lang('Effortlessly remove unwanted image backgrounds, ensuring top-notch quality. Regain focus and clarity with our expert background correction services')</p>
                                    <a href="{{route('services.slug','image-masking')}}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('See More')  <i class="las la-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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



