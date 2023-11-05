@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="highlights image-right sec_img">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="row intro mt-5">
                        <div class="col-12 p-0">
                            <h2 class="text-light">@lang('Beauty Retouching Services') : <span class="text-warning">@lang('Natural Aesthetics')</span></h2>
                            <p class="paragraph text-light">@lang('Enhance your photos with our beauty retouching services. Captivate viewers with stunning details and breathtaking imagery.
                                ')</p>
                            <a href="#" target="_blank" class="btn primary-button d-inline-block me-2">@lang('FREE TRAIL') <i class="las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block btn-outline-warning text-light">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
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
                        <h5>@lang('5000k/Day')</h5>
                        <p class="paragraph">@lang('Transform your images with high-volume, lifelike shadow making services.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
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
                    <h1 class="justify-content-center">@lang('Elevate Beauty with Organic Luster
                        ')</h1>
                      
                </div>
                <div class="col-lg-8 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-lg-12 ">
                            <h4 class="featured alt text-secondary">@lang('Discover the elements of model photo retouching')</h4>
                            <div class="paragraph">
                                <p>@lang('Attention fashion photographers and studio owners! Are you in need of high-end beauty retouching services from a reliable provider? Look no further! We specialise in delivering glamour retouching that enhances the subject\'s natural beauty and makes the images truly radiant. Long-term collaboration is our forte. Let\'s elevate your visuals together!') 
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

                                <p class="paragraph mt-2">@lang('Experience professional photo retouching and makeover without compromising authenticity.')</p>
                            </div>
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality -->
    <section class="section-2 bg-white title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('High-end Beauty Retouching for Luxurious Results!')
                        </h3>
                        <p class="mt-2">@lang('Transforming images with our exclusive custom presets, delivering premium quality results. Committed to maintaining consistent excellence in our services.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-5">
                        <img src="/front-assets/images/beauty/mocup.png" class="fit-image" alt="mocup">
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <div class="card-box bg-white">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/beauty/skin.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Skin retouching')</h5>
                                                <p class="justify-content-center">@lang('Our skilled retouchers flawlessly smooth skin, correcting makeup errors for a flawless texture.')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3" >
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/beauty/color.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Color correction')</h5>
                                                <p >@lang('We precisely adjust color to match your recommended preferences for both body and skin.')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/beauty/blush.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Beauty makeup')</h5>
                                                <p>@lang('Enhance your photos with a flawless, glamorous look by concealing blemishes.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/beauty/face-scan.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Face retouching
                                                    ')</h5>
                                                <p>@lang('Enhancing nose, lips, and eyes while preserving realism. ')</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/beauty/lifting.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Enhance beauty effect ')</h5>
                                                <p>@lang('We skillfully balance highlights and shadows, creating a radiant glow for the model\'s face')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/beauty/good-review.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Perfect composition ')</h5>
                                                <p>@lang('Transform the visual style and angles to craft alluring photos infused with both glamour and storytelling.')</p>
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
    <section class="title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Crafting Exquisite Photos: Our Process Unveiled')</h3>
                        <p class= mt-2">@lang('Our skilled team employs time-tested advanced retouching methods to enhance your allure to perfection.')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/home/services/jewelry-retouch-service/jewelry-retouch2.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-lg-12 p-0">
                                <h4 class="text-secondary">@lang('The Advantages of Pix Clipping in Editing')</h4>
                                <p class="paragraph">
                                    @lang('Streamline your photo process, saving you time and energy. Whether it\'s a small task or a large project, trust us to enhance your image quality reliably. ') 
                                </p>

                                <ul style="list-style-type: circle;">
                                    <div class="row">
                                        <li><strong> Professional Editing : </strong> High-quality edits using premium tools. </li>
                                        <li><strong> Experienced Team : </strong> Skilled professionals ensuring top-notch results.</li>
                                        <li><strong>Swift Service : </strong> Quick delivery, with options for rush hour orders.</li>
                                        <li><strong>User-Friendly Platform : </strong> Easy ordering via our intuitive web app.</li>
                                        <li><strong>Transparent Pricing : </strong> No hidden fees, clear and fair pricing structure.</li>
                                        <li><strong>Secure Payments : </strong> Your financial transactions are safeguarded.</li>
                                        <li><strong>Customized Edits : </strong> Tailored solutions, including Camera RAW correction and adjustable layers.</li>
                                        <li><strong>Flexible Formats : </strong> Receive images in your preferred format.</li>
                                        <li><strong>Data Security : </strong> Your information is kept confidential and secure.</li>
                                        <li><strong>Free Revisions & Trials : </strong> Enjoy revisions and explore our services risk-free.</li>
                                        <li><strong>24/7 Support : </strong> Always available to assist you, ensuring your satisfaction.</li>
                                        <li><strong>Time & Energy Saving : </strong> Effortlessly enhance your images, from small tweaks to major projects, leaving you hassle-free.</li>
                                       
                                    </div>
                                </ul>
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
                        <h3 class="mb-0">@lang('Capture Audiences with the Ultimate Visual Appeal')</h3>
                        <p class="mt-2">@lang('Our beauty photo retouching aims to craft allure and captivate viewers instantly. Explore samples of our enhanced beauty photographs.

                            ')</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4" >
                        <a href="{{asset('front-assets/images/beauty/portfolio_one.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front-assets/images/beauty/portfolio_one.webp')}}" alt="">
                        </a>
                    </div>
                    <div class="col-4" >
                        <a href="{{asset('front-assets/images/beauty/portfolio_two.webp')}}"  data-fancybox="gallery" data-caption="Caption #2">
                            <img src="{{asset('front-assets/images/beauty/portfolio_two.webp')}}" alt="">
                        </a>
                    </div>
                    <div class="col-4" >
                        <a href="{{asset('front-assets/images/beauty/portfolio_three.webp')}}"  data-fancybox="gallery" data-caption="Caption #2">
                            <img src="{{asset('front-assets/images/beauty/portfolio_three.webp')}}" alt="">
                        </a>
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
                    <h3>@lang('High-resolution skin retouching pricing - Unveiling the Costs')</h3>
                    <p class="text-max-800">@lang('Discover our beauty retouching service, meticulously tailored to deliver top-tier photos, all at a budget-friendly rate. Your order is fully customizable to suit your unique preferences.')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/clipping_path/price/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$3.50 - $4.99')</span>
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
                        <img src="{{asset('front-assets/images/clipping_path/price/medium.png')}}" class="icon" alt="pricing icon">
                        <h4>@lang('Medium')</h4>
                        <span class="price">@lang('$5.00 - $8.99')</span>
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
                        <img src="{{asset('front-assets/images/clipping_path/price/complex.png')}}" class="icon" alt="pricing icon">
                        
                        <h4>@lang('Complex')</h4>
                        <span class="price">@lang('Talk to us')</span>
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
    
.sec_img {
        background-image: url("{{asset('front-assets/images/beauty/main.webp')}}");
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
