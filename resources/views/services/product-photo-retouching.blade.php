@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="highlights image-right py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/product_photo/main.webp')}}" class="fit-image" alt="headshot Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">@lang('Boost Sales with Professional ') <span class="text">@lang('Photo Editing Services!')</span></h2>
                            <p class="paragraph">@lang('Turn raw product images into compelling, high-converting photos with our expert product photo editing service. Instantly connect with your audience and boost sales.')</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">FREE TRAIL <i class="las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">GET STARTED <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
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

    <!-- Sophisticated -->
    <section class=" offers sophisticated" >
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 col-12">
                    <style>
                        h1{
                            font-size: 3.0rem;
                        }
                    </style>
                    <h1 class="justify-content-center">@lang('Winning Product Photos Made Easy!Winning Product Photos Made Easy!')</h1>
                      
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class=" alt text-secondary">@lang('Unlock the power of your images for maximum profit!')</h4>
                            <div class="paragraph">
                                <p>@lang('We utilise top-notch technology and custom presets for efficient, premium photo editing. Trust us for timely and precise completion of your critical projects.
                                    ')</p>
                                
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

    <!-- Quality -->
    <section class="section-2 bg-light  title ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Enduring Excellence in Every Photo')
                        </h3>
                        <p class="mt-2">@lang('Capture instant attention with captivating photos. With over a decade of expertise, we consistently excel at achieving this art.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-md-6">
                        <img src="/front-assets/images/product_photo/main_2.webp" class="fit-image" alt="product photo">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/product_photo/lighting-bulb.png')}}" alt="adjust_light">
                                                <h4 class="text-secondary mt-0">@lang('Adjust Lighting')</h4>
                                                <p class="text-center">@lang('We masterfully fine-tune lighting, shadows, and amplify light contrasts to perfection.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3" >
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/product_photo/brightness.png')}}" alt="sharpen">
                                                <h4 class="text-secondary mt-0">@lang('Contrast and Sharpen')</h4>
                                                <p >@lang('Our skilled team finely tuned colour, contrast, and saturation for impeccable image quality.')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/product_photo/clone.png')}}" alt="healing_cloning">
                                                <h4 class="text-secondary mt-0">@lang('Healing and Cloning
                                                    ')</h4>
                                                <p>@lang('We expertly eliminate all scratches from products by hand, rejuvenating images with a pristine and revitalised appearance.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/product_photo/complete.png')}}" alt="perfect">
                                                <h4 class="text-secondary mt-0">@lang('Perfect Retouching')</h4>
                                                <p>@lang('We excel in flaw removal, precise colour/tone adjustments, and meticulous image retouching, all culminating in elevated product visuals.')</p>
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

    {{-- Benefits --}}
    <section class="title bg-white">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Enhancing Products: The Role of Product Retouching')
                        </h3>
                        <p class= mt-2">@lang('Safeguard Your Brand\'s Worth with Premium Images')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/product_photo/mocup.webp" class="fit-image" alt="mocup">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <p class="paragraph">
                                    @lang('An unedited photo captures unfavourable lighting, disturbances, and inconsistent colours compared to the original. Without retouching, your product photos lack the appeal to draw in customers. The sight of a vibrant photo astonishes your viewers. Your product images must exude cleanliness, precision, and allure. They should flawlessly mirror your brand\'s essence and product attributes – the key to global customer engagement. Image retouching is your tool to captivate remote audiences, transforming them into customers.
                                    ') <br>
                                    @lang('At Pix Clipping, we employ established retouching methods to enrich product photos, preserving their natural textures and intricate details.')

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 360 --}}
    <section class="bg-light">
        <div class="overflow-holder">
            <div class="container">
                
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                    
                        <h2 class="text-secondary">@lang('360° Product Photo Editing')</h2>
                        <p class="paragraph">
                            @lang('Enhance your product images with our professional photo editing service. Achieve a flawless 360° product rotation and a fantastic finish that will make your images truly stand out. This service will help you attract a larger audience to your website effortlessly.') <br>
                            @lang('We ensure that every aspect of your product is expertly composed, creating a seamless 3D view that highlights its best features. By removing distractions, enhancing details, and skillfully blending multiple exposure images, we present your product in its very best light from every angle.') <br>
                            @lang('Direct your users\' attention exactly where it needs to be – on a complete 360° product preview. At ColorClipping, we\'re here to meet all your product image editing needs with precision and care.')

                        </p>
    
                    </div>

                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/product_photo/360.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section-2  title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Captivating Visuals for Iconic Phrases')</h3>
                        <p class="mt-2">@lang('We passionately enhance images with integrity, setting the industry standard. Explore our latest favourites!')</p>
                    </div>
                </div>
                  
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img">
                                <a href="{{asset('front-assets/images/product_photo/portfolio/shoe.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/shoe.webp')}}" alt="">
                                </a>
                                
                            </div>
                            <div class="jewelary-btn d-flex align-items-center justify-content-center">
                                <a href="#">@lang('Makeapointment')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img1 ">
                                <a href="{{asset('front-assets/images/product_photo/portfolio/buckets.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/buckets.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img2">
                                <a href="{{asset('front-assets/images/product_photo/portfolio/bags.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/bags.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4   d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img3">
    
                                <a href="{{asset('front-assets/images/product_photo/portfolio/bag.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/bag.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img4">
                                <a href="{{asset('front-assets/images/product_photo/portfolio/parts.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/parts.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img5">
                                <a href="{{asset('front-assets/images/product_photo/portfolio/box.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/box.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img6">
                                <a href="{{asset('front-assets/images/product_photo/portfolio/bottle.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/bottle.webp')}}" alt="">
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img7">
                                <a href="{{asset('front-assets/images/product_photo/portfolio/products.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/products.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img8">
                                <a href="{{asset('front-assets/images/product_photo/portfolio/doll.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/product_photo/portfolio/doll.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing -->
            <section id="pricing " class="section-1 plans title">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Product Photo Editing Service Pricing')</h3>
                    <p class="text-max-800">@lang('We guarantee uncompromised quality. Our pricing is both reasonable and transparent, while consistently upholding top-tier service.')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/clipping_path/price/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$1.00 - $2.99')</span>
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
                        <img src="{{asset('front-assets/images/clipping_path/price/medium.png')}}" class="icon" alt="pricing icon">
                        <h4>@lang('Medium')</h4>
                        <span class="price">@lang('$3.00 - $7.99')</span>
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
                        <img src="{{asset('front-assets/images/clipping_path/price/complex.png')}}" class="icon" alt="pricing icon">
                        
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

    {{-- another services --}}
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

@section('page-script')
<script>

    Fancybox.bind('[data-fancybox="gallery"]', {
      // Your custom options
    });
    
    
    </script>
@endsection