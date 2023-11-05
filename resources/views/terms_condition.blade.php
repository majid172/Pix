@extends('layouts.frontend.app')
@section('content')
<section id="slider" class="hero p-0 odd ">
    <div class="swiper-container no-slider slider-h-60">
        <div class="swiper-wrapper">
            <!-- Item 1 -->
            <div class="swiper-slide slide-center" id="bread">
              <img src="{{asset('/front-assets/images/terms_condition/toc.png')}}" class="full-image" data-mask="70">
                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">
                        <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size: 3rem;"><a href="" style="font-size: 2rem;">Home</a>/{{isset($title) ? $title :'About Us'}}</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  

<section id="about" class="section-1 bg-white highlights image-right">
    <div class="container">
        <div class="row my-5 py-5 gx-5">
            
            <div class="col-lg-4 p-4 ">
                <div class="terms_condition side-box ">
                        <a href="#service" class="list-group-item list-group-item-action px-3 py-2" aria-current="true"><i class="las la-angle-double-right"></i> @lang('Service')</a>
                        <a href="#process" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Process')</a>
                        <a href="#pricing" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Our Pricing')</a>
                        <a href="#account" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('My Account')</a>
                        <a href="#image_submission" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Image Submission')</a>
                        <a href="#turnaround" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Turnaround time')</a>
                        <a href="#payment_method" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Payment Method')</a>
                        <a href="#wallet" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Payment via Wallet ')</a>
                        <a href="#free_trial" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang(' Free Trial')</a>
                        <a href="#quote" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Quote & Order')</a>
                        <a href="#redo" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Revision/Redo Policy')</a>
                        <a href="#replacement" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Photo Replacement')</a>
                        <a href="#settlement" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Settlement')</a>
                        <a href="#marketing" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Marketing')</a>
                        <a href="#privacy" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Privacy')</a>
                        <a href="#agreements" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang(' Changes to Agreements')</a>
                        <a href="#cancellation" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang(' Cancellation & Termination')</a>
                        <a href="#pixclipping" class="list-group-item list-group-item-action px-3 py-2"><i class="las la-angle-double-right"></i> @lang('Pix Clipping Ltd. Website')</a>
                       
                </div>

            </div>
            <div class="col-lg-8">
               <h2 class="text-primary">{{$title}}</h2>
               <h6>@lang('Welcome to Pix Clipping Ltd')</h6>
               <hr>

               <div class="toc">
                <p class="paragraph">@lang('Before embarking on your journey with our company or creating an account with Pix Clipping Ltd, we kindly request that you thoroughly review the following Terms of Service. These terms serve as a comprehensive guide to your access and rights as a valued client. This document represents the agreement between you (referred to as the "Client") and Pix Clipping Ltd. (referred to as the "Service Provider"). All relevant conditions are outlined in detail herein. Failure to adhere to these Terms of Service may result in the termination of our agreement, with you assuming full liability. Please note that ColorClipping cannot be held responsible for any disputes that may arise.')
                </p>

                <p>@lang('Note'):</p>
                <ul>
                    
                    <li>Throughout our website, the terms "us," "we," "our," "Pix Clipping" or "Pixclipping" refer to Pix Clipping Ltd.</li>
                    <li>A "Visitor" is defined as an individual who has accessed our website or service pages through browsing the internet, but has not yet registered as a client on our portal.
                    </li>
                    <li>A "Verified Member" is an individual or company who has successfully registered as a client on our platform and undergone the necessary verification process.</li>
                    <li>Our "Service" encompasses the various functionalities that we offer to our esteemed clients through our website.</li>
                
                </ul>

                <p class="paragraph">@lang('The term "Content" refers to the compilation of images, text, data, information, and charts that are visible throughout our website to visitors, users, members, and clients. Please be aware that all content and its design displayed on our website are protected by copyright laws. It is strictly prohibited to modify, alter, or redesign any content featured on our website without our explicit consent.
                    ')</p>

                    <p class="paragraph">@lang('Any violation involving the unauthorised use, infringement, or copy-pasting of our content without our consent is strictly prohibited and considered unlawful. In such cases of copyright violation, appropriate legal actions will be pursued.
                        ')</p>

               </div>

               <div id="service" class="paragraph my-5">
                <h5 class="text-primary">1.@lang(' Our Services')</h5>
                <p>@lang('Pix Clipping Ltd. is a highly experienced photo editing service provider. We utilize Adobe Photoshop and advanced graphic design tools to ensure top-notch results. Our primary goal is to help clients enhance the perfection of their photos.')</p>
                
                <p> @lang('Our professional services encompass a wide range of photo editing tasks. These include clipping paths, background removal, shadow creation, image masking, photo retouching, headshot retouching, jewelry retouching, e-commerce editing, newborn photo editing, ghost mannequin, image recoloring, real estate photo editing, school photo editing, and on-demand editing services.')</p>

                <p>@lang('Through the Pix Clipping portal service, you can easily upload and download your photos. Simply submit the image link, make the payment, and we\'ll process the images according to your instructions. Rest assured, we prioritize timely delivery. You can expect to receive the edited images via FTP, WeTransfer, Dropbox, Google Drive, or any other preferred method.') </p>
         
               </div>

               <div id="process" class="paragraph my-5">
                <h5 class="text-primary">2.@lang(' Process of Order using Pix Clipping Portal')</h5>
                <p>@lang('To place your order, kindly submit it through our secure and user-friendly web portal. Within this portal, you can conveniently process your total order, taking advantage of features such as placing the order, uploading images, making secure payments, and downloading the final images, all in one seamless experience.')</p>
                
                <p> @lang('Rest assured that our team will meticulously follow your instructions to process the images, ensuring the highest quality output. You can count on us to deliver the completed images promptly and efficiently.')</p>

                <p>@lang('For your convenience, we offer multiple delivery options, including FTP, WeTransfer, Dropbox, and Google Drive, or any other preferred method you may have.') </p>
               </div>

               <div id="pricing" class="paragraph my-5">
                <h5 class="text-primary">3.@lang(' Our Pricing')</h5>
                <p>@lang('Our website displays price and package information as a sample guide, indicating the price range. The actual cost of the services will be determined by factors such as image complexity, turnaround time, and rush hour delivery.')</p>
                
                <p> @lang('If the order invoice amount is equal to or less than 5 USD, an additional processing fee (PayPal processing fee) will be applied. Please note that all standard prices listed on the website are subject to change without prior notice.')</p>

                <p>@lang('Here are the characteristics of complex images') : </p>
                <ul>
                    <li>@lang('Greater curves ')</li>
                    <li>@lang('Intricate shapes')</li>
                    <li>@lang('Fine-edge details')</li>
                    <li>@lang('Images with numerous holes, spaces, dots, wrinkles, spots, or hair/fur')</li>
                    <li>@lang('Old images that are torn, ripped, burnt, or soaked, either partially or entirely')</li>
                    <li>@lang('Images with extensive details')</li>
                    <li>@lang('Complicated retouching required')</li>
                    <li>@lang('Multiple objects within an image')</li>

                </ul>
         
               </div>

               <div id="account" class="paragraph my-5">
                <h5 class="text-primary">04.@lang('My Account')</h5>
                <p>@lang('To facilitate a seamless and effortless order processing experience, we proudly introduce the Portal. Your personalised "Account" within the Portal empowers you to effortlessly create orders, furnish precise image editing instructions, process secure payments, and efficiently manage image uploads and downloads. Additionally, you gain access to a comprehensive overview of your Order History, Completed Orders, Unpaid Invoices, Total Due amount, as well as your Latest Order and Latest Invoice.')</p>
   
                <p>@lang('Here\'s a guide on how to effectively utilise your Portal Account') : </p>
                <ul>
                    <li>
                        <h6 class="text-secondary">@lang('Submitting Images or Files') : </h6>
                        <p class="paragraph">@lang('You have the flexibility to submit images or files in various formats, such as JPG, JPEG, PNG, GIF, BMP, PSD, AI, TIF, TIFF, PDF, CRW, CR2, DNG, NEF, RAW, and RW2. Feel free to upload files up to 5 GB in size. For larger files exceeding this limit, please reach out to us, and we\'ll be happy to assist you. ')</p>
                    </li>
                    <li>
                        <h6 class="text-secondary">@lang('Order Confirmation and Review') : </h6>
                        <p class="paragraph">@lang('Once we receive your order details, we\'ll thoroughly review them. Rest assured, you\'ll receive a confirmation email once the order is successfully processed. In the event that the complexity of the order surpasses what was initially mentioned in the instructions, there might be adjustments in price and turnaround time. We\'ll promptly notify you in such cases.')</p>
                    </li>
                    <li>
                        <h6 class="text-secondary">@lang('Image Processing Completion') : </h6>
                        <p class="paragraph">@lang('As soon as your image processing is complete, we\'ll notify you via email. Once you\'ve made the required payment, you\'ll be able to conveniently download the processed images.')</p>
                    </li>
                    <li>
                        <h6 class="text-secondary">@lang('Order Acceptance') : </h6>
                        <p class="paragraph">@lang('Please note that every order you submit is subject to acceptance by us. We retain the right to withhold acceptance at our absolute discretion.')</p>
                    </li>
                    <li>
                        <h6 class="text-secondary">@lang('Cancellation Policy') : </h6>
                        <p class="paragraph">@lang('Kindly be aware that orders cannot be canceled once we\'ve initiated the processing. Once the processing has begun, it will proceed as a regular order.')</p>
                    </li>
                    <li>
                        <h6 class="text-secondary">@lang('Order Modification') : </h6>
                        <p class="paragraph">@lang('It\'s essential to provide accurate instructions and turnaround time during the initial submission. After an order has been processed or delivered to you, modifications or revisions to the instructions or turnaround time are not feasible. ')</p>
                    </li>
                    <li>
                        <h6 class="text-secondary">@lang('Free Trial Service and Account Creation')</h6>
                        <p class="paragraph">@lang('If you opt for our free trial service and request a quotation, we\'ll create an account for you in our Portal under your name.')</p>
                    </li>
                    <li>
                        <h6 class="text-secondary">@lang('Account Security')</h6>
                        <p class="paragraph">@lang('For security reasons, we strongly advise against sharing your password or account details with anyone. Keeping this information confidential ensures the safety of your account.')</p>
                    </li>
                </ul>
                <p class="paragraph">@lang('By following these guidelines, your experience with the Portal will be smooth, efficient, and hassle-free. Should you have any further queries or require assistance, do not hesitate to reach out to us. We\'re here to help!')</p>
         
               </div>

               <div id="image_submission" class="paragraph my-5">
                <h5 class="text-primary">05. @lang('Image Submission Terms ')</h5>
                <p>@lang('To ensure the provision of exceptional service, we have implemented stringent guidelines pertaining to image submissions. By engaging with our service and submitting your images, you expressly agree to abstain from providing any content falling within the following prohibited ')</p>
               </div>

               <div id="turnaround" class="paragraph my-5">
                <h5 class="text-primary">06. @lang('Turnaround time')</h5>
                <p>@lang('The countdown for the turnaround time will commence upon receipt of all your images; it will not begin immediately after placing the order. Kindly note that our office observes Sunday as a holiday, and during this time, all operations are suspended. Therefore, if you place an order on Saturday, the delivery of your images will take place on Monday. However, if you require expedited service on Sunday, we offer an additional shift option with an extra charge. In such cases, please reach out to us before creating your order to arrange the necessary arrangements and make the payment for the overtime service')</p>
                <p>@lang('Please be aware that the delivery of images may experience delays in the event of natural calamities, regional issues, or national disasters. We would like to inform you that we cannot be held responsible for any delays in image delivery arising from unforeseen circumstances.')</p>
               </div>

               <div id="payment_method" class="paragraph my-5">
                <h5 class="text-primary">07. @lang(' Payment Method')</h5>
                
                <p>@lang('Our prices are displayed in US dollars ($) on the website. However, your invoice will show the price converted into your local currency. For Australian orders, we accept payments in Australian Dollars. Canadian orders are processed in Canadian Dollars, while United Kingdom orders are charged in British Pounds')</p>
                <p>@lang('European countries including Åland Islands, Andorra, Austria, Belgium, Croatia, Cyprus, Estonia, Finland, France, French Guiana, Guadeloupe, Germany, Greece, Ireland, Italy, Kosovo, Latvia, Lithuania, Luxembourg, Malta, Martinique, Mayotte, Monaco, Montenegro, Netherlands, Portugal, Reunion, Slovakia, Slovenia, Spain, San Marino, Saint Pierre and Miquelon, Saint Barthelemy, Saint Martin, and Vatican City will be invoiced in EURO.')</p>
                <p>@lang('We offer PayPal and Stripe as our preferred Payment Gateways. You can conveniently make payments through PayPal, using either your Debit or Credit Card. Additionally, we accept payments via Bank Transfer, although verification may take 7-10 days in such cases. We encourage using automated payment gateways for smoother transactions')</p>
                <p>@lang('Please note that third-party apps like PayPal and Stripe have their own terms and user policies, which you must acknowledge while using their services. Any behaviour or policies of these third parties during the payment process that may go against your interest will not be the responsibility of Pix Clipping Ltd.')</p>
               </div>

               <div id="wallet" class="paragraph my-5">
                <h5 class="text-primary">09. @lang('Payment via WALLET BALANCE')</h5>
                <p>@lang('Presenting Wallet: Your Convenient Payment Solution. Our cutting-edge Wallet feature is designed to streamline your payment experience, making it a hassle-free process. Seamlessly Top-Up your wallet balance to easily settle invoices and relish the freedom of using this credit for all your future orders. We take pride in offering you comprehensive transaction records for your reference, ensuring complete transparency.')</p>
                
                <p>@lang('Checking your wallet balance and recharging your credit has never been easier; it\'s now as simple as a gentle breeze. The best part? Your wallet balance is everlasting, granting you complete peace of mind. Rest assured, there\'s no need to worry about expiration dates.')</p>
                <p>@lang('However, please be aware that the Wallet balance is non-refundable and exclusively dedicated to ordering services from Pix Clipping Ltd. We\'re committed to delivering an exceptional experience, and our Wallet feature plays a significant role in achieving that goal.')</p>
               </div>


               <div id="free_trial" class="paragraph my-5">
                <h5 class="text-primary">10. @lang('Free Trial ')</h5>
                <p>@lang('We understand the importance of post-processing for your images, whether you have just a few or a bulk of them. That\'s why we\'re offering a complimentary free trial to help you witness the quality of our services firsthand.')</p>
                
                <p>@lang('During the free trial, you can put our various offerings to the test, including photo retouching, photo recoloring, clipping path, background removal, teeth enhancement, skin retouching, jewelry retouching, exposure adjustment, image masking, wrinkles removal, and object removal. We\'re happy to provide any simple photo retouching services you may require, and rest assured, the instructions you provide will be straightforward and uncomplicated.')</p>
                <p>@lang('While our free trial focuses on simple image retouching, for more complex projects or bulk image retouching needs, don\'t hesitate to reach out to us for a tailored solution. To get started with the free trial, kindly furnish us with the following details: Your Full Name, E-mail, Phone Number, Country, and specific Service you wish to try out (Clipping Path, Background Removal, Multi-Path, Image Masking, Shadow Making, Ghost Mannequin, Cropping & Resizing, Image Recoloring, or Headshot Retouching). Also, let us know the Total Number of Images in your Project and provide any necessary Instructions')</p>

                <p>@lang('Once your information has been verified, we will promptly commence the image processing for your free trial. Should you choose to avail our free trial service, rest assured that an account in your name will be automatically created in our portal, streamlining your experience with us. Experience the difference with our free trial and discover the potential of your images in a whole new light!')</p>
               </div>
               

               <div id="quote" class="paragraph my-5">
                <h5 class="text-primary">11. @lang('Quote & Order')</h5>
                <p>@lang('Discover our pricing with a complimentary quote. Simply fill out a form and submit it to receive your free quotation. Based on the number of images, complexity of retouching, and desired delivery time, we\'ll promptly send you a personalized quote')</p>
                <p>@lang('Our quotations display the prices in USD ($), but upon request, we can provide the quotation price in your local currency. Upon receiving a quote, an account will be automatically created for you in the Portal under your name. Please note that if the sample provided and the order image do not match, the pricing may vary.')</p>
               </div>

               <div id="replacement" class="paragraph my-5">
                <h5 class="text-primary">13. @lang('Photo Replacement after Order')</h5>
                <p>@lang('Once an order is placed, we regret to inform you that we do NOT accept photo replacements. In the event of an incorrect image submission, kindly note that we cannot provide complimentary photo editing for another replacement. The responsibility for any repercussions arising from uploading incorrect images lies solely with you.')</p>
                <p>@lang('Nevertheless, if you wish to replace your photos, please feel free to reach out to us. It\'s important to note that if your images are already in the processing stage, we are unable to accommodate photo replacements.')</p>
               </div>

               <div id="settlement" class="paragraph my-5">
                <h5 class="text-primary">14. @lang('Settlement')</h5>
                <p>@lang('We consistently extend negotiation opportunities to our valued clients. Disputes may arise at any stage, spanning from project initiation to completion. Should any such dispute emerge, we gladly invite our clients to engage in discussions concerning contractual matters.')</p>
               </div>

               <div id="marketing" class="paragraph my-5">
                <h5 class="text-primary">15. @lang('Marketing')</h5>
                <p>@lang('Upon registering a service with our company, we kindly request the privilege of utilising your esteemed name and logo for our marketing endeavours, proudly acknowledging you as one of our valued clients."') </p>
                <p>@lang(' "In the event that you encounter any concerns or inquiries, we encourage you to engage in an open discussion with our dedicated support team, who are always ready to assist.
                    ')</p>
               </div>
               
               <div id="privacy" class="paragraph my-5">
                <h5 class="text-primary">16. @lang('Privacy')</h5>
                <p>@lang('Explore our privacy policy page to familiarise yourself with our privacy guidelines.')</p>
               </div>

               <div id="agreement" class="paragraph my-5">
                <h5 class="text-primary">17. @lang('Changes to Agreement')</h5>
                <p>@lang('Please note that Pix Clipping Ltd. retains the right to modify the terms and conditions of our agreements at any time. By visiting our website and placing an order for our services, you explicitly indicate your acceptance of any amendments made to these terms.')</p>
               </div>

               <div id="cancellation" class="paragraph my-5">
                <h5 class="text-primary">18. @lang('Cancellation and Termination')</h5>
                <p>@lang('PixClipping retains the prerogative to cancel the order/service, terminate the deal, or suspend the Account at any given moment.Should we ascertain that an account has been utilised to abuse our Services, we will suspend it or terminate the business association accordingly.')</p>
                <p>@lang('Additionally, if there are suspicions regarding your Account, we may suspend it as a precautionary measure. Requesting the cancellation of an ongoing project without a valid reason will lead to the termination of the business agreement.')</p>
               </div>

               <div id="pixclipping" class="paragraph my-5">
                <h5 class="text-primary">19. @lang('Pix Clipping Ltd. Website')</h5>
                <p>@lang('The team at Pix Clipping is continuously proactive in ensuring the site\'s functionality, ensuring a seamless user experience. Nevertheless, there might be instances where technical difficulties arise, or we opt to make adjustments, remove, or temporarily/permanently discontinue any function or service without prior notification. Rest assured, we are committed to enhancing the site, and your understanding regarding any modifications, upgrades, discontinuations, or maintenance of the site or services is highly appreciated.
                    ')</p>
                
               </div>
            </div>
        </div>
    </div>
</section>

@endsection

