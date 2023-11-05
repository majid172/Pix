@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="highlights image-right sec_img">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="row intro mt-5">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-light">@lang('Introducing Affordable') : <span class="text">@lang('
                                    Image Masking Service')</span></h2>
                            <p class="text-light">@lang('Experience flawless image masking with us! Effortlessly extract intricate elements like hairs and furs. Seamlessly integrate subjects into any background. Elevate your editing game now!')</p>
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
    <section id="featured" class="section-1 bg-white offers">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-calendar"></i>
                        <h5>@lang('1500/Day')</h5>
                        <p>@lang('High-quality, budget-friendly image masking service for flawless visual transformations.
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                         <i class="icon las la-clock"></i>
                        <h5>@lang('12 Hours')</h5>
                        <p>@lang('Accelerate productivity with prompt image delivery within 12 hours.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>@lang('Unlimited')</h5>
                        <p>@lang('Unlimited revisions, lightning-fast delivery, and dedicated support for a flawless experience')
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
                <div class="col-lg-6 col-12">
                    <style>
                        h1{
                            font-size: 3rem;
                        }
                    </style>
                    <h1>@lang('Masking Picture: Stand Out with Style')</h1>
                </div>
                <div class="col-lg-6 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">@lang('Image masking experts, at your service
                                ')</h4>
                            <div class="paragraph">
                                <p>@lang('Discover the art of natural-looking and stunning images as our seasoned designers expertly extract subject details, from visible hairs to furs, seamlessly eliminating color casts from any background. Experience our exceptional services today.
                                    ')</p>
                                <u></u>
                            </div>
                            
                            <ol class="services-list">
                                <div class="row">
                                    <div class="col-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Background masking')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Basic retouch')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Add shadow')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Instructed crop & size')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Add preferred background')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Overlay effect')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Perfect composition')</li>
                                    
                                    </div>
                                    
                                    <div class="col-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Camera RAW Correction') </li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Free Focus Stacking')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Adjustable Layer File')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Image formate')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Rush-hour delivery')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('24/7 dedicated support')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('100% satisfaction')</li>
                                    
                                    </div>
                                </div>
                                
                            </ol>
                            <p class="text-secondary">@lang('Trust our expert image masking services to seamlessly remove complex backgrounds from your images.')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>      

    <!-- Benefits -->
    <section class="section-2">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('Types of Image Masking')</h3>
                        <p class="mt-2 ">@lang('Transform your images with our expert image masking service. We skillfully select complex portions and seamlessly remove complicated backgrounds, delivering stunning results.')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="card-box p-0">
                            <img class="card-img-top lazyloaded" src="" alt="Translucent">
                            <div class="card-body">
                                <h4 class="font-weight-bolder"> @lang('Translucent Masking')</h4>
                                <p class="mb-0">@lang('Expertly isolate translucent objects without any backdrop, preserving their distinct colours.')</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card-box p-0">
                            <img class="card-img-top lazyloaded" src="" alt="Hair">
                            <div class="card-body">
                                
                                <h4 class="font-weight-bolder">@lang('Hair Fur Masking')
                                </h4>
                                <p class="mb-0">@lang('we skillfully extract objects from any background, like hair, fur, or wool with precision.')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    {{-- how we excute --}}
    <section class="section-2 bg-light ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('How We Execute Task')</h3>
                        <p class="mt-2 ">@lang('Drawing upon our extensive expertise in Advanced Photoshop masking techniques, we skillfully and accurately select intricate portions of images.')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <img src="/front-assets/images/image_masking/mockup.png" class="fit-image" alt="Masking">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                            
                                <p class="paragraph">
                                   @lang('At Pix Clipping we specialise in delivering flawless photo masking services tailored to your specific instructions. Our primary goal is to expertly remove backgrounds, mask intricate elements, and extract the subject, ensuring outstanding results.')
                                   <br> <br>
                                   @lang('Employing advanced techniques, we utilise channels to meticulously fine-tune selections while preserving the original details and colours of the photo. Furthermore, we enhance the mask by meticulously painting over each region with precision, employing appropriate brushes tailored to the object. This iterative process continues until a clean and subtle masking effect is achieved, resulting in a visually appealing image overall.
                                   ')

                                   <br><br>
                                   @lang('No longer burden yourself with the intricacies of masking. Our team of experts excels at selecting and cutting out various elements, including flying hairs, apparel, groups, complex shapes, and even transparent objects. We assure you of flawlessly rendered edges, devoid of halos or colour cast, ensuring faster and cleaner photo edits.

                                   ')

                                   <br><br>
                                   @lang('Experience the perfection of our photo masking services today.
                                   ')
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
                        <h3 class="mb-0">@lang('Image Masking Sample')</h3>
                        <p class="mt-2 ">@lang('Pix Clipping specialises in image masking services for hair/fur, as well as transparent and translucent objects. Check out our latest masking projects
                            ')</p>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/image_masking/portfolio/one.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 green">
                                <img src="{{asset('front-assets/images/image_masking/portfolio/one.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/image_masking/portfolio/two.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 blue">
                                <img src="{{asset('front-assets/images/image_masking/portfolio/two.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/image_masking/portfolio/three.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 black">
                                <img src="{{asset('front-assets/images/image_masking/portfolio/three.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/image_masking/portfolio/four.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 orange ">
                                <img src="{{asset('front-assets/images/image_masking/portfolio/four.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section id="pricing " class="section-1  plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Price of Masking Image')</h3>
                    <p class="text-max-800 ">@lang('Discover our value-driven photo masking services. Customise your orders with no hidden fees.')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$0.49 - $1.49')</span>
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
                        <span class="price">@lang('$1.50 - $2.99')</span>
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
            </div>
        </div>
    </section>
    @include('action-blog')


@endsection

@push('style')
    <style>
        .sec_img {
            background-image: url("{{asset('front-assets/images/image_masking/main.png')}}");
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
    });
  
</script>
@endsection
