@extends('layouts.frontend.app')

@section('content')
    <!-- Hero part-->
    <section class="bg-white highlights image-right" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(4,96,198,1) 0%, rgba(9,54,131,1) 100%);position: relative;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="row intro">
                        <div class="col-12 p-0">
                            <h2 class="text-white" style="font-weight: 500; line-height: 50px;letter-spacing:.5px;">Elevating images with expert touch - Affordable photo editing</h2>
                            <p class="text-white" style="letter-spacing:.5px;">Save money on photo post-processing! <br/>Boost your profit margin with us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="/front-assets/images/home/Pricepage1.png" class="fit-image" alt="Price clipping path">
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="section-1 plans">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <h3 class="text-secondary">Approximate Pricing Calculator</h3>
                    <p>Estimate the cost based on the quantity, delivery, and services.<br/>
                        The cost listed below serves as an example of our pricing.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="input-group">
                        <span class="input-group-text">Services</span>
                        <select class="form-select services" id="service_name">
                            <option>Select Service</option>
                           
                            @isset($pathServices)
                                @foreach($pathServices as $pathService)
                                    <option value="{{$pathService->id}}">{{$pathService->service_name}}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="input-group">
                        <span class="input-group-text">Delivery</span>
                        <select class="form-select delivery" id="delivery_hour">
                            <option value="24">Normal Delivery: 24 Hours</option>
                            <option value="12">Rush Delivery: 12 Hours</option>
                            <option value="6">Express Delivery: 6 Hours</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-text">Quantity</span>
                        <input type="number" class="form-control quantity bg-white" id="quantity" min=1 value="1"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <table class="table table-bordered text-center h4 text-capitalize">
                    <tbody>
                    <tr>
                        <td class="s-service text-secondary"><span id="serviceTxt" style="font-size: 16px;">@lang('Clipping Path')</span> </td>
                        <td class="s-turnaround text-secondary" style="font-size: 16px;"><span id="deliveryTxt">6</span> Hours Turnaround Time </td>
                        <td class="s-images text-secondary" style="font-size: 16px;"><span id="qtyTxt">1</span> Images</td>
                    </tr>
                    </tbody>
                </table>
            </div>
                   
            <div class="row justify-content-center text-center items" id="price_card">
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/price_icon/cube.png')}}" alt="price_icon" style="width: 50px;">
                        <h4 class="text-secondary">@lang('Basic')</h4>
                        <span class="price text-primary">@lang('$0.00')</span>

                        <p class="paragraph">@lang('Images containing the following information and a simple touchup request will come under the basic category.')</p>
                        <ul class="list-group list-group-flush">
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
                        <a href="#" class="smooth-anchor btn mx-auto primary-button">@lang('See Sample') <i class="las la-chevron-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/price_icon/ice-cube.png')}}" alt="price_icon" style="width: 50px;">
                        <h4 class="text-secondary">@lang('Moderate')</h4>
                        <span class="price text-primary">@lang('$5.00 - $8.99')</span>
                        <p class="paragraph">@lang('Images with the features listed below and a modest demand for touch-ups fall into the medium category.')</p>
                        <ul class="list-group list-group-flush">
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
                        <a href="{{route('login')}}" class="smooth-anchor btn mx-auto primary-button">@lang('See Sample') <i class="las la-chevron-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                    <div class="card-box pricing">
                        <img src="{{asset('front-assets/images/price_icon/sugar-cube.png')}}" alt="price_icon" style="width: 50px;">
                        <h4 class="text-secondary">@lang('High-end')</h4>
                        <span class="price text-primary">@lang('Talk to us')</span>
                        <p class="paragraph">@lang('Demand for advanced touch-ups will be classified as high-end.')</p>
                        <ul class="list-group list-group-flush">
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
                        <a href="{{route('contact')}}" class="smooth-anchor btn mx-auto primary-button">@lang('See Sample')<i class="las la-chevron-circle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interest to online -->
    <section class="text-white" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(12,61,115,1) 0%, rgba(70,135,246,1) 100%);">
        <div class="container">
            <div class="row  align-items-center text-center">
                <div class="col-2"></div>
                <div class="col-8">
                    <h3 class="mb-3 text-white" style="letter-spacing: .5px">@lang('Affordable editing services that deliver excellence.')</h3>
                    <p class="mt-1" style="letter-spacing: 1px">@lang('Introducing PixClipping: Unbeatable services & benefits, unmatched price. Client-centric approach: Quality, delivery, support - all optimised for your benefit. One-stop solution: From order to image delivery, at an affordable cost.')</p>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="title">
        <div class="container">
            <div class="row justify-content-center text-center items">
                <div class="col-lg-12 p-0">
                    <h3 class="text-secondary">PixClipping - Where Affordability Meets Performance in Post-Processing</h3>
                </div>
            </div>
            <div class="row justify-content-center text-center items mt-5">
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover text-center">
                        <img src="{{asset('front-assets/images/price_icon/payment.png')}}" alt="" class="icon" style="width: 70px; height:70px">
                        <h5 class="text-primary">Flexible Pay Period</h5>
                        <p class="text-center">Flexible payment options: Weekly, Monthly, and Tailored Plans for our valued regular and project clients.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <img src="{{asset('front-assets/images/price_icon/accuracy.png')}}" alt="" class="icon" style="width: 70px; height:70px">
                        <h5  class="text-primary">Accurate Estimations</h5>
                        <p class="text-center">We determine fixed pricing based on manual complexity assessment and your retouching requirements.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <img src="{{asset('front-assets/images/price_icon/startup.png')}}" alt="" class="icon" style="width: 70px; height:70px">
                        <h5 class="text-primary">Transparent Pricing</h5>
                        <p class="text-center">Price is fixed upon discussion - No hidden surprises.""We'll send an invoice before processing your images - Smooth, transparent transactions.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <img src="{{asset('front-assets/images/price_icon/relationship.png')}}" alt="" class="icon" style="width: 70px; height:70px">
                        <h5 class="text-primary">Price Negotiation</h5>
                        <p class="text-center">Maximising negotiation for the best price if it seems high to you.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <img src="{{asset('front-assets/images/price_icon/discount.png')}}" alt="" class="icon" style="width: 70px; height:70px">
                        <h5 class="text-primary">Discount & Offers</h5>
                        <p class=" text-center">Enhance your photos affordably and seize the best deals with our unbeatable occasion offers.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card no-hover">
                        <img src="{{asset('front-assets/images/price_icon/bulk-buying.png')}}" alt="" class="icon" style="width: 70px; height:70px">
                        <h5 class="text-primary">Bulk Editing Discount</h5>
                        <p class="text-center">All prices mentioned above are negotiable for bulk editing and projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interest to online -->
    <section class="text-white" style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(12,61,115,1) 0%, #4687f6 100%);">

        <div class="container">
            <div class="row  align-items-center text-center mb-5">
                <div class="col-2"></div>
                <div class="col-8">
                    <h3 class="mb-3 text-white" style="letter-spacing: .5px">@lang('Ensuring Safe and Secure Payment Transactions.')</h3>
                    <p class="mt-1" style="letter-spacing: 1px">@lang('PixClipping accepts payments through globally trusted and secure credit/debit cards')</p>
                    
                </div>
                <div class="col-2"></div>
            </div>
                <div class="owl-carousel owl-theme" id="owl">
                    <div class="item ">
                        <img src="{{asset('/front-assets/images/price_icon/gateway/american.png')}}" />
                    </div>
                    <div class="item ">
                        <img src="{{asset('/front-assets/images/price_icon/gateway/bank_transfer.png')}}" />
                    </div>
                    <div class="item ">
                        <img src="{{asset('/front-assets/images/price_icon/gateway/master_card.png')}}" />
                    </div>
                    <div class="item ">
                        <img src="{{asset('/front-assets/images/price_icon/gateway/paypal.png')}}" />
                    </div>
                    <div class="item ">
                        <img src="{{asset('/front-assets/images/price_icon/gateway/stripe.png')}}" />
                    </div>
                    <div class="item ">
                        <img src="{{asset('/front-assets/images/price_icon/gateway/visa.png')}}" />
                    </div>
                
    
                </div>
         
        </div>

    </section>

    @include('action-blog')
@endsection

@section('page-script')
<script>
$('.owl-carousel').owlCarousel({
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    center: true,
    loop:true,
    margin:10,
    nav:true,
    arrows:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:7
        }
    }
});
</script>

<script>
    $('#service_name,#delivery_hour, #quantity').on('change input', function() {
        var service_id = $('#service_name').val();
        var quantity = $('#quantity').val();
        var delivery_hour = $('#delivery_hour').val();

        $.ajax({
            type:'GET',
            url:"{{route('price.service-name')}}",
            data:{
                service_id:service_id,
                delivery_hour: delivery_hour,
                quantity: quantity
            },
            success: function(response) {
                var deliveryHour = response.delivery_hour;
                var pathServices = response.pathServices;
                var quantity = response.quantity??1;
                
                var packages = JSON.parse(pathServices.packages);
                $('#serviceTxt').text(pathServices.service_name);
                $('#qtyTxt').text(quantity);
                $('#deliveryTxt').text(deliveryHour);
                $('#price_card').html('');

                var markup = '';
                if (packages.length > 0) {
                    $.each(packages, function(index, value) {
                        var startPrice = parseFloat(value.start_price).toFixed(2);
                        var endPrice = parseFloat(value.end_price).toFixed(2);
                        var totalStartPrice = parseFloat(startPrice * parseFloat(quantity)).toFixed(2);
                        var totalEndPrice = parseFloat(endPrice * parseFloat(quantity)).toFixed(2);

                        if (deliveryHour == 24) {
                            totalStartPrice *= 1;
                            totalEndPrice *= 1;
                        } else if (deliveryHour == 12) {
                            totalStartPrice *= 2;
                            totalEndPrice *= 2;
                        }
                        else{
                            totalStartPrice *= 4;
                            totalEndPrice *= 4;
                        }
                        markup += `
                            <div class="col-12 col-md-6 col-lg-4 align-self-center text-center item">
                                <div class="card-box pricing">
                                    <img src="{{asset('front-assets/images/price_icon/cube.png')}}" alt="price_icon" style="width: 50px;">
                                    <h4 class="text-secondary">${value.package_name}</h4>`;
                                    if(!isNaN(totalStartPrice) && !isNaN(totalEndPrice))
                                    {
                                        markup +=`<span class="price text-primary">$${totalStartPrice} - $${totalEndPrice}</span>`;
                                    }
                                    else{
                                        markup += `<span class="price text-primary">@lang('Talk to Us')</span>`;
                                    }
                        
                                markup += `<p class="paragraph">@lang('Images containing the following information and a simple touchup request will come under the basic category.')</p>
                                <ul class="list-group list-group-flush">
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
                                <a href="#" class="smooth-anchor btn mx-auto primary-button">@lang('See Sample') <i class="las la-chevron-circle-right"></i></a>
                            </div>
                            </div> `;
                    });
                    $('#price_card').append(markup);
                }
            },

            error: function (error) {
                console.error(error);
            }
        })
    })
</script>
@endsection
