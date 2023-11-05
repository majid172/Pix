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
                            <a href="#" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
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
                        <h5>@lang('250/Day')</h5>
                        <p>@lang('Introducing our seamless bulk jewelry image retouching service, without any interruptions.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>@lang('24 Hours')</h5>
                        <p>@lang('Experience the efficiency of our services. Receive your photos within a mere 24 hours.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>@lang('5 Free')</h5>
                        <p>@lang('Experience ultimate customer satisfaction with our free revisions for guaranteed content perfection.')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row align-items-center gx-5">
                
                <div class="col-lg-5 col-sm-12 mb-3">
                    <button class="subHeading">What do we do? </button>
                    <h4 class="text-secondary ">@lang('Delivering Consistent Photo Excellence
                        ')</h4>
                    <p class="paragraph">Precision Clipping Path Service for Flawless Results
                        Experience the best clipping path service with Pix Clipping Ltd. Our experts skillfully isolate subjects with both hard and soft edges, ensuring that only the subject remains, while the background disappears. <br><br>
                        When dealing with blurry images, we employ a zoom-in technique to enhance accuracy. Following your instructions, we meticulously cut with precision, whether it's 1px, 2px, inline, or maintaining the original Path name. We prioritise preserving image details and implementing active clipping paths.<br><br>
                        Save time, maintain your schedule, and enjoy peace of mind with our exceptional services.
                    </p>
                </div>

                <div class="col-lg-7 col-sm-12">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <div class="card-box">
                                <div class="row">
                                    
                                    <div class="col-lg-6 mb-3" >
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/photo_retouching/icon/light.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Adjust Lighting
                                                ')</h5>
                                            <p >@lang('We expertly adjust lights and shadows to enhance light contrast flawlessly.')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/photo_retouching/icon/sharpen.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Contrast and Sharpen
                                                ')</h5>
                                            <p>@lang('Our team expertly enhances colour, contrast, and saturation for top-notch image quality.')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/ghost/icon/chart.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Healing and Cloning
                                                ')</h5>
                                            <p>@lang('we meticulously eliminate all product scratches by hand, delivering pristine and revitalised images."
                                                ')</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/ghost/icon/gallary.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Perfect Retouching
                                                ')</h5>
                                            <p class="justify-content-center">@lang('We skillfully enhance product images by eliminating flaws, adjusting color/tone, and providing precise retouching.
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
                <div class="col-lg-6 col-12">
                    <style>
                        h1{
                            font-size: 3.0rem;
                        }
                    </style>
                    <h1>Image Clipping Path Service: <br> Path to Perfection</h1>
                </div>
                <div class="col-sm-12 col-lg-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">Lets see what is included in jewelry retouching</h4>
                            <div class="paragraph">
                                <p>Color Clipping has been providing jewelry retouching services to renowned jewelry brands and photographers. We have been serving clients from around the globe for over a decade. We believe in growth and focus on upscaling the retouching quality constantly.</p>
                                <u></u>
                            </div>
                           
                        <ol class="services-list">
                            <div class="row">
                                <div class="col-12">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Background editing</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Metal smoothing, Neutralizing & desaturating</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Dust/reflection removal & nice reduction</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Total cleaning, Color correction & recoloring</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Changing gold and gemstone color, removing color cast</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Neutralizing & Shine enhancement of diamonds & stones</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Drop shadow and mirror effect, Creative jewelry editing</li>
                                 
                                </div>
                                
                            </div>
                            
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Benefits -->
    <section class=" bg-light title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class=" col-lg-12 col-sm-12 heading">
                        <h3 class="text-secondary mb-0">@lang('How We Execute Task')
                        </h3>
                        <p class="mt-2">@lang('Our expert team employs time-proven retouching techniques to craft images with a stunningly realistic look.
                            ')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6 mb-3">
                        <img src="/front-assets/images/home/services/jewelry-retouch-service/jewelry-retouch2.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <p class="paragraph">
                                    Pix Clipping specialises in providing images with a stunningly natural look through our exceptional shadow-making service. Our highly skilled designers leverage cutting-edge technology to deliver realistic product images that captivate your audience. <br><br>
                                    With meticulous attention to detail, we maintain opacity levels, allowing you to control the transparency of objects for optimal viewing. By expertly editing angles, we determine the precise placement of light sources and shadow effects, ensuring they align opposite to the light source. Tailoring the shadow effect to match the apparent size of each product, we add just the right amount of noise to create an authentic, natural feel.
                                    The percentage of shadow spread is carefully adjusted, creating a gradual falloff that results in darker edges, adding depth and dimension to your images. Our designers possess the artistry and expertise to masterfully craft shadows that perfectly suit your desired aesthetic. <br><br>
                                    By seamlessly removing backdrops and introducing new, meticulously crafted drop shadows, we guarantee that your product will always exude a remarkably natural look that captivates viewers.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section-2 bg-white title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Accuracy. Speed. Satisfaction
                            ')</h3>
                        <p class="mt-2">@lang('Our skilled designers precisely outline the subject, preserving its natural details and ensuring a sharp, clean appearance. Take a look at a recent sample of our clipping path services. ')</p>
                    </div>
                </div>
                  
                <div class="row">
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/shadow/portfolio/one.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 green">
                                <img src="{{asset('front-assets/images/shadow/portfolio/one.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/shadow/portfolio/two.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 blue">
                                <img src="{{asset('front-assets/images/shadow/portfolio/two.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
    
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/shadow/portfolio/three.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 black">
                                <img src="{{asset('front-assets/images/shadow/portfolio/three.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-3 mb-3">
                        <a href="{{asset('front-assets/images/shadow/portfolio/four.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <figure class="snip1205 orange ">
                                <img src="{{asset('front-assets/images/shadow/portfolio/four.png')}}" alt="sample44"/>
                                <i class="las la-eye"></i>
                            </figure>
                        </a>
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
                    <h3>@lang('Value-Based Pricing for Photo Retouching Services
                        ')</h3>
                    <p class="text-max-800 ">@lang('The best clipping path service is available at a reasonable price. Get a price estimate for your particular needs. No additional fees or charges are included in our fixed rate.
                        ')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/clipping_path/price/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$3.50 - $4.99')</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Les design and simple edge')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                       
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Single diamond')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Single gemstone')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Cluster ring')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Long chain')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                           
                        </ul>
                        <a href="#" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>@lang('See Sample')</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/clipping_path/price/medium.png')}}" class="icon" alt="pricing icon">
                        <h4>@lang('Medium')</h4>
                        <span class="price">@lang('$5.00 - $8.99')</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Curvy design')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Multiple edges')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Two colors')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Double diamond')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Double gemstone')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
    
                        </ul>
                        <a href="{{route('login')}}" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>@lang('See Sample')</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/clipping_path/price/complex.png')}}" class="icon" alt="pricing icon">
                        
                        <h4>@lang('Complex')</h4>
                        <span class="price">@lang('Talk to us')</span>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Complex design</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Group of Jewelry </span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Numerous edge</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>Multiple diamonds</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Multiple gemstones')</span>
                                <i class="icon-min m-0 icon-check text-right"></i>
                            </li>
                        </ul>
                        <a href="{{route('contact')}}" class="smooth-anchor btn mx-auto primary-button"><i class="icon-arrow-right-circle"></i>@lang('See Sample')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
      $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
 
  );
</script>
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {
      // Your custom options
    });
</script>
@endsection
