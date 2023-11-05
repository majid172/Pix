<!-- Hero -->
<section id="slider" class="hero p-0 odd ">
    <div class="swiper-container no-slider slider-h-60">
        <div class="swiper-wrapper">
            <!-- Item 1 -->
            <div class="swiper-slide slide-center">
               <img src="{{asset('/front-assets/images/breadcrumb.png')}}" class="full-image" data-mask="70">
               <div class="image-overlay"></div>
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <div class="title">
                            <h1 data-aos="zoom-out-up" data-aos-delay="400" >{{isset($title) ? $title :'About Us'}}</h1>
                        </div>
                       
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" id="home"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active text-light" id="pageTitle" aria-current="page">{{isset($title) ? $title :'About Us'}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('style')
    <style>
        #home a{
            font-size: 15px;
            color: #f8e7ab;
            /* color: #ffc801; */
        }
        .title h1{
            color:#f8d554;
            font-size: 3rem;
        }
        #pageTitle{
            font-size: 15px;
        
        }
        /* Add overlay styles */
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(7, 50, 119, 0.65); 
            z-index: 1; /* Ensure the overlay is above the image */
        }

    </style>
@endpush