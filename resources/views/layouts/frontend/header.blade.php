
<header id="header">
    <!-- Navbar -->
    <div class="top-bar fixed-to bg-white">
        <div class="container">
           <div class="d-flex justify-content-between">
              <div class="contacts">
                <i class="fas fa-envelope"></i><span>info@pixclipping.com</span>
                 <i class="fas fa-phone"></i><span>+31686135136</span>
              </div>
              <div class="right-side d-flex">
                 <i class="fas fa-globe"></i>
                 <select class="form-select" aria-label="Default select example">
                    <option selected>English</option>
                    <option value="1">Spanish</option>
                    <option value="2">Swedish</option>
                    <option value="3">Turkish</option>
                 </select>
                 <span class="bar"> | </span>
                 <a href="{{route('login')}}">Sign In</a>
              </div>
           </div>
        </div>
     </div>
    {{-- <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand sticky-header bg-white">
        <div class="container header ">


            <!-- Navbar Brand-->
            <a class="navbar-brand" href="/">
                <img src="/assets/images/logo.png" alt="Pix Clipping logo" style="height: 80px">
            </a>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                <li class="nav-item dropdown">
                    <a href="{{route('index')}}" class="nav-link">@lang('Home') </a>

                </li>
                <li class="nav-item"><a class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'about-us' ? 'active': ''}}" href="{{route('about-us')}}">@lang('About Us')</a></li>
                <li class="nav-item dropdown ">
                    <a href="#" class="nav-link">@lang('Services') <i class=" las la-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">@lang('Editing')<i class="las la-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{route('services.slug','clipping-path')}}" class="nav-link">@lang('Cliping Path')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','background-remove')}}" class="nav-link">@lang('Background Remove')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','shadow-making')}}" class="nav-link">@lang('Shadow Making')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','image-masking')}}" class="nav-link">@lang('Image Masking')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','ghost-mannequin')}}" class="nav-link">@lang('Ghost Mannequin')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','multi-clipping-path')}}" class="nav-link">@lang('Multi Clipping Path')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','photo-recoloring')}}" class="nav-link">@lang('Photo Recoloring')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','school-photo-editing')}}" class="nav-link">@lang('School Photo Editing')</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">@lang('Retouching')<i class="las la-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{route('services.slug','photo-retouching')}}" class="nav-link">@lang('Photo Retouching')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','jewelry-retouch')}}" class="nav-link">@lang('Jewellary Retouching')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','product-photo-retouching')}}" class="nav-link">@lang('Product Photo Retouching')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','beauty-retouching')}}" class="nav-link">@lang('Beauty Retouching')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','headshot-retouching')}}" class="nav-link">@lang('Headshot Retouching')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','newborn-baby-photo-editing')}}" class="nav-link">@lang('Newborn Baby Photo Editing')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','food-photo-retouching')}}" class="nav-link">@lang('Food Photo Retouching')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','real-estate-photo-retouching')}}" class="nav-link">@lang('Real Estate Photo Retouching')</a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">@lang('Ecommerce')<i class="las la-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{route('services.slug','essential-editing')}}" class="nav-link">@lang('Essential')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','image-optimization')}}" class="nav-link">@lang('Image Optimization')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','ecommerce-360-degree-editing')}}" class="nav-link">@lang('360 Degree')</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">@lang('Photography')<i class="las la-angle-right"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{route('services.slug','product-photography')}}" class="nav-link">@lang('Product Photography')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','jewelry-photography')}}" class="nav-link">@lang('Jewellary Photography')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','apparels-photography')}}" class="nav-link">@lang('Apparels Photography')</a></li>
                                <li class="nav-item"><a href="{{route('services.slug','school-photography')}}" class="nav-link">@lang('School Photography')</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li class="nav-item"><a href="{{route('workflow')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'workflow' ? 'active': ''}}">Workflow</a></li>
                <li class="nav-item"><a href="{{route('price')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'price' ? 'active': ''}}">Price</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'contact' ? 'active': ''}}">Contact</a></li>
            </ul>

            <!-- Navbar Icons -->
            <ul class="navbar-nav icons">
                <li class="nav-item">
                    <a href="https://www.instagram.com/" class="nav-link" data-toggle="modal" data-target="#search">
                        <i class="icon-magnifier"></i>
                    </a>
                </li>
                <li class="nav-item social">
                    <a href="https://twitter.com/" class="nav-link"><i class="icon-social-twitter"></i></a>
                </li>
                <li class="nav-item social">
                    <a href="" class="nav-link"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>

            <!-- Navbar Toggle -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar Action -->
            <ul class="navbar-nav action">
                <li class="nav-item ml-3">
                    <a href="javascript:void(0)" target="_blank" class="btn ml-lg-auto primary-button"><i class="las la-shopping-bag" style="font-size: 24px"></i>ORDER NOW</a>
                    <!--
                        Suggestion: Replace the purchase button above with a contact button.

                        <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button"><i class="icon-rocket"></i>CONTACT US</a>
                    -->
                </li>
            </ul>
        </div>
    </nav> --}}

    <nav class="navbar navbar-expand-lg navbar-light  bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/assets/images/logo.png" alt="Pix Clipping logo" style="height: 80px">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mx-auto">
                <ul class="navbar-nav items">
                    <li class="nav-item dropdown">
                        <a href="{{route('index')}}" class="nav-link">@lang('Home') </a>

                    </li>
                    <li class="nav-item"><a class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'about-us' ? 'active': ''}}" href="{{route('about-us')}}">@lang('About Us')</a></li>
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link">@lang('Services') <i class=" las la-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">@lang('Editing')<i class="las la-angle-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('services.slug','clipping-path')}}" class="nav-link">@lang('Cliping Path')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','background-remove')}}" class="nav-link">@lang('Background Remove')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','shadow-making')}}" class="nav-link">@lang('Shadow Making')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','image-masking')}}" class="nav-link">@lang('Image Masking')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','ghost-mannequin')}}" class="nav-link">@lang('Ghost Mannequin')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','multi-clipping-path')}}" class="nav-link">@lang('Multi Clipping Path')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','photo-recoloring')}}" class="nav-link">@lang('Photo Recoloring')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','school-photo-editing')}}" class="nav-link">@lang('School Photo Editing')</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">@lang('Retouching')<i class="las la-angle-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('services.slug','photo-retouching')}}" class="nav-link">@lang('Photo Retouching')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','jewelry-retouch')}}" class="nav-link">@lang('Jewellary Retouching')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','product-photo-retouching')}}" class="nav-link">@lang('Product Photo Retouching')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','beauty-retouching')}}" class="nav-link">@lang('Beauty Retouching')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','headshot-retouching')}}" class="nav-link">@lang('Headshot Retouching')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','newborn-baby-photo-editing')}}" class="nav-link">@lang('Newborn Baby Photo Editing')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','food-photo-retouching')}}" class="nav-link">@lang('Food Photo Retouching')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','real-estate-photo-retouching')}}" class="nav-link">@lang('Real Estate Photo Retouching')</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#ecommerce">@lang('Ecommerce')<i class="las la-angle-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('services.slug','amazon-e-bay-shopify')}}" class="nav-link">@lang('Amazon e-Bay Shopify')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','essential-editing')}}" class="nav-link">@lang('Essential Editing')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','image-optimization')}}" class="nav-link">@lang('Image Optimization')</a></li>
                                    <li class="nav-item"><a href="{{route('services.slug','ecommerce-360-degree-editing')}}" class="nav-link">@lang('E-commerce 360 degree editing')</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">@lang('Photography')<i class="las la-angle-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">@lang('Product Photography')</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">@lang('Jewellary Photography')</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">@lang('Apparels Photography')</a></li>
                                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">@lang('School Photography')</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item"><a href="{{route('workflow')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'workflow' ? 'active': ''}}">Workflow</a></li>
                    <li class="nav-item"><a href="{{route('price')}}" class="nav-link {{\Illuminate\Support\Facades\Route::current()->getName() === 'price' ? 'active': ''}}">Price</a></li>
                    
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link">@lang('Resources') <i class=" las la-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{route('contact')}}">@lang('Contact')</a>
                                <a class="nav-link" href="{{route('portfolio')}}">@lang('Portfolio')</a>
                               
                            </li>
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <ul class="navbar-nav icons">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                        <i class="las la-magnifier"></i>
                    </a>
                </li>
                <li class="nav-item social">
                    <a href="https://twitter.com/" class="nav-link"><i class="icon-social-twitter"></i></a>
                </li>
                <li class="nav-item social">
                    <a href="https://www.instagram.com/" class="nav-link"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav action">
                <li class="nav-item ml-3">
                    <a href="{{route('home.order.list')}}" target="_blank" class="btn ml-lg-auto primary-button"><i class="las la-shopping-bag" style="font-size: 24px"></i>ORDER NOW</a>
                    
                </li>
            </ul>

          </div>
        </div>
    </nav>

</header>

