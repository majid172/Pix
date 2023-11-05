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
    <!-- Contact -->
    <section class="bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-8 text-md-left mb-5">
                    <!-- Success Message -->
                    <div class="row">
                        <h2 class="text-primary">PROJECT PROPOSAL</h2>
                        <p>Start your project with us</p>
                        <form action="{{route('send.project-proposal')}}" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 p-0">
                                        <label for="name">Name <span style="color:red">*</span></label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name" required>
                                        
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-6 ps-1 pe-0">
                                        <label for="designation">Designation <span style="color:red">*</span></label>
                                        <input type="text" name="designation" value="{{ old('designation') }}" id="designation" class="form-control" placeholder="Enter Your Designation" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="row">
                                    <div class="col-6 p-0">
                                        <label for="company_name"> Company Name <span style="color:red">*</span></label>
                                        <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control" placeholder="Pixclipping" required>
                                    </div>
                                    <div class="col-6 ps-1 pe-0">
                                        <label for="url">@lang('Website URL') <span style="color:red">*</span></label>
                                        <input type="text" name="url" class="form-control" value="{{ old('url') }}" placeholder="www.pixclipping.com" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="row">
                                    <div class="col-6 p-0">
                                        <label for="email"> Company Email <span style="color:red">*</span></label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="info@pixclipping.com" required>
                                    </div>
                                    <div class="col-6 ps-1 pe-0">
                                        <label for="phone">@lang('Phone') <span style="color:red">*</span></label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="+9852252" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                
                                <label for="img_link">Sample Images Link <span style="color:red">*</span></label>
                                <input type="text" name="img_link" value="{{ old('img_link') }}" class="form-control" placeholder="https:/freepik/3024Wdfd" required>
                                   
                            </div>
                            <div class="col-12 mt-4">
                                <div class="row">
                                    <div class="col-6 p-0">
                                        <label for="budget">Budget <span style="color:red">*</span></label>
                                        <select class="form-control" name="budget" id="budget">
                                            <option>Select your budget</option>
                                            <option value="500-1000">$500 - $1000</option>
                                            <option value="1001-1500">$1001 - $1500</option>
                                            <option value="1501-2000">$1501 - $2000</option>
                                            <option value="2001-3000">$1501 - $2000</option>
                                            <option value="3001-4000">$1501 - $2000</option>
                                           
                                        </select>
                                    </div>
                                    <div class="col-6 ps-1 pe-0">
                                        <label for="file">REP File <span style="color:red">*</span></label>
                                        <input type="file" name="file" class="form-control" id="file" placeholder="Submit you file" value="{{ old('file') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="row">
                                    <div class="col-6 p-0">
                                        <label for="duration">Project Duration <span style="color:red">*</span></label>
                                        <select class="form-control" name="duration" id="duration">
                                            <option value="">Select your duration</option>
                                            <option value="1">@lang('1 Month')</option>
                                            <option value="3">@lang('3 Month')</option>
                                            <option value="6">@lang('6 Month')</option>
                                           
                                        </select>
                                    </div>
                                    <div class="col-6 ps-1 pe-0">
                                        <label for="quantity">Quantity<span style="color:red">*</span></label>
                                        <input type="number" name="quantity" class="form-control" id
                                        ="quantity" placeholder="Image quantity 500" value="{{ old('quantity') }}" required>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 mt-4">
                                <label for="description">Share description about project <span style="color:red">*</span></label>
                                <textarea name="description" id="description" class="form-control field-message" placeholder="Write something ..."></textarea>
                            </div>
                            <div class="col-12 col-12 m-0 pl-md-2">
                                <span class="form-alert"></span>
                            </div>
                            <div class="col-12 input-group m-0 p-2">
                                <button type="submit" class="btn primary-button">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pl-md-5 ">
                    <div class="card-box">
                        <h3 class="mb-4">Let's talk about everything.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique magni. Magni, laboriosam perferendis maxime!</p>
                        <p><a href="#" class="btn primary-button" style="margin: 0px auto;">Read more</a></p>
                    </div>                 
                </div>
            </div>
        </div>
    </section>

    <section class="title">
        <div class="overflow-holder">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12 heading">
                        <h3 class="mb-0">@lang('Forge ties with a dependable vendor for a strong partnership ')
                        </h3>
                        <p class= mt-2">@lang('Expert help for your big volume editing project, guaranteed')</p>
                    </div>
                </div>
                <div class="row  gx-5 mb-5">
                    <div class="col-sm-6 col-lg-4">
                        <div class="head">
                            <div class="row">
                                <div class="col-lg-2 text-primary py-2"><i class="icon las la-moon"></i></div>
                                <div class="col-lg-10">
                                    <h6 class="text-secondary">@lang('Swift Overnight Delivery')</h6>
                                </div>
                            </div>
                           
                        </div>
                        <div class="text-left p-2" >
                            <p class="paragraph">@lang('Order at night, get images the next morning, typically within 12 hours.
                                ')</p>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="head">
                            <div class="row">
                                <div class="col-lg-2 text-primary py-2"><i class="icon las la-user-circle"></i></div>
                                <div class="col-lg-10">
                                    <h6 class="text-secondary">@lang('Dedicated Project Manager')</h6>
                                </div>
                            </div>
                           
                        </div>
                        <div class="text-left p-2" >
                           <p class="paragraph">@lang('When you begin a project with us, an experienced project manager will oversee all aspects to ensure top-notch quality and timely delivery')</p>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="head">
                            <div class="row">
                                <div class="col-lg-2 text-primary py-2"><i class="icon las la-users"></i></div>
                                <div class="col-lg-10">
                                    <h6 class="text-secondary">@lang('Experienced Design Team')</h6>
                                </div>
                            </div>
                           
                        </div>
                        <div class="text-left p-2" >
                            <p class="paragraph">@lang('Get a dedicated team to edit your photos precisely to your specifications.')</p>
                        </div>
                        
                    </div>
                </div>

                <div class="row  gx-5 ">
                    <div class="col-sm-6 col-lg-4">
                        <div class="head">
                            <div class="row ">
                                <div class="col-lg-2 col-sm-2 text-primary py-3"><i class="icon las la-file-invoice text-left"></i></div>
                                <div class="col-lg-10 col-sm-10">
                                    <h6 class="text-secondary">@lang('Confidentiality Agreements: NDA')</h6>
                                </div>
                            </div>
                           
                        </div>
                        <div class="text-left p-2" >
                            <p class="paragraph">@lang('Prior to commencing the project, a formal agreement will be signed between your company and us.')</p>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="head">
                            <div class="row">
                                <div class="col-lg-2 text-primary py-2"><i class="icon las la-shield-alt"></i></div>
                                <div class="col-lg-10">
                                    <h6 class="text-secondary">@lang('Secure Your Images')</h6>
                                </div>
                            </div>
                           
                        </div>
                        <div class="text-left p-2" >
                           <p class="paragraph">@lang(' We prioritise your privacy. Your images are never shared or sold to third parties, ensuring your confidentiality.')</p>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="head">
                            <div class="row">
                                <div class="col-lg-2 text-primary  py-2"><i class="icon las la-sync"></i></div>
                                <div class="col-lg-10">
                                    <h6 class="text-secondary">@lang('Effortless File Transfer')</h6>
                                </div>
                            </div>
                           
                        </div>
                        <div class="text-left p-2" >
                            <p class="paragraph">@lang('Experience lightning-fast and secure image uploads/downloads with us.')</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    @include('action-blog')
@endsection

