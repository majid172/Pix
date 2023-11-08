@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="highlights image-right school_heading">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/school_edit/main.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class=" alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-light">@lang('Enhanced School Photo Editing
                                ') : <span class="text">@lang('
                                Superior Quality, Fast Results')</span></h2>
                            <p class="text-light paragraph">@lang('Enhance school portraits and group photos effortlessly. Our expert retouching saves you time, masking images, eliminating halos, precise cropping, and more.
                                ')</p>
                            <a href="{{route('free-trail')}}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('FREE TRAIL') <i class="las la-angle-right"></i></a>
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
                        <i class="icon las la-calendar"></i>
                        <h5>@lang('250/Day')</h5>
                        <p>@lang('Get complete school images retouching with us.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>@lang('24 Hours')</h5>
                        <p>@lang('Save your time - Images will be delivered within 24 hours')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>@lang('5 Free')</h5>
                        <p>@lang('Get 5 Free revisions will super fast delivery & dedicated support')
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
                <div class="col-lg-6">
                    <style>
                        h1{
                            font-size: 3rem;
                        }
                    </style>
                    <h1>@lang('Enhance Pictures with Authentic Attributes')</h1>
                </div>
                <div class="col-lg-6 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class=" alt text-secondary">@lang('Service We Provide:
                                ')</h4>
                            <div class="paragraph">
                                <p>@lang('PixClipping delivers impeccable clear images captured in natural light settings. With a vast portfolio of edited photos, we adeptly manage all aspects of school photo editing services.
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
                            <p class="text-secondary">@lang('We manage all your school photograph post-processing needs.')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>        

    <!-- Benefits -->
    <section class="section-2 bg-white">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('Committed to Unwavering Excellence')
                        </h3>
                        <p class="mt-2 ">@lang('We skillfully enhance school photographs, preserving their innate charm and intricate details.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-lg-5 col-md-6">
                        <img src="/front-assets/images/school_edit/main_2.png" class="fit-image" alt="Masking">
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <div class="card-box">
                                    <div class="row">
                                        
                                        <div class="col-lg-6 mb-3" >
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/ghost/icon/gallary.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Photo Background')</h5>
                                                <p >@lang('Eliminate the existing colored backdrop and replace it with a background of your choice provided by our team.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/ghost/icon/output.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Adjust Color Cast
                                                    ')</h5>
                                                <p>@lang('Eliminate undesirable color casts for authentically natural-looking images.
                                                    ')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/ghost/icon/chart.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Realistic Photo Editing
                                                    ')</h5>
                                                <p>@lang('Enhance sharpness, shadows, and highlights for vibrant, personalized photos.
                                                    ')</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <div class="benefit-card">
                                                <img src="{{asset('front-assets/images/ghost/icon/gallary.gif')}}" alt="">
                                                <h5 class="text-secondary mt-0">@lang('Ready to Share')</h5>
                                                <p class="justify-content-center">@lang('Instantly share edited images with your clients or use them for any purposes you need.
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

    <section class="section-2 bg-light title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('Why Should You Choose PixClipping?')
                        </h3>
                        <p class="mt-2 ">@lang('Utilising advanced manipulation techniques, our skilled team enhances natural details while eliminating distractions from photos.
                            ')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <img src="/front-assets/images/school_edit/mocup.png" class="fit-image" alt="Masking">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                            
                                <p class="paragraph">
                                   @lang('Experience flawless school portraits and group images through our specialised school photo retouching services. Eliminate the need for post-processing – entrust the editing process to us after your photography session.
                                   
                                   ')
                                   <br> <br>
                                   @lang('Our seasoned team meticulously fine-tunes lighting, shadows, and exposure to yield authentic portrait and group results. We adeptly enhance backgrounds and rectify exposure as per your directives. Additionally, we offer versatile photo manipulation services, including subject resizing and artistic embellishments, ensuring your photographs exude brilliance and impact.')

                                   <br><br>
                                   @lang('Crafting precision, we skillfully adjust and place photos within frames, seamlessly merging creativity with technical finesse. Our repertoire extends to incorporating imaginative effects with tailor-made Photo Frames. The culmination of our efforts produces flawless school photos, meticulously refined with the aid of premium-grade tools.
                                   ')

                                   <br><br>
                                   @lang('Reclaim your time and captivate your clientele with our distinguished school photo retouching services. Your pursuit of excellence finds its perfect partner in our professional offerings.')
                                </p>

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
                        <h3 class="mb-0">@lang('Enhance to Maintain the Charming Appearance
                            ')</h3>
                        <p class="mt-2 ">@lang('Experience the magic of our photo touch-up services, capturing the innocence of children through expert skin and posture enhancements. Explore our latest creations now!

                            ')</p>
                    </div>
                </div>
                  
                <div class="row align-items-center gx-5">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="card-box p-0">
                            <a href="{{asset('front-assets/images/school_edit/portfolio_2.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img class="card-img-top lazyloaded" src="{{asset('front-assets/images/school_edit/portfolio_2.webp')}}">
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card-box p-0">
                            <a href="{{asset('front-assets/images/school_edit/portfolio_1.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img class="card-img-top lazyloaded" src="{{asset('front-assets/images/school_edit/portfolio_1.webp')}}">
                          
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section class="section-2 bg-light title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('School Photo Retouching Service Price')
                        </h3>
                        <p class="mt-2 ">@lang('Discover tailored school photo retouching pricing. Reach out to us or request a quote for your unique editing needs. Transparent pricing with no hidden fees.
                            ')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        
                      <div class="side-box price_box py-5">
                        <div>
                               <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">$0.15</h1>
                            <p>@lang('as low as')</p>
                        </div>
                        <hr>
                        <p class="price-text">@lang('Transform your product photos with us and experience 100% satisfaction. Start recoloring today!')</p>
                        <a href="{{route('free-trail')}}" target="_blank" class="price_free_trial">@lang('Free Trial') <i class="las la-angle-double-right" style="font-size:20px"></i></a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/coin.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Affordable Pricing')</h5>
                                    <p class="justify-content-center">@lang('High-quality retouching, unbeatable prices. No overcharging, ever.
                                        ')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/offer.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Discount on Big Volume
                                        ')</h5>
                                    <p class="justify-content-center">@lang('Enjoy exclusive savings of up to 30% on project work as our valued recurring clients.
                                        ')</p>
                                </div>
                            </div>
                        </div>

                        <div class="row intro">
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/revision.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Multiple Free Revisions
                                        ')</h5>
                                    <p class="justify-content-center">@lang('Revise the retouching to match your unique requirements.
                                        ')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/payment.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Flexible Payment Policy')</h5>
                                    <p class="justify-content-center">@lang('Choose from pre-paid, post-paid, or pay-as-you-go options for convenient payment flexibility.
                                        ')</p>
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
