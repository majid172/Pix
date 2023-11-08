@extends('layouts.frontend.app')
@section('content')

    <section class="highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h1>@lang('Maximise Efficiency')</h1>
                            <p>@lang('Affordable Photo Post-Processing. Elevate your business by freeing up time from photo editing services. Our dedicated team works tirelessly to boost your workflow speed.')</p>
                            <a href="{{route('free-trail')}}" target="_blank" class="btn primary-button d-inline-block me-2">@lang('FREE TRAIL') <i class="las la-angle-right"></i></a>
                            <a href="{{route('register')}}" target="_blank" class="btn get_start_btn border-1 d-inline-block">@lang('GET STARTED') <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{asset('/front-assets/images/home/Home2.png')}}" class="fit-image" alt="Jewelry Retouch">
                </div>
                
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="featured" class="section-1  bg-white offers">
        <div class="container">
            <div class="row items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class=" text-center">
                        <i class="icon las la-calendar"></i>
                        <h5>@lang('Customised Editing')</h5>
                        <p>@lang('Get precise, customised photo editing services that meet your exact specifications ')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="text-center">
                        <i class="icon las la-clock"></i>
                        <h5>Simple Dashboard</h5>
                        <p>@lang('Effortlessly Manage Your Orders in One Convenient Location')
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="text-center">
                        <i class="icon lab la-uniregistry"></i>
                        <h5>@lang('Instant Support')</h5>
                        <p class="text-center">@lang('Connect with Our Rapid-Response Support Representative in Just 10 Seconds')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dedicated to exceeding expectation-->
    <section id="about" class="section-1 plans ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h3 class="featured alt text-secondary">Dedicated to Exceeding Expectation.</h3>
                            <p class="paragraph">Pix Clipping is dedicated to saving time for photographers, agencies, and studio owners through our expert photo retouching services. With a track record of editing over 1 million images, we have proudly served more than 500 satisfied clients worldwide. Trust us to assist you with exceptional photo retouching services that enhance the visual appeal of your work.</p>
                        </div>
                    </div>
                    <div class="row items">
                        <div class="col-12 p-0">
                            <ol class="services-list">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Retouch as necessary</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Save time when editing.</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Send out pictures on schedule.</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">affordable pricing</li>
                                    </div>
                                    <div class="col-lg-6">

                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">24/7 live assistance</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">safe payment portal</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Work based on projects</li>
                                    </div>
                                </div>


                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <a href="/front-assets/images/home/Homepage1.png">
                        <img src="{{asset('/front-assets/images/home/homepage1.png')}}" class="fit-image rounded" alt="Dedicated to Exceeding Expectation">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Services -->
    <section id="portfolio-grid" class="showcase portfolio blog-grid filter-section title bg-white">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Effortlessly Achieve Your Editing Needs')</h3>
                        <p class="mt-2">Discover the ideal photo editing services to transform your images into masterpieces. Elevate your visual storytelling today.</p>
                    </div>
                </div>
                <div class="row">
                    <!-- Nav tabs -->
                    <div class="">
                        <ul class="nav nav-tabs nav-fill" style="box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px; padding: 0px 10px;">
                            <li class="nav-item">
                                <a class="nav-link active flex align-items-center" data-bs-toggle="tab" href="#editing">
                                    <i class="icon las la-edit d-inline-block"></i> Editing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link flex align-items-center " data-bs-toggle="tab" href="#retouching"><i class="icon las la-layer-group d-inline-block"></i> Retouching</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link flex align-items-center " data-bs-toggle="tab" href="#ecommerce"><i class="icon las la-cart-arrow-down d-inline-block"></i> E-commerce</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link flex align-items-center gap-2" data-bs-toggle="tab" href="#photography"><i class="icon las la-camera-retro d-inline-block "></i> Photography</a>
                            </li>
                        </ul>
                    </div>


                    <!-- Tab panes -->
                    <div class="tab-content mt-5">
                        <div class="tab-pane container active" id="editing">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row services">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/editing_icon/clipping_icon.png')}}" alt="...." style="width:80%">
                                            
                                            </div>
                                            <div class="col-9 py-2">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','clipping-path')}}"><h4 class="text-primary" style="font-size:1.1rem;  margin: 10px 0px 10px 0px; text-align: left;">@lang('Clipping Path')</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;"> Hand-drawn photo clipping service expertly shapes and isolates subjects for a perfect cut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row services">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/editing_icon/bg_remove.png')}}" alt="...." style="width:80%">
                                            </div>
                                            <div class="col-9 py-2">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','background-remove')}}"><h4 class="text-primary" style="font-size:1.1rem;  margin: 10px 0px 10px 0px; text-align: left;">Background Remove</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">Refine your images by eliminating background distractions, allowing your subject to shine.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row ">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/editing_icon/shadow_icon.png')}}" alt="...." style="width:80%">
                                            </div>
                                            <div class="col-9 py-2">
                                                <div class="featured services">
                                                    <a href="{{route('services.slug','shadow-making')}}"><h4 class="text-primary " style="font-size:1.1rem; margin: 10px 0px 10px 0px; text-align: left;">Shadow Making</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">Enhance realism by adding shadows for natural-looking images.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row services">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/editing_icon/masking_icon.png')}}" alt="...." style="width:80%">
                                            </div>
                                            <div class="col-9 py-2">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','image-masking')}}"><h4 class="text-primary" style="font-size:1.1rem;  margin: 10px 0px 10px 0px; text-align: left;">@lang('Image Masking')</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">@lang('Capture pristine images by masking hair, fur, and intricate details for a polished and sharp look.')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- img card 2nd collumn--}}
                                <div class="col-lg-4">
                                    <img src="/front-assets/images/home/home_service_tab.png" class="fit-image" alt="editing"" style="height: 50%">
                                </div>


                                <div class="col-lg-4">
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/editing_icon/ghost_icon.png')}}" alt="...." style="width:80%">
                                            </div>
                                            <div class="col-9 py-2">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','ghost-mannequin')}}"><h4 class="text-primary" style="font-size:1.1rem;  margin: 10px 0px 10px 0px; text-align: left;">@lang('Ghost Mannequin')</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">Enhance visual impact by replacing mannequins with tailored fits.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/editing_icon/multi_icon.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9 py-2">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','multi-clipping-path')}}"><h4 class="text-primary" style="font-size:1.1rem;  margin: 10px 0px 10px 0px; text-align: left;">Multi Clipping Path</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px; font-size: 0.900rem;">@lang('Capture desired colours, objects, and image elements effortlessly.')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/editing_icon/color_icon.png')}}" alt="...."style="width:80%">
                                            </div>

                                            <div class="col-9 py-2">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','photo-recoloring')}}"><h4 class="text-primary" style="font-size:1.1rem; margin: 10px 0px 10px 0px; text-align: left;">Photo Recoloring</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">@lang('Capture a single photo, transform it with endless colour possibilities.')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/editing_icon/school_icon.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9 py-2">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','school-photo-editing')}}"><h4 class="text-primary" style="font-size:1.1rem; margin: 10px 0px 10px 0px; text-align: left;">School Photo Editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">@lang('Enhance school portraits and group photos with your unique touch.
                                                        ')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Retouching --}}
                        <div class="tab-pane container fade" id="retouching">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/product.png')}}" alt="...." style="width:80%">
                                            </div>

                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','photo-retouching')}}"><h4 class="text-primary" style="font-size:1rem; margin: 10px 0px 10px 0px; text-align: left;">Photo Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size:0.900rem; ">@lang('Enhance your images with expert retouching through advanced adjustments tailored to your preferences.')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/jewelary.png')}}" alt="...." style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','jewelry-retouch')}}"><h4 class="text-primary" style="font-size:1rem; margin: 10px 0px 10px 0px; text-align: left;">Jewelry Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size:0.900rem; ">@lang('Capture brilliant photos, preserving every natural detail in stunning clarity.')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/product.png')}}" alt="...." style="width:80%">
                                                
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','product-photo-retouching')}}"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">Product Photo Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size:0.900rem; ">@lang(' Perfect your product photos with tailored retouching for a stunning, flawless appearance.')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/beauty.png')}}" alt="...." style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','beauty-retouching')}}"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">Beauty Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">@lang('Grab attention with stunning, glamorous visuals!')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="/front-assets/images/home/retouching.webp" class="fit-image" alt="editing" style="height: 75%">
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/headshot.png')}}" alt="...." style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','headshot-retouching')}}"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">Headshot Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">@lang('Capture flawless corporate/editorial headshots for a polished image.')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/newborn.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','newborn-baby-photo-editing')}}"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">Newborn Baby Photo Editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">@lang('Enhance child images by correcting red skin and imperfections for a lovely finish.
                                                        ')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/food.png')}}" alt="...." style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','food-photo-retouching')}}"><h4 class="text-primary" style="font-size:1rem; ; margin: 10px 0px 10px 0px; text-align: left;">Food Photo Retouching</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">@lang('Create irresistible food visuals tailored to your taste.')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/realestate.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','real-estate-photo-editing')}}"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">Real Estate Photo Editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem; ">@lang('Craft captivating representations of infrastructures, buildings, and interiors.
                                                        ')</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="ecommerce">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <img src="/front-assets/images/home/ecommerce-service.png" class="fit-image" alt="editing" style="width: 80%; height:80%">
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/ecommerce/image-gallery.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','essential-editing')}}"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">Essential Editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size:0.900rem; ">We provided complete e-commerce editing as per your preferences.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/ecommerce/social.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','amazon-e-bay-shopify')}}"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">Amazon, e-Bay, Shopify Ready</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size:0.900rem; ">Retouch as the image requirements of eCommerce marketplaces.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/ecommerce/ecommerce.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','ecommerce-360-degree-editing')}}"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">E-commerce 360 degree editing</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size:.900rem; ">Create symmetrical 360 degree product image adjusting its perspective.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/ecommerce/performance.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="{{route('services.slug','image-optimization')}}"><h4 class="text-primary" style="font-size:1rem; margin: 10px 0px 10px 0px; text-align: left;">Image Optimization</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size:0.900rem; ">Get web-ready images as per your customized requirements.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="photography">
                            <div class="row g-5">
                                <div class="col-md-8">
                                    <img src="/front-assets/images/service/icon/photography/main.png" class="fit-image" alt="editing" style="width: 80%; height:80%">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-box my-3 p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">

                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/photography/photo.png')}}" alt="...."style="width:80%">
                                            </div>

                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="javascript:void(0)"><h4 class="text-primary" style="font-size:1rem; margin: 10px 0px 10px 0px; text-align: left;">Product Photography</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">We capture product photos keeping its color and natural details.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box my-3  p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/photography/shirt.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="javascript:void(0)"><h4 class="text-primary" style="font-size:1rem; margin: 10px 0px 10px 0px; text-align: left;">Apparels Photography</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">Need your brand with our professional apparel photography.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/jewelary.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="javascript:void(0)"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">Jewelry Photography</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">Capture luxurious jewelry ornaments images.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-box p-2" style="background-color: #fff; border-radius: 5px; margin-bottom: 10px;">
                                        <div class="row">
                                            <div class="col-3 py-4">
                                                <img src="{{asset('/front-assets/images/service/icon/photography/school.png')}}" alt="...."style="width:80%">
                                            </div>
                                            <div class="col-9">
                                                <div class="featured">
                                                    <a href="javascript:void(0)"><h4 class="text-primary" style="font-size:1rem;  margin: 10px 0px 10px 0px; text-align: left;">School Photography</h4></a>
                                                    <p style="text-align: left; margin: 10px 0px 10px 0px;font-size: 0.900rem;">@lang('We shoot portraits or groups for entire school in your preferred style.')</p>
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
        </div>
    </section>


        <section id="pricing " class="section-1 plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3>@lang('Discover Your Ideal Editing Solutions')</h3>
                    <p class="text-max-800">@lang('Choose the perfect plan tailored to your budget, timeline, and needs. We\'re ready to address all your requirements. Let\'s talk!')</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/price_icon/free.png')}}" alt="price_icon" style="width: 50px;">
                        <h4 class="text-secondary">@lang('Free')</h4>
                        <span class="price text-primary">@lang('$0.00')</span>
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
                        <img src="{{asset('front-assets/images/price_icon/medium.png')}}" alt="price_icon" style="width: 50px;">
                        <h4 class="text-secondary">@lang('As Low As')</h4>
                        <span class="price text-primary">@lang('$5.00 - $8.99')</span>
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
                        <img src="{{asset('front-assets/images/price_icon/complex.png')}}" alt="price_icon" style="width: 50px;">
                        <h4 class="text-secondary">@lang('Large Volumn')</h4>
                        <span class="price text-primary">@lang('Talk to us')</span>
                        <ul class="list-group list-group-flush mt-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center text-left">
                                <span>@lang('Large Volumn')</span>
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

    <section class="section-2 bg-light ">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro ">
                    <div class="col-lg-12 heading">
                        <h3 class="mb-0">@lang('Simplify Editing: Easy, Efficient Steps')
                        </h3>
                        <p class="mt-2">@lang('Create your account, send us your images, and download your professionally edited images within the allotted time – it truly is that effortless.')
                        </p>
                    </div>
                </div>
                <div class="row align-items-center gx-5">
                    <div class="col-lg-7 col-md-6">
                        <a href="/front-assets/images/home/Home3.png">
                            <div class="mask-radius"></div>
                            <img src="/front-assets/images/neon/workflow2.png" class="fit-image" alt="Institutional">
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="row items">
                            <div class="col-12 p-0 ">
                                <div class="card-box mb-3 bg-white">
                                    <div class="row item">
                                        <div class="col-2 col-md-2">
                                           <img src="{{asset('front-assets/images/home/icon/list.gif')}}" alt="">
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <h4 class="text-primary" style="text-align: left; margin: 0px 0px 0px 0px">Place order</h4>
                                            <p class="paragraph p-0">Fill up form, write instructions and select images to create order</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box bg-white mb-3">
                                    <div class="row item">
                                        <div class="col-2 col-md-2">
                                           <img src="{{asset('front-assets/images/home/icon/credit-card.gif')}}" alt="coin">
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <h4 class="text-primary" style="text-align: left; margin: 0px 0px 0px 0px">Make Payment</h4>
                                            <p class="paragraph">Pay against your order Invoice to start image processing and relax.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box bg-white mb-3">
                                    <div class="row item">
                                        <div class="col-2 col-md-2">
                                            <img src="{{asset('front-assets/images/home/icon/download.gif')}}" alt="coin">
                                        </div>
                                        <div class="col-9 col-md-9">
                                            <h4 class="text-primary mb-0" style="text-align: left; margin: 0px 0px 0px 0px">Download Output</h4>
                                            <p class="paragraph"">Download the final edited images and give us your feedback.</p>
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

    <!-- About [video] -->



   
    <!-- Dedicated to exceeding expectation-->


    <section class="section-2 speciality bg-light">
        <div class="overflow-holder">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="row intro">
                            <div class="col-12 p-0 ">
                                <h3 class="text-secondary">@lang('Effortlessly navigate our ') <span class="text">@lang('user-friendly portal!')?</span></h3>
                                <p>@lang('Unlock the ability to separate subjects from images as needed. Our skilled professionals accurately cut out single or group subjects, delivering exceptional results in record time.')</p>
                            </div>

                            <div class="row mt-4">
                                <strong>Features: </strong>
                                <div class="col-lg-6 col-sm-6">
                                    <ol class="services-list">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">User interface</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt=".."class="check_img_icon">@lang('Presumable upload')</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">@lang('On fly navigation')</li>
                                    </ol>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <ol class="services-list">
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">Easy Sorting</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" class="check_img_icon">On fly Navigation</li>
                                        <li><img src="{{asset('front-assets/images/home/icon/check-mark_1.png')}}" alt="" class="check_img_icon">Live Order Status</li>
                                    </ol>
                                </div>
                            </div>
                            <a href="{{route('register')}}" target="_blank" class="btn primary-button d-inline-block mt-3">Create Account <i class="las la-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <a href="/front-assets/images/home/Home2.png">
                            <img src="/front-assets/images/home/Homepage2.png" class="fit-image" alt="About Us">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('action-blog')
@endsection

@section('page-script')
    <script>
        $(function (){
            $(document).find('input[value=editing]').parent().click()
        })

    </script>
@endsection

