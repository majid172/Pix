<footer class="odd">
    <!-- Footer [links] -->
    <section id="footer" class="footer">
        <div class="container">
            <div class="row items footer-widget">
                <div class="col-12 col-lg-5 p-0">
                    <div class="row">
                        <div class="branding col-12 item">
                            <div class="brand">
                                <a href="/" class="logo">
                                    <img src="{{asset('assets/images/logo_footer.png')}}" alt="Pix Clipping logo" >
                                </a>
                            </div>
                            <p class="test-center">Welcome to PixClipping, where excellence meets efficiency! We bring you unparalleled outsourcing solutions tailored to elevate your business. Embrace cost-effective efficiency with PixClipping. Join us today and experience the difference expertise makes!</p>
                            <ul class="navbar-nav social share-list mt-0 ml-auto">
                                <li class="nav-item">
                                    <a href="https://www.instagram.com/pixclipping/?igshid=MmIzYWVlNDQ5Yg==" class="nav-link" target="_blank"><i class="icon lab la-instagram ml-0" ></i></a>
                                </li>
                               <li class="nav-item">
                                   <a href="https://www.facebook.com/profile.php?id=100091497998682" class="nav-link" target="_blank"><i class="icon lab la-facebook"></i></a>
                               </li>
                               <li class="nav-item">
                                   <a href="https://www.linkedin.com/" class="nav-link"><i class="icon lab la-linkedin"></i></a>
                               </li>
                               <li class="nav-item">
                                   <a href="https://twitter.com/" class="nav-link"><i class="icon lab la-twitter"></i></a>
                               </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 p-0">
                    <div class="row">
                        <div class="col-12 col-lg-4 item">
                            <h4 class="title">@lang('Important Links')</h4>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{route('index')}}" class="nav-link footer_link">
                                        @lang('Home')
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about-us')}}" class="nav-link footer_link">
                                        @lang('About')
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('terms_condition')}}" class="nav-link footer_link">

                                        @lang('Terms & Conditions')
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link footer_link"> @lang('Blogs')</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('faq')}}" class="nav-link footer_link"> @lang('FAQ')</a>
                                </li>
                                <li class="nav-item mt-4" id="message_btn">
                                    <a href="{{route('contact')}}" class="mt-4"><i class="las la-comment me-2"></i>SEND A MESSAGE</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4 item">
                            <h4 class="title">Our Services</h4>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{route('services.slug','clipping-path')}}" class="nav-link footer_link">Clipping Path</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services.slug','background-remove')}}" class="nav-link footer_link">Background Remove</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services.slug','image-masking')}}" class="nav-link footer_link">Image Masking</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services.slug','ghost-mannequin')}}" class="nav-link footer_link">Ghost Mannequin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services.slug','photo-retouching')}}" class="nav-link footer_link">Photo Retouching</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4 item">
                            <h4 class="title">Popular Tags</h4>
                            <a href="{{route('project.proposal')}}" class="badge tag">Project Proposal</a>
                            <a href="{{route('free-trail')}}" class="badge tag">Free Trail</a>
                            <a href="{{route('workflow')}}" class="badge tag">Workflow</a>
                            <a href="{{route('price')}}" class="badge tag">Price</a>
                            <a href="#" class="badge tag">Order Now</a>
                            <a href="{{route('portfolio')}}" class="badge tag">@lang('Portfolio')</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <section id="copyright" class="p-3 copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                    <p>Enjoy the low price. We are tracking any intention of piracy.</p>
                    <!--
                        Suggestion: Replace the text above with a description of your website.
                     -->
                </div>
                <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                    <p>© {{date('Y')}} Powered by <a href="{{route('home')}}" target="_blank" style="color:#f8ed4a">PIX CLIPPING LTD</a>.</p>
                </div>
            </div>
        </div>
    </section>

</footer>

<style>
    #message_btn a{
        border: 2px solid  #f8ed4a;
        color: #f8ed4a;
        padding: 15px 20px;
    }

    #message_btn a:hover{
        background: #f8ed4a;
        color: var(--primary-color);
    }
</style>
    
