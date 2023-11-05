@extends('layouts.frontend.app')

@section('content')

<section id="slider" class="hero p-0 odd ">
    <div class="swiper-container no-slider slider-h-60">
        <div class="swiper-wrapper">
            <!-- Item 1 -->
            <div class="swiper-slide slide-center" id="bread">
              <img src="{{asset('/front-assets/images/faq/project_proposal.png')}}" class="full-image" data-mask="70">
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size: 3rem;"><a href="{{route('home')}}" style="font-size: 4rem;">Home</a>/{{isset($title) ? $title :'Project Proposal '}}</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-2 bg-white">
    <div class="overflow-holder">
        <div class="container-fluid">
            <div class="row text-center intro">
                <div class="col-12 heading">
                    <h3 class="mb-0">@lang('An assortment of our latest creations')</h3>
                    <p class="mt-2">@lang('By looking at our portfolio page, you can get a good impression of the variety of retouching we are skilled at and the caliber of our retouched work. See our retouching output in a quick and easy way.')</p>
                </div>
            </div>
              
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-3">
                    <div class="terms_condition side-box ">
                        <a href="{{route('services.slug','clipping-path')}}" class="list-group-item list-group-item-action px-3 py-2" aria-current="true"><i class="las la-angle-double-right"></i> @lang('Clipping Path')</a>
                        <a href="{{route('services.slug','background-remove')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Background Remover')</a>
                        <a href="{{route('services.slug','shadow-making')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Shadow Making')</a>
                        <a href="{{route('services.slug','image-masking')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Image Masking')</a>
                        <a href="{{route('services.slug','ghost-mannequin')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Ghost Mannequin')</a>
                        <a href="{{route('services.slug','multi-clipping-path')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Multi Clipping Path')</a>
                        <a href="{{route('services.slug','photo-recoloring')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Photo Recoloring')</a>
                        <a href="{{route('services.slug','school-photo-editing')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('School Photo Editing')</a>
                        <a href="{{route('services.slug','photo-retouching')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang(' Photo Retouching')</a>
                        <a href="{{route('services.slug','jewelry-retouch')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Jewellary Retouching')</a>
                 
                        <a href="{{route('services.slug','product-photo-retouching')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Product Photo Retouching')</a>
                        <a href="{{route('services.slug','beauty-retouching')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Beauty Retouching')</a>
                        <a href="{{route('services.slug','headshot-retouching')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Headshot Retouching')</a>
                        <a href="{{route('services.slug','newborn-baby-photo-editing')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Newborn Baby Photo Editing')</a>
                        <a href="{{route('services.slug','food-photo-retouching')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Food Photo Retouching')</a>
                        <a href="{{route('services.slug','real-estate-photo-editing')}}" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang(' Real Estate Photo Editing')</a>
                       
                       
                    </div>
                </div>

                <div class="col-sm-12 col-md-8 mb-3">
                    <div class="parent-container">
                        <div class="child-container" id="one">
                            <a href="{{asset('front-assets/images/jewellary/img2.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front-assets/images/jewellary/img2.webp')}}" width="100%" height="auto">
                            </a>
                            <a href="{{asset('front-assets/images/jewellary/img9.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front-assets/images/jewellary/img9.webp')}}" width="100%" height="auto">
                            </a>

                            <a href="{{asset('front-assets/images/food/two.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front-assets/images/food/two.webp')}}" width="100%" height="auto">
                            </a>
                                  
                            <a href="{{asset('front-assets/images/jewellary/img10.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                <img src="{{asset('front-assets/images/jewellary/img10.webp')}}" width="100%" height="auto">
                            </a>
                        </div>

                        <div class="child-container" id="two">
                            <a href="{{asset('front-assets/images/product_photo/portfolio/shoe.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                <img src="{{asset('front-assets/images/product_photo/portfolio/shoe.webp')}}" width="100%" height="auto">
                            </a>
    
                            <a href="{{asset('front-assets/images/background_remove/portfolio/one.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                <img src="{{asset('front-assets/images/background_remove/portfolio/one.webp')}}" width="100%" height="auto">
                                </a>
    
                          
                          
                        <a href="{{asset('front-assets/images/ghost/portfolio/three_3.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front-assets/images/ghost/portfolio/three.png')}}" width="100%" height="auto">
                        </a>
                          
                        
                        </div>

                    
                        <div class="child-container" id="three">
                            
                            <a href="{{asset('front-assets/images/jewellary/img4.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front-assets/images/jewellary/img4.webp')}}" width="100%"  height="auto">
                            </a>
                            <a href="{{asset('front-assets/images/image_masking/portfolio/three.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                                <img src="{{asset('front-assets/images/image_masking/portfolio/three.png')}}" width="100%" height="auto">
                            </a>
    

                            <a href="{{asset('front-assets/images/image_masking/portfolio/one.png')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front-assets/images/image_masking/portfolio/one.png')}}" width="100%"  height="auto">
                            </a>
                            <a href="{{asset('front-assets/images/food/three.webp')}}"  data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front-assets/images/food/three.webp')}}" width="100%"  height="auto">
                            </a>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</section>

@endsection

@push('style')
<style>
    body {
  flex-direction: column;

}
body, .parent-container, .child-container {
  display: flex;
}
.parent-container {
  width: 100%;
  justify-content: center;
  gap: 30px 30px;
}
.child-container {
  width: 30%;
  height: auto;
  gap: 30px 30px;
  flex-direction: column;
}
.child-container img {
  transition: all 1s ease-in-out 0s;
 box-shadow: 2px 2px 20px gray, inset 2px 2px 10px lightgray;
}
.child-container img:hover {
  box-shadow: 4px 4px 25px black, inset 2px 2px 2px 10px rgb(0, 0, 20);
 
}



.sidenav {
    width: 130px;
    position: fixed;
    z-index: 1;
    top: 20px;
    left: 10px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
}
</style>
    
@endpush

@section('page-script')
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {
    });
</script>
 
@endsection
