@extends('front.layouts.master')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('uploads/'.$global_setting->banner) }});">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Process</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                <li>Process</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->
 <!-- End Service Section -->
 <section class="process-wrapper pt-100">
    <div class= "auto-container">
       <div class="row">
          <div class="col-md-6 mb-4">
             <div class="sec-title">
                <span class="sub-title text-uppercase">LINKEDIN LEAD GENERATION SERVICES</span>
                <h2 class="text-capitilize">High quality products and services that we stand behind</h2>
            </div>
             <div class="process-content">
                <ul>
                   <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#78cf9d42"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>Premier Connect is an <span class="theme-color1"> easy-to-use </span> sales engagement platform that fast tracks your lead generation & outbound sales.
                      </p>
                   </li>
                </ul>
             </div>
          </div>
          <div class="col-md-6 mb-4">
             <div class="process-img">
                <img src="{{ asset('dist-front/images/process1.jpg') }}" alt="process1">
                <div class="play-btn">
                   <a href="https://www.youtube.com/watch?v=EWEDUrd1i5g" class="play-now lightbox-image"><i class=" fa fa-play"></i></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- process Section -->
 <section class="how-to-work pt-50">
    <div class= "auto-container">
       <div class="row align-items-center pt-50">
          <div class="col-md-7 mb-4">
             <div class="work-wrapper">
                <h3 class="process-sub-title  wow animated fadeInDown"> 0.1 TARGET</h3>
                <h2 class="process-heading-title  wow animated fadeInLeft"> <span class="theme-color1">Targeting</span> your ideal prospects</h2>
                <div class="mt-4">
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                </div>
                
             </div>
          </div>
          <div class="col-md-5  mb-4">
             <div class="work-img video-box-2 position-relative wow animated fadeInRight">
                <img src="{{ asset('dist-front/images/imgb.png') }}"  alt="">
                <a href="https://www.youtube.com/watch?v=EWEDUrd1i5g" class="play-btn" data-fancybox="gallery"><i class="icon fa fa-play" aria-hidden="true"></i></a>
             </div>
          </div>
          <div class="col-md-12 text-center">
             <a href="#process1" class="smoth-scroll">
                <i class="fas fa-chevron-down"></i>
                <span class="tooltiptext">Next Level </span>
            </a>
          </div>
       </div>
       <div class="row align-items-center flex-column-reverse flex-md-row pt-50" id="process1">
         
          <div class="col-md-5  mb-4 ">
             <div class="work-img video-box-2 position-relative wow animated fadeInLeft">
                <img src="{{ asset('dist-front/images/imgc.png') }}" alt="">
                <a href="https://www.youtube.com/watch?v=EWEDUrd1i5g" class="play-btn" data-fancybox="gallery"><i class="icon fa fa-play" aria-hidden="true"></i></a>
             </div>
          </div>
          <div class="col-md-7 mb-4 ">
             <div class="work-wrapper">
                <h3 class="process-sub-title  wow animated fadeInDown"> 0.2 REACH OUT</h3>
                <h2 class="process-heading-title  wow animated fadeInLeft"> <span class="theme-color1">Messaging</span>  isn't your top concern</h2>
                <div class="mt-4">
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                </div>
                
             </div>
          </div>
          <div class="col-md-12 text-center">
             <a href="#process2" class="smoth-scroll">
                <i class="fas fa-chevron-down"></i>
                <span class="tooltiptext">Next Level </span>
            </a>
          </div>
       </div>
       <div class="row align-items-center pt-50" id="process2">
          <div class="col-md-7 mb-4">
             <div class="work-wrapper">
                <h3 class="process-sub-title  wow animated fadeInDown">0.3 NURTURE</h3>
                <h2 class="process-heading-title  wow animated fadeInLeft"> <span class="theme-color1">Developing</span>  rapport takes finesse</h2>
                <div class="mt-4">
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                   <div  class="work-description mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                         <g clip-path="url(#clip0_166_360)">
                            <circle cx="15" cy="15" r="15" fill="#F1F8FE"></circle>
                            <path d="M21.1766 11.4706L13.2906 19.4118L9.70605 15.8021" stroke="#78cf9d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                         <defs>
                            <clipPath id="clip0_166_360">
                               <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                         </defs>
                      </svg>
                      <p>
                         We’ll work with you to narrow down your new-prospect search and optimize your profile, showing you the best strategy to hook people in and foster valuable bonds.					</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-5  mb-4 ">
             <div class="work-img video-box-2 position-relative wow animated fadeInRight">
                <img src="{{ asset('dist-front/images/imgd.png') }}" alt="">
                <a href="https://www.youtube.com/watch?v=EWEDUrd1i5g" class="play-btn" data-fancybox="gallery"><i class="icon fa fa-play" aria-hidden="true"></i></a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- how-to-work Section -->
 <script>

    /* magnificPopup img view */
    $('.popup-image').magnificPopup({
       type: 'image',
       gallery: {
             enabled: true
       }
    });

    /* magnificPopup video view */
    $('.popup-video').magnificPopup({
       type: 'iframe'
    });

    //LightBox / Fancybox
    if($('.lightbox-image').length) {
       $('.lightbox-image').fancybox({
          openEffect  : 'fade',
          closeEffect : 'fade',
          helpers : {
             media : {}
          }
       });
    }
 </script>

@endsection