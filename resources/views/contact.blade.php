@extends('layouts.frontend.app')

@section('content')
    @include('layouts.frontend.hero_section')

    <!-- Contacts -->
    <section id="contacts" class="section-1 offers">
        <div class="container">
            <div class="row intro">
                <div class="col-sm-12 col-md-9">
                    <h2 class="text-secondary">How Can We Help?</h2>
                    <p>Your problems, our solutions - let's conquer together.</p>
                </div>
            </div>
            <div class="row justify-content-center text-center items">
                <div class="col-sm-12 col-md-6 col-lg-4 item">
                    <div class="card-box bg-white">
                        <img src="{{asset('front-assets/images/contact/free-wifi.gif')}}" alt="" style="height: 60px; width:60px">
                        <h4 class="text-primary">Free trial</h4>
                        <p class="mb-1">Experience our top-notch editing: Your first image is on us!</p>
                        <a href="{{route('free-trail')}}">Free Trail <i class="btn-icon icon-arrow-right-circle"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card-box bg-white">
                        <img src="{{asset('front-assets/images/contact/faq.gif')}}" alt="" style="height: 60px; width:60px">
                        <h4 class="text-primary">FAQ</h4>
                        <p class="mb-1">Unlock the answers you seek, explore our FAQs and be informed</p>
                        <a href="{{route('faq')}}">Faq <i class="btn-icon icon-arrow-right-circle"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="card-box bg-white">
                        <img src="{{asset('front-assets/images/contact/blueprint.gif')}}" alt="" style="height: 60px; width:60px">
                        <h4 class="text-primary ">Project proposal</h4>
                        <p class="mb-1">Expert help for your big volume editing project, guaranteed.</p>
                       <a href="{{route('project.proposal')}}" >@lang('Proposal')<i class="btn-icon icon-arrow-right-circle"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-md-left">
                    <!-- Success Message -->
                    <div class="row">
                        <h2>Tell Us</h2>
                        <p>Start your project with us</p>
                        <form action="{{route('send-message')}}" class="" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 p-0">
                                        <label for="name">Your Name <span style="color:red">*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-6 ps-1 pe-0">
                                        <label for="email">Your Email <span style="color:red">*</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="row">
                                    <div class="col-6 p-0">
                                        <label for="name">Subject <span style="color:red">*</span></label>
                                        <select class="form-control" name="subject">
                                            <option>Select Subject</option>
                                            <option value="General Query">General Query</option>
                                            <option value="Support Query">Support Query</option>
                                            <option value="Sales Query">Sales Query</option>
                                            <option value="Project Inquiry">Project Inquiry</option>
                                            <option value="Request For a Call">Request For a Call</option>
                                        </select>
                                    </div>
                                    <div class="col-6 ps-1 pe-0">
                                        <label for="phone">Your Phone <span style="color:red">*</span></label>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <label for="message">How we can help you? <span style="color:red">*</span></label>
                                <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12 col-12 m-0 pl-md-2">
                                <span class="form-alert"></span>
                            </div>
                            <div class="col-12 input-group m-0 p-2">
                                <button class="btn primary-button" type="submit">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block">
                        <!-- Step 4 -->
                        <div class="gallery">
                            <img src="{{asset('front-assets/images/contact_us.png')}}" class="fit-image" alt="Contact Us">
                        </div>

                    </div>
            </div>
        </div>
    </section>
    @include('action-blog')
@endsection
