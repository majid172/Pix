@extends('layouts.frontend.app')

@section('content')
    <!-- Dedicated to exceeding expectation-->
    <section class="highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/shadow/drop-shadow.png" class="fit-image" alt="Jewelry Retouch">
                </div>
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt" style="opacity: 0.7; font-weight: 500;">{{isset($title)?$title :''}} Services</h3>
                            <h2 class="text-secondary">Experience the magic of lifelike: <span class="text">Shadow</span></h2>
                            <p>@lang('Enhance your images with expertly crafted shadows, for a naturally vivid and authentically beautiful photo finish.')</p>
                            <a href="{{route('free-trail')}}" target="_blank" class="btn primary-button d-inline-block me-2">FREE TRAIL <i class="las la-angle-right"></i></a>
                            <a href="{{route('home')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features -->
    <section id="featured" class="section-1 bg-white  white offers">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-calendar"></i>
                        <h5>@lang('5000k/Day')</h5>
                        <p>@lang('Transform your images with high-volume, lifelike shadow making services.')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <i class="icon las la-clock"></i>
                        <h5>12 Hours</h5>
                        <p>@lang('Save your time - receive stunning images in just 12 hours!"
                            ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        
                        <i class="icon lab la-uniregistry"></i>
                        <h5>Unlimited</h5>
                        <p>@lang('Limitless revisions, lightning-fast delivery, and devoted support – guaranteed.')
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
                <div class="col-12 col-md-6">
                    <style>
                        h1{
                            font-size: 3rem;
                        }
                    </style>
                    <h1>High-Quality<br> Shadow Creation Service</h1>
                </div>
                <div class="col-12 col-md-6 gx-5">
                    <div class="row intro">

                        <div class="col-12 p-0">
                            <h4 class="featured alt text-secondary">@lang('We provice everything you need')</h4>
                            <div class="paragraph">
                                <p>@lang('Experience true quality in photo editing with us. Our unwavering commitment to maintaining top-tier editing standards is matched only by our proactive workflow. Timely delivery is our promise, ensuring you never miss a project deadline. Trust us to enhance your images, garnering the attention they deserve.')</p>
                                <u></u>
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

                                <p>Obtain high-quality product images quickly and affordably.
                                </p>
                                
                            </div>
                            
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section-1 title offers pb-5">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('What Shadow Effect Services We Have?') </h3>
                    <p class="text-max-800 ">@lang('Tailor-made shadows crafted to your precise needs and photo requirements. Explore our range of shadow making services and choose the perfect option for your visuals.')</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <div class="card-box p-0">
                        <img class="card-img-top lazyloaded" src="{{asset('front-assets/images/shadow/original_shadow.png')}}">
                        <div class="card-body">
                            <h4 class="text-secondary">Original Shadow </h4>
                            <p class="mb-0">Elevate the appeal of your images with a carefully crafted natural shadow that enhances the overall attractiveness of your product.
                            </p>
                        </div>

                    
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 mb-4">
                    <div class="card-box p-0">
                        <img class="card-img-top lazyloaded" src="{{asset('front-assets/images/shadow/drop_shadow.png')}}">
                        <div class="card-body">
                            <h4 class="text-secondary">Drop Shadow</h4>
                            <p class="mb-0">Experience the transformative touch of our retouchers, adding depth and dimension to your photos based on the size and shape of the objects.</p>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-4 mb-4">
                    <div class="card-box p-0">
                        <img class="card-img-top lazyloaded"  alt="Baby girl image masking with before after" src="{{asset('front-assets/images/shadow/reflection_shadow.png')}}">
                        <div class="card-body">
                            <h4 class="text-secondary">Reflection Shadow </h4>
                            <p class="mb-0">Capture mesmerising reflective mirror images of objects in a pristine environment, bathed in impeccable lighting.</p>
                        </div>
                    </div>
                </div>
            </div>
                
               
        </div>
    </section>


    <!-- Benefits -->
    <section class=" bg-light">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('How We Execute Task')
                        </h3>
                        <p class=" mt-2">@lang('Our expert team employs time-proven retouching techniques to craft images with a stunningly realistic look.
                            ')</p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-12 col-md-6">
                        <img src="/front-assets/images/shadow/mocup.png" class="fit-image" alt="Jewelry Retouch">
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
    <section class="section-2 ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Professional Shadow Making Service
                            ')</h3>
                        <p class="mt-2 ">@lang('Make your product images shine with excellence and professionalism. By carefully considering the light source and skillfully cleaning up shadows, we bring your images to life, making them stand out against the background. Don\'t just take our word for it, see the captivating samples yourself.')</p>
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
    <section id="pricing " class="section-1 title  plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Shadow Making Service Cost')</h3>
                    <p class="text-max-800 ">@lang('Achieve effortless natural shadows in your images, no editing hassle. Enjoy quality at a budget-friendly price, no additional fees!')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/clipping_path/price/simple.png')}}" class="icon" alt="pricing icon">
                       
                        <h4>@lang('Simple')</h4>
                        <span class="price">@lang('$0.20')</span>
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
                        <span class="price">@lang('$0.30')</span>
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
                        <span class="price">@lang('$0.50')</span>
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
