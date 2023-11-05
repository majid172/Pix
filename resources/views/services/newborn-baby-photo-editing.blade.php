@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class=" highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/home/services/Sleeping baby-bro.svg')}}" class="fit-image" alt="headshot Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">@lang('Captivating & Sharp Imagery') : <span class="text">@lang('Natural Aesthetics')</span></h2>
                            <p class="paragraph">@lang('Enhance your photos with our beauty retouching services. Captivate viewers with stunning details and breathtaking imagery.
                                ')</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">@lang('FREE TRAIL') <i class="las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features -->
    <section id="" class="section-1 bg-white offers">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon icon-calendar"></i>
                        <h5>@lang('5000k/Day')</h5>
                        <p class="paragraph">@lang('Transform your images with high-volume, lifelike shadow making services.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon icon-clock"></i>
                        <h5>12 Hours</h5>
                        <p class="paragraph">@lang('Save your time - receive stunning images in just 12 hours!"
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>Unlimited</h5>
                        <p class="text-center">@lang('Limitless revisions, lightning-fast delivery, and devoted support – guaranteed.')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sophisticated -->
    <section class=" offers sophisticated" >
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-4 col-12">
                    <style>
                        h1{
                            font-size: 3.0rem;
                        }
                    </style>
                    <h1 class="justify-content-center">@lang('Capture Heartwarming Newborn Photos Swiftly & Efficiently
                        ')</h1>
                      
                </div>
                <div class="col-lg-8 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-lg-12 ">
                            <h4 class="featured alt text-secondary">@lang('Retouching services you get from us')</h4>
                            <div class="paragraph">
                                <p>@lang('Infant skin differs significantly from adults. It often features red spots, jaundice, and discoloration in extremities. Therefore, newborn photos usually benefit from additional retouching. Our skilled photo retouchers bring a vibrant life to these images.
                                    ') 
                                </p>
                                <u></u>
                            </div>
                           
                        <ol class="services-list">
                            <div class="row gx-4">
                                <div class="col-lg-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Clearing complexion & face retouch')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Overall skin retouching & toning')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Removing blemishes, line, wrinkles')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Natural skin & soften skin')</li>
                                
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Add makeup to photo & retouch')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Teeth , Eyes & Lips enhancing')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Removing unwanted distractions')</li>
                                </div>

                                <div class="col-lg-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('White levels & exposures')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Curves & level layer masking')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Warp, Liquify, Reshape')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Dodge and Burn effect')</li>
                                
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Dramatic photo retouching')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Fashion photography')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Other artistic enhancements')</li>
                                </div>

                                <p class="paragraph mt-2">@lang('Rest assured, we faithfully adhere to your directives for each newborn photo.
                                    ')</p>
                            </div>
                        </ol>
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
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Natural Baby Photo Editing Services')
                        </h3>
                        <p class="mt-2 ">@lang('Unlock the advantages with premier infant photo editing services. We transform your exceptional captures into impeccable masterpieces')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/home/services/Happy baby-pana.svg" class="fit-image" alt="Jewelry Retouch">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/home/icon/alart.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Edit Newborn Photos

                                                    ')</h5>
                                                <p class="justify-content-center">@lang('We specialise in retouching that enhances the innate beauty and intricate details of each baby while preserving their natural charm.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3" >
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/home/icon/idea.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Maternity Picture Editing

                                                    ')</h5>
                                                <p >@lang('Elevate your maternity shoot with our expertly crafted realistic retouching.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/home/icon/coin.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Family Photo Retouching
                                                    ')</h5>
                                                <p>@lang('Efficiently enhance and meticulously edit your family photos with over a decade of professional experience.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/home/icon/clock.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Siblings Photo Retouching

                                                    ')</h5>
                                                <p>@lang('we refine to capture the charming essence of sibling moments with absolute clarity.
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
        </div>
    </section>

    {{-- process --}}
    <section class="title ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Experience Our Effortless Workflow and Be Amazed!
                            ')
                        </h3>
                        <p class=" mt-2">@lang('We are committed to delivering top-tier retouching services, all within a seamless workspace tailored to your convenience.
                            ')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-5">
                        <img src="/front-assets/images/home/services/sleeping baby-pana.svg" class="fit-image" alt="Jewelry Retouch">
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row intro">
                            <div class="col-lg-12 p-0">
                                <h4 class="text-secondary">@lang('We\'re committed to delivering top-tier retouching services consistently.')</h4>
                               <div class="list">
                                <ul class="services-list">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Sign up, order, track, and stay updated effortlessly.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Tailoring orders to your preferences is a breeze.')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Personalised invoices are at your fingertips.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Rest easy knowing your data is secure in our hands.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Quality service that won\'t break the bank')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Experience a secure payment gateway')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('No surprise fees, just transparent pricing.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Stay about order\'s progress on our user-friendly platform.')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Our extensive team ensures your project never stops.')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Employing cutting-edge tools for authentic outcomes.')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('We uphold unwavering quality standards.')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Receive in-app updates at every project juncture.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Need it urgently? Opt for rush hour delivery.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Choose from a variety of payment options.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Manage separate billing profiles seamlessly.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Collect your edited images in any desired file format.
                                        ')</li>
                                     <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Conveniently upload images via direct link, Google Drive, Dropbox, Email
                                        ')</li>

                                </ul>

                               </div>
                            </div>
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
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Capture Timeless Moments with Our Baby Photography Services
                            ')</h3>
                        <p class="mt-2 ">@lang('We elevate affectionate moments in pictures, crafting touching experiences. Explore our latest creations.')</p>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col-sm-12 col-md-3 ">
                        <div class="card-box p-0">
                            <a href="{{asset('front-assets/images/shadow/portfolio/four.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                <img class="card-img-top lazyloaded"  alt="Baby girl image masking with before after"src="{{asset('front-assets/images/shadow/portfolio/four.png')}}">
                            </a>
                        </div>
                    </div>
    
                    <div class="col-sm-12 col-md-3 ">
                        <div class="card-box p-0">
                            <a href="{{asset('front-assets/images/shadow/portfolio/one.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                <img class="card-img-top lazyloaded"  alt="Baby girl image masking with before after"src="{{asset('front-assets/images/shadow/portfolio/one.png')}}">
                            </a>
                           
                        </div>
                    </div>
    
                    <div class="col-sm-12 col-md-3 ">
                        <div class="card-box p-0">
                            <a href="{{asset('front-assets/images/shadow/portfolio/two.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                <img class="card-img-top lazyloaded"  alt="Baby girl image masking with before after"src="{{asset('front-assets/images/shadow/portfolio/two.png')}}">
                            </a>
                        </div>
                    </div>
    
    
                    <div class="col-sm-12 col-md-3 ">
                        <div class="card-box p-0">
                            <a href="{{asset('front-assets/images/shadow/portfolio/three.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                <img class="card-img-top lazyloaded"  alt="Baby girl image masking with before after"src="{{asset('front-assets/images/shadow/portfolio/three.png')}}">
                            </a>
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
                    <h3>@lang('Newborn Image Editing Pricing
                        ')</h3>
                    <p class="text-max-800 ">@lang('We prioritise quality without the hefty price tag. Reach out for a quote tailored to your service needs.
                        ')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$0.99 - $1.99')</span>
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
                        <span class="price">@lang('$2.00 - $3.99')</span>
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
