@extends('layouts.frontend.app')

@section('content')
    @include('layouts.frontend.hero_section')
    <!-- About [image] -->
    <section id="about" class="section-1 highlights image-right">
        <div class="container">
            <div class="row my-5 py-5 gx-5">
                <div class="col-lg-5 col-md-5 align-self-center  text-md-left">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2 class="featured text-secondary alt">About Us</h2>
                            <p class="paragraph">@lang('Based in the Netherlands, we\'re a leading image editing and graphic design company serving clients in 50+ countries worldwide. Our dedicated team of 50+ skilled graphic designers operates around the clock, 365 days a year, in a state-of-the-art studio. With years of experience, we specialise in top-notch image editing services.
                                ')</p>
                        </div>
                    </div>
                    <div class="row items">
                        <div class="col-12 p-0">
                            <div class="row item">
                                <div class="col-12 col-md-2 align-self-center">
                                    <img src="{{asset('front-assets/images/about/medal.png')}}" alt="">
                                </div>
                                <div class="col-12 col-md-9 align-self-center">
                                    <h4 class="text-secondary">Quality</h4>
                                    <p>@lang('In everything we undertake, you can feel the unwavering passion and dedication of our exceptionally trained and deeply motivated team.
                                        ')</p>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-12 col-md-2 align-self-center">
                                    <img src="{{asset('front-assets/images/about/experience.png')}}" alt="">
                                </div>
                                <div class="col-12 col-md-9 align-self-center">
                                    <h4 class="text-secondary">Experience</h4>
                                    <p>@lang('Focused on results we seek to raise the level of our customers.')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-7 col-md-7">
                    <a href="/front-assets/images/about/about_us.png">
                        <img src="{{asset('/front-assets/images/breadcrumb.png')}} " class="fit-image" alt="Fit Image">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Features -->
    <section id="features" class="section-1 bg-light ">
        <div class="container">
            <div class="row justify-content-center text-center items">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon las la-globe text-primary"></i>
                        <h4 class="text-secondary">Company Overview</h4>
                        <p>At Pix Clipping, we're your trusted global outsourcing partner. We bring efficiency and expertise to your business, allowing you to focus on your strengths while we handle the rest with dedicated, tailored solutions.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon las la-atom text-primary"></i>
                        <h4 class="text-secondary">Mission and Values</h4>
                        <p>At our image editing company, we're dedicated to enhancing your visuals with precision and creativity. Join us in this transformative journey where your success is our focus.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <i class="icon las la-users-cog text-primary"></i>
                        <h4 class="text-secondary">Team and Expertise</h4>
                        <p>Our image editing experts excel in various techniques, from precise clipping to expert retouching. Rely on our seasoned skills to enhance your visuals to perfection. Choose us for standout image editing solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About [video] -->
    <section id="video" class="section-1 title highlights image-center p-5">
        <div class="container smaller">
            <div class="row text-center intro">
                <div class="col-12">
                    <h2 class="text-secondary">Institutional</h2>
                    <p class="text-max-800">Get to know a little of our history and the road we traveled that took us to the level we are today.</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 gallery">
                    <a href="https://www.youtube.com/watch?v=Rrsq6qRhP8o" class="square-image d-flex justify-content-center align-items-center">
                        <i class="icon bigger las la-play-circle"></i>
                        <img src="{{asset('/front-assets/images/about/about_us.png')}} " class="fit-image" alt="Fit Image">
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
