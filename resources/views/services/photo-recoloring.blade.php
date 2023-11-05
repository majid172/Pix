@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('front-assets/images/photo_recolor/main.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">@lang('Professional Image Recoloring Services
                                ') : <span class="text">@lang(' Maximise Savings, Boost Productivity!')</span></h2>
                            <p>@lang('Capture one photo, effortlessly transform it into numerous colours, all while maintaining a genuine and authentic appearance. Our expert photo editing ensures consistent, professional quality.')</p>
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
                        <h5>@lang('1250/Day')</h5>
                        <p>@lang('High-volume, premium product image recoloring services available.
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>@lang('24 Hours')</h5>
                        <p>@lang('Save time with our quick image delivery - within 24 hours!') </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>@lang('Unlimited')</h5>
                        <p>@lang('Unlimited revisions, speedy delivery, and dedicated support - all guaranteed!')
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
                <div class="col-12 col-lg-6">
                    <style>
                        h1{
                            font-size: 3rem;
                        }
                    </style>
                    <h1>@lang('Top-notch Image Recoloring Services ')</h1>
                </div>
                <div class="col-12 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">@lang('Your all-in-one solution provider')</h4>
                            <div class="paragraph">
                                <p>@lang('Experience the magic of Pix Clipping: Recolorize old and new photos just the way you want. Choose your desired colours, instruct us, and receive your beautifully transformed images promptly!
                                    ')</p>
                                <u></u>
                            </div>
                            
                            <ol class="services-list">
                                <div class="row">
                                    <div class="col-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Accurate color path')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Recolor as pantone')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Color tone adustment')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Crop & resizing')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Adustable color')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Multi color in image')</li>
                                    
                                    </div>
                                    
                                    <div class="col-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Image Formate') </li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Camera RAW Correction')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Customizable pricing')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('24/7 Dedicated support')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Bulk image processing')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('Black & White photo')</li>
                                    
                                    </div>
                                </div>
                                
                            </ol>
                            <p class="text-secondary">@lang('Recolor your photos effortlessly! Save time and energy with our flexible, customizable service.')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits -->
    <section class="section-2  bg-white ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('Precise Photo Recoloring')</h3>
                        <p class="mt-2 ">@lang('No worries about colour preference! We\'ll achieve the perfect blend for authentic results.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-lg-6 mb-4">
                        <div class="card-box p-0"> 
                            <img src="/front-assets/images/photo_recolor/recolor.png" class="fit-image" alt="Masking">
                        </div>
                       
                    </div>
                    <div class="col-lg-6 col-12 ">
                        <div class="row intro">
                            <div class="card-box text-left ">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/photo_recolor/save.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Save time

                                                ')</h5>
                                            <p class="justify-content-center">@lang('Capture one product in various colours and unwind - no need to photograph each item individually. Simplify your process!
                                                ')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3" >
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/ghost/icon/target.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Recolor as you need
                                                ')</h5>
                                            <p >@lang('our expert team ensures precise colour reproduction for your product photos, following your instructions to perfection.
                                                ')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/ghost/icon/output.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Precision of colours
                                                ')</h5>
                                            <p>@lang('we ensure precise colour matching from the Pantone chart while maintaining 100% authenticity of the actual products.')</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="benefit-card">
                                            <img src="{{asset('front-assets/images/photo_recolor/award.gif')}}" alt="">
                                            <h5 class="text-secondary mt-0">@lang('Quality work
                                                ')</h5>
                                            <p>@lang('Transform your images with our photo recoloring services, restoring them to their original brilliance.
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


    {{-- process --}}
    <section class="section-2 bg-light title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('Recoloring: Unveiling the Magic! Discover how it works')
                        </h3>
                        <p class="mt-2 ">@lang('Experience vibrant photo transformations! We expertly enhance image colours while preserving the natural essence.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/photo_recolor/mockup.png" class="fit-image" alt="Masking">
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0">
                            
                                <p class="paragraph">
                                   @lang('Get perfect product images with striking colours to catch viewers\' attention! Our skilled retouchers meticulously adjust colour, tones, and temperature to match the product\'s real-life appearance, pixel by pixel.
                                   
                                   ')
                                   <br> <br>
                                   @lang('We tailor our photo recoloring process to your preferences, delivering lifelike representations of your products in exact and genuine colours.')

                                   <br><br>
                                   @lang('FSave time and money with our image recoloring services, receiving multiple images with striking colours and perfect saturation, just as you desire.')
                                </p>

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
                        <h3 class="mb-0">@lang('Check out our stunning recoloring samples!')</h3>
                        <p class="mt-2 ">@lang('Discover your perfect colour match through expert retouching. Explore our latest projects.')</p>
                    </div>
                </div>
                  
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box ">
                            <div class="jewelary-img">
                                <a href="{{asset('front-assets/images/clipping_path/partner/flamepan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/flame.png')}}" alt="">
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
                                <a href="{{asset('front-assets/images/clipping_path/partner/Greenerypan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/greenery.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img2">
                                <a href="{{asset('front-assets/images/clipping_path/partner/Hazelnutpan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/Hazelnut.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4   d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img3">
    
                                <a href="{{asset('front-assets/images/clipping_path/partner/Islandpan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/Island.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img4">
                                <a href="{{asset('front-assets/images/clipping_path/partner/Lapispan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/Lapis.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img5">
                                <a href="{{asset('front-assets/images/clipping_path/partner/Palepan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/Pale.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img6">
                                <a href="{{asset('front-assets/images/clipping_path/partner/Pinkpan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/Pink.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <div class="jewelary-box">
                            <div class="jewelary-img7">
                                <a href="{{asset('front-assets/images/clipping_path/partner/Primrosepan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/Primrose.png')}}" alt="">
                                </a>
                            </div>
                            <div class="jewelary-img8">
                                <a href="{{asset('front-assets/images/clipping_path/partner/Islandpan.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                    <img src="{{asset('front-assets/images/clipping_path/partner/Island.png')}}" alt="">
                                </a>
                            </div>
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
                        <h3 class="mb-0">@lang('Professional Image Recoloring Services - Unbeatable Prices!')
                        </h3>
                        <p class="mt-2 ">@lang('Introducing our unparalleled photo recoloring service: top-quality images, no delays, and fully customizable pricing. No extra charges.
                            ')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        
                      <div class="side-box price_box py-5">
                        <div>
                               <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">$0.79</h1>
                            <p>@lang('as low as')</p>
                        </div>
                        <hr>
                        <p class="price-text">@lang('Transform your product photos with us and experience 100% satisfaction. Start recoloring today!')</p>
                        <a href="#" class="price_free_trial">@lang('Free Trial') <i class="las la-angle-double-right" style="font-size:20px"></i></a>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/coin.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Budget-Friendly Rates
                                        ')</h5>
                                    <p class="justify-content-center">@lang('High-quality retouching at the most competitive price, with no overcharging.
                                        ')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/offer.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Discount on Big Volume')</h5>
                                    <p class="justify-content-center">@lang('Get up to 30% off project work for loyal clients!')</p>
                                </div>
                            </div>
                        </div>

                        <div class="row intro">
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/revision.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Multiple Free Revisions')</h5>
                                    <p class="justify-content-center">@lang('Customise your retouching needs with our personalised touch-ups.')</p>
                                </div>
                            </div>
                            <div class="col-lg-6 p-0">
                                <div class="benefit-card">
                                    <img src="{{asset('front-assets/images/photo_recolor/icon/payment.gif')}}" alt="">
                                    <h5 class="text-secondary mt-0">@lang('Flexible Payment Policy
                                        ')</h5>
                                    <p class="justify-content-center">@lang('Discover convenient payment options: pre-paid, post-paid, and pay as you go. Choose what suits you best!
                                        ')</p>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Interest to online -->


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
                                <div class="flip-card-back   ">
                                  
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
                                <div class="flip-card-back" style="margin: 0 auto;">
                                  
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
                            <div class="flip-card-back" style="text-align: center;">
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
.price_box{
    background: linear-gradient(45deg, #ffa9a9, #64a1e0);
    color: white;

}

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