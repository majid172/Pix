@extends('layouts.frontend.app')

@section('content')
    <!-- Hero part-->
    <section class="highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/home/Home1.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">@lang('Explore  the Organic ') : <span class="text">@lang('Texture! ')</span></h2>
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
    <section id="featured" class="section-1 title offers bg-white">
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
                        <p class="paragraph">@lang('Experience the efficiency of our services. Receive your photos within a mere 24 hours."
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>5 Free</h5>
                        <p class="text-center">@lang('Experience ultimate customer satisfaction with our free revisions for guaranteed content perfection.')
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
                    <h1 class="justify-content-center">@lang('Exquisite Jewellery Editing - Unparalleled Sophistication
                        ')</h1>
                      
                </div>
                <div class="col-lg-7 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-lg-12 ">
                            <h4 class="featured alt text-secondary">@lang('Let\'s take a look at what is covered in jewellery retouching.')</h4>
                            <div class="paragraph">
                                <p>@lang('Pix Clipping offers top-notch jewellery retouching services to global brands and photographers. With over a decade of experience, we constantly enhance the quality of our work.
                                    ') 
                                </p>
                                <u></u>
                            </div>
                           
                        <ol class="services-list">
                            <div class="row gx-4">
                                <div class="col-lg-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Background editing')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Metal smoothing & Neutralizing')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Dust removal & nice reduction')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Total cleaning & recoloring
                                        ')</li>
                                   
                                
                                   
                                </div>

                                <div class="col-lg-6">
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Changing gold color')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Creative jewelry editing
                                        ')</li>
                                    <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Drop shadow and mirror effect')</li>
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
    <section class="title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Expert Jewelry Photo Retouching: Elevating Visuals!
                            ')
                        </h3>
                        <p class="mt-2">@lang('Reliable photos are essential for a successful purchase. Let Pix Clipping retouch meet your needs!
                            ')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/home/services/jewelry-retouch-service/jewelry-retouch2.png" class="fit-image" alt="Jewelry Retouch">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-lg-12 p-0">
                                <h4 class="text-secondary">@lang('Why do you need jewelry image retouching?
                                    ')</h4>
                                    <p class="paragraph">
                                        @lang('A perfect jewelry photo possesses the mesmerizing ability to seize viewers\' attention and trigger their dopamine release. Entrusting your photo to the hands of a skilled editor ensures a guaranteed connection with your audience!') <br><br>

                                       @lang('Jewelry, often concealing invisible spots beyond the reach of our naked eyes, can be vividly exposed through the lens of a macro camera. However, the process of capture may alter the color and shine, accentuating the need for meticulous editing) 
                                        ')
                                        <br><br>
                                        @lang('Neglecting these flaws will inevitably lead to subpar images. In the realm of retouching, efficiency is paramount, encompassing tasks from glamorization to restoration, all while maintaining a harmonious balance.') <br> <br>
                                        @lang('For over a decade, Team Color Clipping has been mastering the art of retouching jewelry images. What sets us apart? We unveil the true brilliance of each jewel, crafting visuals that instantly ignite the viewer\'s imagination with thoughts like, \'Oh, how stunning will s/he look in it!\' This connection inevitably leads to conversions!
                                        
                                        Start boosting your sales with Color Clipping\'s expertise.')
                                        
                                
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section-2 title bg-white">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Mastering Color & Tone Precision
                            ')</h3>
                        <p class="mt-2">@lang('Discover our expertise in image touch-ups! Explore our dazzling jewelry photo collection')</p>
                    </div>
                </div>
                  
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img">
                                <a href="{{asset('front-assets/images/jewellary/img1.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img1.webp')}}" alt="">
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
                                <a href="{{asset('front-assets/images/jewellary/img2.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img2.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img2">
                                <a href="{{asset('front-assets/images/jewellary/img9.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img9.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4   d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img3">
    
                                <a href="{{asset('front-assets/images/jewellary/img10.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img10.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img4">
                                <a href="{{asset('front-assets/images/jewellary/img4.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img4.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img5">
                                <a href="{{asset('front-assets/images/jewellary/img5.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img5.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img6">
                                <a href="{{asset('front-assets/images/jewellary/img6.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img6.webp')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img7">
                                <a href="{{asset('front-assets/images/jewellary/img7.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img7.webp')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img8">
                                <a href="{{asset('front-assets/images/jewellary/img8.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/jewellary/img8.webp')}}" alt="">
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
                    <h3>@lang('Introducing Jewelry Retouching Services: Unlocking Value-Based Pricing!')</h3>
                    <p class="text-max-800">@lang('Get top-quality at unbeatable prices! Customize your orders without hidden fees. Transparent and affordable pricing." Your priority, our promise.')</p>
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

    {{-- testimonial --}}
    @include('layouts.include.testimonial')
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

@push('style')
<style>
    /* jewelary-section-start */
.img-box{
  position: relative;
  /* height: 250px;
  width: 350px; */
  overflow: hidden;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  cursor: pointer;
}
.img-box-1{
   border-top-right-radius: 10%;
  border-bottom-left-radius: 10%;
 
}
.img-box-2{
  border-top-left-radius: 10%;
  border-bottom-right-radius: 10%;
}
.img-box img{
  width: 100%;
  height: 100%;
  transition: all 500ms ease-in-out;
}
.img-box .overlay{
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background: rgba(93, 174, 221, 0.685);
  opacity: 0;
  visibility: hidden;
  text-align: center;
} 
.img-box .overlay span a{
  color: #fff;
  font-size: 30px;
}
.img-box:hover .overlay{
  opacity: 1;
  visibility: visible;
}

.j-btn {
  border: none;
  background-color: rgba(255, 187, 0, 0.979);
  padding: 15px 50px;
  border-radius: 10px;
  transition: .5s;
}
.j-btn:hover{
 background-color: rgb(219, 144, 4);
}
.j-btn a{
  color: #000;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
}
.j-btn a i{
  margin-left: 5px;
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
