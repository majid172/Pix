@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class=" highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/food/main.png" class="fit-image" alt="food_Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">Food Photo Retouching:
                                <span class="text-primary"> Irresistibly Yummy!</span></h2>
                            <p>@lang('Transform images into mouthwatering delights that amplify cravings. Enhance Taste Brought to Life by PixClipping. 
                                ')</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">FREE TRAIL <i class="las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
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
                        <h5>24 Hours</h5>
                        <p class="paragraph">@lang('Experience the efficiency of our services. Receive your photos within a mere 24 hours."')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon lab la-uniregistry"></i>
                        <h5>5 Free</h5>
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
                <div class="col-lg-5 col-12">
                    <style>
                        h1{
                            font-size: 3.0rem;
                        }
                    </style>
                    <h1 class="justify-content-center">@lang('Create Irresistible Food Imagery')</h1>
                      
                </div>
                <div class="col-lg-7 col-md-6 gx-5">
                    <div class="row intro">
                        <div class="col-lg-12 ">
                            <h4 class="featured alt text-secondary">@lang('We can help to you -')</h4>
                            <div class="paragraph">
                                <p>@lang('Transform your food photos with our expert touch! We master light, enhance colors, and offer tailored retouching in your style. Our professional food photo retouchers infuse a delightful vibe into your images, bringing your food photography to a whole new level!') 
                                </p>
                                <u></u>
                            </div>
                           
                        <ol class="services-list">
                            <div class="row gx-4">
                                <div class="col-lg-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Adjust color cast')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Lift the highlights')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Add more contrast')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Correct blue cast')</li>
                                   
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Create balance tone')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Reduce grains, spots')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Crop and resize')</li>

                                </div>

                                <div class="col-lg-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('High quality retouching')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Adjustable layer file')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Rush hour delivery')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Image format as you need')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Affordable pricing')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Real time notifications')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('On-time delivery')</li>
                                </div>
                                We maintain realism in images, ensuring a flawless finish.

                            </div>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="section-2 bg-white title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Achieve Professional Retouching Excellence')
                        </h3>
                        <p class="mt-2">@lang('Precisely following your directions, we enhance food images, ensuring harmony and perfecting color balance.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/food/mocup.png" class="fit-image" alt="mocup">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/food/icon/lighting-bulb.png')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Adjust Lighting')</h5>
                                                <p class="justify-content-center">@lang('Refine your images with our expert touch: we fine-tune lighting and harmonise colors for a consistently vibrant appearance.')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4" >
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/food/icon/complete.png')}}" alt="perfect_composition">
                                                <h5 class="text-secondary mt-0">@lang('Perfect Composition')</h5>
                                                <p >@lang('Crafting the perfect style, and adding props as needed, for stunningly beautiful images is our expertise.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/food/icon/on_demand.png')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('On-demand Retouching')</h5>
                                                <p>@lang('Our expertise lies in enhancing food photos by skillfully cloning and repairing damaged areas for a flawless finish.')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/food/icon/quality-control.png')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Quality Guaranteed')</h5>
                                                <p>@lang('Our retouching expert, with over a decade of experience, enhances clarity and delivers a distinctive look tailored to your instructions.')</p>
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

    
    <section class="title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Our Exemplary Best Practices')
                        </h3>
                        <p class= mt-2">@lang('Transform your food photos with our expert editing services. We ensure fresh, perfectly composed images tailored to your preferences.')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <p class="paragraph">
                                    Elevate your food photography with our meticulous expertise. We excel in enhancing colors, eliminating distractions, and accentuating your subject to craft vibrant yet authentically realistic compositions.  <br> <br>
                                    Our proficient use of industry-standard correction tools ensures flawless exposure, shadow manipulation, and color precision. Bid farewell to overexposed areas and visible grains, as we meticulously finesse every detail. Through professional retouching techniques, we seamlessly blend elements to unveil a delectable and fresh overall presentation. 
                                    <br><br>
                                    Choose our food photo retouching services for an irresistibly professional touch that will make your culinary creations truly stand out.

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/food/before.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Partners -->
    <section class="section-2 title bg-white ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Sample of Expertly Enhanced Food Photography')</h3>
                        <p class="mt-2 ">@lang('Experience seamless photo enhancement for any complexity level. Explore our recent work to witness top-notch photo retouching quality.')</p>
                    </div>
                </div>
                  
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img">
                                <a href="{{asset('front-assets/images/food/one.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/one.webp')}}" alt="">
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
                                <a href="{{asset('front-assets/images/food/two.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/two.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img2">
                                <a href="{{asset('front-assets/images/food/three.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/three.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4   d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img3">
    
                                <a href="{{asset('front-assets/images/food/four.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/four.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img4">
                                <a href="{{asset('front-assets/images/food/five.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/five.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img5">
                                <a href="{{asset('front-assets/images/food/six.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/six.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img6">
                                <a href="{{asset('front-assets/images/food/two.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/two.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img7">
                                <a href="{{asset('front-assets/images/food/three.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/three.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img8">
                                <a href="{{asset('front-assets/images/food/one.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/food/one.webp')}}" alt="">
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
                    <h3>@lang('Food Retouching Pricing ')</h3>
                    <p class="text-max-800 ">@lang('Get expertly edited food photos at budget-friendly prices. Enjoy customized rates with no hidden fees.')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/background_remove/price icon/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$0.99 - $1.49')</span>
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
                        <span class="price">@lang('$1.50 - $4.99')</span>
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
                                    <p>@lang('Enhance photos by eliminating mannequins, smoothing wrinkles, and adding a realistic 3D ghost effect. Capture attention with our Ghost Mannequin Service.
                                        ')</p>
                                    <a href="{{route('services.slug','background-remove')}}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('See More')  <i class="las la-angle-right"></i></a>
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
        
figure.snip1177 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  width: 100%;
  background: #000000;
  text-align: center;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
figure.snip1177 * {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
figure.snip1177 img {
  vertical-align: top;
  max-width: 100%;
}
figure.snip1177 div {
  position: absolute;
  top: 50%;
  left: 50%;
  display: table;
  padding: 0 20px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
figure.snip1177 div:before,
figure.snip1177 div:after {
  position: absolute;
  display: block;
  width: 0%;
  height: 100%;
  content: '';
  background-color: rgba(255, 255, 255, 0.5);
  opacity: 0.8;
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
figure.snip1177 div:before {
  right: -150%;
}
figure.snip1177 div:after {
  left: -150%;
}
figure.snip1177 h3 {
  color: white;
  text-transform: uppercase;
  font-weight: 400;
  margin: 0;
  opacity: 0;
}
figure.snip1177 h3 span {
  font-weight: 800;
  display: block;
}
figure.snip1177 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
}
figure.snip1177:hover img,
figure.snip1177.hover img {
  opacity: 0.3;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}
figure.snip1177:hover h3,
figure.snip1177.hover h3 {
  opacity: 1;
}
figure.snip1177:hover div,
figure.snip1177.hover div {
  opacity: 1;
}
figure.snip1177:hover div:before,
figure.snip1177.hover div:before,
figure.snip1177:hover div:after,
figure.snip1177.hover div:after {
  width: 150%;
}

    </style>
@endpush
@section('page-script')
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {
  
    });
    </script>
    <script>
          /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
    </script>
@endsection
