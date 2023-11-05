@extends('layouts.frontend.app')
@section('content')

<section id="slider" class="hero p-0 odd ">
  <div class="swiper-container no-slider slider-h-60">
      <div class="swiper-wrapper">
          <!-- Item 1 -->
          <div class="swiper-slide slide-center" id="bread">
            <img src="{{asset('/front-assets/images/faq/faq.png')}}" class="full-image" data-mask="70">
              <div class="slide-content row text-center">
                  <div class="col-12 mx-auto inner">
                      <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text" style="font-size: 3rem;"><a href="" style="font-size: 4rem;">Home</a>/{{isset($title) ? $title :'About Us'}}</h1>
                     
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


<section id="faq" class="faq">
  <div class="container">
    <div class="my-1">
      <h2 class="text-center text-secondary">Frequently Asked Questions</h2>
    </div>

    <div class="faq-list mb-5">

      <h4 class="text-primary">#@lang('Basic')</h4>

      <ul>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> @lang('Pix Clipping\'s location? ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p class="paragraph">
              PixClipping, your top choice for premium photo editing and retouching services, is headquartered in the Netherlands. Our post production house operates in Bangladesh, ensuring top-notch quality and unmatched expertise as well as the competitive pricing ensures.
            </p>
          </div>
        </li>

        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">@lang('What are your hours of operation? ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              @lang('Our office operates Monday to Saturday in three shifts. Our support team is available 24/7, 365 days a year. Sundays are our off days. For emergencies or special projects, weekend services are available at an extra charge.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">@lang('Why choose Pix Clipping for your editing needs?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              @lang('We specialise in delivering unparalleled flexibility through our comprehensive image editing solutions. With us, you can effortlessly access your images, benefit from adaptable payment plans, and customise pricing according to your unique requirements. Our commitment to unwavering quality and dedicated client support ensures you receive premium photo post-processing services promptly and affordably. 
              When you partner with us, you can confidently initiate your extensive projects, backed by a team of expert designers dedicated to your success.
              ')
            </p>
          </div>
        </li>

      </ul>
    </div>

    {{-- service --}}
    <div class="faq-list">
      <h4 class="text-primary">#@lang('Service')</h4>
      <ul>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">@lang('What\'s your policy on free trials?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Experience the quality of our editing with a complimentary trial. Edit one photo per service at no cost. During the trial, we prioritise simplicity. For further information, consult our Free Trial Policy within the Terms of Service section. ')
            </p>
          </div>
        </li>

        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">@lang('How do I submit an image for a free trial?  ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('For a complimentary trial image, simply click here to upload files up to 300MB. Need assistance with larger images? Reach out to support@pixclipping.com.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">@lang('What\'s the limit for free trial image retouching?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('You\'re entitled to a complimentary trial retouch for one image per service.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">@lang('What is your turnaround time? ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('We typically deliver within 24hrs. Express options available in 6hrs, 12hrs, and 18hrs for a fee. Project delivery per agreement terms; slight delays during busy periods. Emergency rush orders accepted with higher pricing, ensuring most orders are on time.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">@lang('Do you provide rush hour delivery?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Your needs come first. Experience swift service delivery within 2 to 3 hours or even faster. Timely output varies based on image quantity and editing complexity. Rush jobs incur additional charges beyond our standard rates.')
            </p>
          </div>
        </li>

        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">@lang('What do you consider "next morning"?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Get your images in 24 hours, although delivery times depend on our production schedule. Busy days might cause a slight delay. Need them urgently? Rush delivery available at a higher rate. We ensure timely delivery for all orders, barring emergencies.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">@lang('Can you count on timely image delivery? ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Timely image delivery is our commitment. Our dedicated team ensures quality service within the schedule. Please note, we observe Sundays as our weekend. Quotes on Saturday will be delivered on Monday. Need Sunday service? Notify us in advance for an extra shift. Project-based work delivery is tailored per discussion.')
            </p>
          </div>
        </li>

        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">@lang('Do you offer a redo policy?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Not happy with our work?  We provide a satisfaction guarantee with the option to redo. Explore our terms of service for details on redo options.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed">@lang('What is the difference between redo and correction? 
            ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Upon reviewing the image, you\'re welcome to request a redo. This entails enhancing specific aspects mentioned in your order through slight retouching, all at no additional cost.

              For any changes to retouching instructions, image quantity, delivery time, or unmentioned alterations, it\'s considered a Correction. Each correction will be treated as a new order and will require corresponding payment adjustments.
              ')
            </p>
          </div>
        </li>

      </ul>
    </div>

    {{-- account --}}
    <div class="faq-list">
      <h4 class="text-primary">#@lang('Account')</h4>
      <ul>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-13" class="collapsed">@lang('How can I create an account? ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-13" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Sign up on our Portal for swift access to professional photo editing services.')
            </p>
          </div>
        </li>

        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-14" class="collapsed">@lang('How do I place a new order?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-14" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Start by creating an account on our portal. Once logged in, simply click \'Place Order\' on your dashboard.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed">@lang('What happens if I can\'t remember my password or login information?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Reset your account password by clicking on \'Forgot Password\'.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-16" class="collapsed">@lang('How can I efficiently transfer a large amount of data?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-16" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('With our Portal account, you can easily and swiftly transfer large volumes of data. You\'ll also have access to a personal FTP account. Plus, you have the option to utilise third-party data transfer methods such as WeTransfer, Dropbox, YouSendIt, or your preferred choice.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-17" class="collapsed">@lang('Do you offer images in various formats?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-17" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Certainly! Feel free to send images in popular formats like .jpg, .jpeg, .png, .gif, .tif, .zip, .rar, and .psd. We also accept camera raw files with a small additional fee. Kindly avoid sending files in .exe format.')
            </p>
          </div>
        </li>

        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-18" class="collapsed">@lang('Are there any file transfer limitations?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-18" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('There\'s no limit for sending large volumes of images. Feel free to use Dropbox, FTP, Google Drive, or our Portal – whichever suits you best.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-19" class="collapsed">@lang('Where can I obtain an FTP account?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-19" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('For large image quantities or hefty file sizes requiring secure and speedy transfers, PixClipping offers an FTP account upon request.
              ')
            </p>
          </div>
        </li>

        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-20" class="collapsed">@lang('Is there unlimited FTP access available?
            ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-20" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('We offer unlimited space FTP accounts. Please let us know your file size and space requirements.')
            </p>
          </div>
        </li>
        
      </ul>
    </div>

    {{-- pricing and payment --}}
    <div class="faq-list mb-5">
      <h4 class="text-primary">#@lang('Pricing & Payment')</h4>
      <ul>
        
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-27" class="collapsed">@lang('Unsure about the right plan for you?
            ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-27" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Uncertain about the right image editing plan? Reach out to us now. Our expert support team will help you select the perfect editing option and plan tailored for your needs. No matter your project, we\'ll handle it at your convenience. ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-28" class="collapsed">@lang('How is the price determined based on image complexity?
            ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-28" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('We assess image complexity manually and adjust pricing accordingly. Visit our Pricing section in the Terms of Service for details.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-30" class="collapsed">@lang('Can you provide a more budget-friendly option? ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-30" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Experience top-quality editing at our unbeatable rates. We provide exceptional editing services with instant support and unlimited revisions, all at our minimum fixed price. Unlike others, we never charge extra for support or revisions. When you factor in our speed, quality, and comprehensive services, we\'re the most cost-effective choice in the market.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-31" class="collapsed">@lang('What\'s the frequency of your payment cycle?
            ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-31" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Payment is required upon completion of your photo editing. Simply log in to your account, settle your payment, and access your downloaded images. Please note that photos cannot be downloaded without payment.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-32" class="collapsed">@lang('What payment methods do you support?
            ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-32" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('We accept payments via PayPal, credit cards, wire PIN transfer (up to $4500), and direct bank transfer for your convenience.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-33" class="collapsed">@lang('Do you offer flexible payment options? ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-33" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('For our regular clients, we offer flexible payment options, including weekly, quarterly, or monthly schedules for regular services. For project-based work, payments are made according to a predetermined schedule agreed upon by the client and the company. The final output can be downloaded once the total payment has been completed.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-34" class="collapsed">@lang('Can I download images without payment? 
            ') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-34" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Payment is required to download your images. Regular clients and project-based work may have flexible payment options, subject to agreement between the company and the client.')
            </p>
          </div>
        </li>

      </ul>
    </div>

    {{-- privacy --}}
    <div class="faq-list mb-5">
      <h4 class="text-primary">#@lang('Privacy & Security ')</h4>
      <ul>
        
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-21" class="collapsed">@lang('How do you ensure the security of my images?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-21" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('PixClipping ensures the utmost security for your images. We understand their value to you. We\'ll only use your images on our website portfolio page with your permission. Find details in our Privacy Policy.
              ')
            </p>
          </div>
        </li>

      </ul>
    </div>

    {{-- project base --}}
    <div class="faq-list mb-5">
      <h4 class="text-primary">#@lang('Project Base')</h4>
      <ul>
        
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-22" class="collapsed">@lang('Do you handle project-based work?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-22" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Certainly! We\'re equipped to manage your retouching project efficiently. Upon your request, we can assign a dedicated team exclusively to your project, ensuring focused and specialised attention until completion.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-23" class="collapsed">@lang('Do you offer e-commerce services?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-23" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Our experienced DTP designers specialise in diverse global photo post-processing needs. Whether it\'s individual or project-based, basic edits or high-end retouching, daily tasks or urgent deliveries, we cater to all. We offer comprehensive photo enhancement services for e-commerce websites, including tailored editing for Amazon and eBay. Our clients boost their product listings with our top-notch ecommerce photo editing services.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-24" class="collapsed">@lang('Do you provide joint venture or dedicated team options?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-24" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Certainly! We sincerely value your interest in a joint venture. Should you need a dedicated team, our skilled designers are available for your editing needs.')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-25" class="collapsed">@lang('Do you provide NDA or legal agreements?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-25" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Certainly. Prior to commencing your project, we ensure a confidentiality agreement through an NDA or appropriate legal documentation.
              ')
            </p>
          </div>
        </li>
        <li>
          <i class="fa fa-question-circle icon-help" aria-hidden="true"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-26" class="collapsed">@lang('Does Pixclipping deliver Amazon, Shopify, and eBay quality images?') <i class="fa fa-sm fa-angle-down icon-show" aria-hidden="true"></i><i class="fa fa-sm fa-angle-up icon-close"></i></a>
          <div id="faq-list-26" class="collapse" data-bs-parent=".faq-list">
            <p class="paragraph">
              @lang('Absolutely! We specialise in meeting Amazon and eBay image standards. With a loyal client base, we\'ve perfected photo editing for these platforms over the years. For bulk editing needs, reach out for unbeatable deals.
              ')
            </p>
          </div>
        </li>

      </ul>
    </div>
  </div>
</section>
@endsection

@push('style')
<style>
  #breadcrumb{
    background-position: center;
    background-size: cover; 
  }
</style>
    
@endpush