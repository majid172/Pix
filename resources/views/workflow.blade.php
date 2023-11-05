@extends('layouts.frontend.app')

@section('content')

    <!-- Hero part-->
    <section class="highlights image-right">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            
                            <h2 class="text-secondary">@lang('Enhance Images With Simplified Post-Processing')</h2>
                            <p>@lang('Tailored to perfection, our process caters to your every need, ensuring a seamless journey from order to delivery.')</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/home/workflow1.png" class="fit-image rounded" alt="Dedicated to Exceeding Expectation">
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section id="featured" class="section-1  bg-light offers">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-12">
                    <h3 class="text-secondary">Why PixClipping?</h3>
                    <p class="text-max-800">Our customers are satisfied with the work we do. <br/>The greatest gratification is to receive recognition for what we have built.<br/> This motivates us to improve even more.</p>
                </div>
            </div>

            <div class="row align-items-center items mt-5 mb-3">
                <div class="col-sm-12 col-md-6 col-lg-3 item">
                    <div class="card no-hover text-center">
                        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <img src="{{asset('front-assets/images/workflow/dashboard.png')}}" alt="" style="width: 48px">
                            <h5>@lang('Easy dashboard')</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 item">
                    <div class="card no-hover text-center">
                        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <img src="{{asset('front-assets/images/workflow/features.png')}}" alt="" style="width: 48px">
                            <h5>Powerful features</h5>
                        </div>
                    </div>
                    
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 item">
                    <div class="card no-hover text-center">
                        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <img src="{{asset('front-assets/images/workflow/illustration.png')}}" alt="" style="width: 48px">
                             <h5>@lang('Excellent design')</h5>
                        </div>
                    </div>
                    
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 item">
                    <div class="card no-hover text-center">
                        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <img src="{{asset('front-assets/images/workflow/time-manager.png')}}" alt="" style="width: 48px">
                            <h5>@lang('Real-time Update')</h5>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>

    <!-- About [video] -->
    <section id="video" class="section-3 title  image-left bg-white">
        <div class="container">
            <div class="row intro justify-content-center text-center">
                <div class="col-12">
                    <h3 class="featured alt text-secondary">Effortless photo editing, simplified</h3>
                    <p>Seamless ordering, transparent transactions, and lightning-fast delivery; our <br/> dedicated team is here to ensure an exceptional experience.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <a href="/front-assets/images/home/Home3.png">
                        <div class="mask-radius"></div>
                        <img src="/front-assets/images/home/workflow2.png" class="fit-image" alt="Institutional">
                    </a>
                </div>
                <div class="col-12 col-md-6 pl-md-5">
                    <div class="row items align-items-center">
                        <div class="col-12 p-0">
                            <div class="row item mb-3">
                                <div class="col-12 col-md-2">
                                    <img src="{{asset('front-assets/images/workflow/upload.gif')}}" alt="upload_icon">
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 class="text-secondary" style="text-align: left; margin: 0px 0px 0px 0px">Order & Upload:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Complete form, include order details, provide instructions, and upload images.</p>
                                </div>
                            </div>
                            <div class="row item mb-3">
                                <div class="col-12 col-md-2">
                                    <img src="{{asset('front-assets/images/workflow/credit-card.gif')}}" alt="credit-card">
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 class="text-secondary" style="text-align: left; margin: 0px 0px 0px 0px">Invoice & payment:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Reviewing order details for invoice creation. Payment required to initiate order processing.</p>
                                </div>
                            </div>
                            <div class="row item mb-3">
                                <div class="col-12 col-md-2">
                                    <img src="{{asset('front-assets/images/workflow/download.gif')}}" alt="download_icon">
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 class="text-secondary" style="text-align: left; margin: 0px 0px 0px 0px">Processing order:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">With payment received, we promptly begin logging and sorting to edit images according to your instructions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="highlights image-right bg-light">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <h2 style="font-weight: 500;opacity: 0.7">Embrace productivity, unlock success."</h2>
                    <p style="letter-spacing:.5px;">Streamline photo editing, boost productivity, and effortlessly complete your Order.</p>
                    <a href="{{route('register')}}" target="_blank" class="btn ml-lg-auto primary-button">Create Account<i class="las la-angle-right"></i></a>
                </div>
                <div class="col-6">
                    <a href="/front-assets/images/news-1.jpg">
                        <img src="/front-assets/images/neon/workflow4.png" class="fit-image rounded" alt="Dedicated to Exceeding Expectation">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="section-3 highlights image-left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <a href="/front-assets/images/home/Home3.png">
                        <div class="mask-radius"></div>
                        <img src="/front-assets/images/home/workflow2.png" class="fit-image" alt="Institutional">
                    </a>
                </div>
                <div class="col-12 col-md-6 pl-md-5">
                    <div class="row items align-items-center">
                        <div class="col-12 p-0">
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                   <img src="{{asset('front-assets/images/workflow/output.png')}}" alt="output">
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 class="text-secondary" style="text-align: left; margin: 0px 0px 0px 0px">Finalising Output:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">QC management ensures order instructions are met, alerts you of final editing quality.</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <img src="{{asset('front-assets/images/workflow/review.png')}}" alt="output">
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 class="text-secondary" style="text-align: left; margin: 0px 0px 0px 0px">Download & Review:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Please download the final output and check if it meets your order requirements.</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2">
                                    <img src="{{asset('front-assets/images/workflow/revision.png')}}" alt="output">
                                </div>
                                <div class="col-12 col-md-9">
                                    <h4 class="text-secondary" style="text-align: left; margin: 0px 0px 0px 0px">Feedback / Revisions:</h4>
                                    <p style="text-align: left; margin: 10px 0px 0px 0px;">Share your satisfaction or request a redo.</p>
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
