<section id="hero" class="hero p-0 ">
    <div class="swiper-container no-slider slider-h-50">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <img data-mask="90" src="{{asset('front-assets/images/home/Home1.png')}}" class="full-image">

                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h2 data-aos-delay="400" class="title effect-static-text">{{$title}}</h2>
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">@lang('Home')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>