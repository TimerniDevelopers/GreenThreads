<!DOCTYPE html>
<html @if (session('sess_lang_direction') == 'Right to Left (RTL)') dir="rtl" @endif lang="{{ session('sess_lang_code') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>@yield('seo_title')</title>
    <meta name="description" content="@yield('seo_meta_description')">

    <link rel="shortcut icon" href="{{ asset('uploads/' . $global_setting->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('uploads/' . $global_setting->favicon) }}" type="image/x-icon">

    @include('front.layouts.styles')

    @yield('dark_mode')

    @if ($global_setting->sticky_header == 'Hide')
        <style>
            .sticky-header.fixed-header {
                display: none;
            }
        </style>
    @endif

    @if ($global_setting->tawk_live_chat_status == 'Show')
        <style>
            .scroll-to-top {
                bottom: 50px !important;
            }
        </style>
    @endif

    @if ($global_setting->cookie_consent_status == 'Show')
        <script src="https://cdn.websitepolicies.io/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script>
        <script>
            window.addEventListener("load", function() {
                window.wpcc.init({
                    "colors": {
                        "popup": {
                            "background": "#{{ $global_setting->cookie_consent_bg_color }}",
                            "text": "#{{ $global_setting->cookie_consent_text_color }}",
                            "border": "#b3d0e4"
                        },
                        "button": {
                            "background": "#{{ $global_setting->cookie_consent_button_bg_color }}",
                            "text": "#{{ $global_setting->cookie_consent_button_text_color }}"
                        }
                    },
                    "position": "bottom",
                    "padding": "large",
                    "margin": "none",
                    "content": {
                        "message": "{{ $global_setting->cookie_consent_message }}",
                        "button": "{{ $global_setting->cookie_consent_button_text }}"
                    }
                })
            });
        </script>
    @endif

    @if ($global_setting->google_analytic_status == 'Show')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $global_setting->google_analytic_id }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', '{{ $global_setting->google_analytic_id }}');
        </script>
    @endif

    <style>
        :root {
            --theme-color1: #{{ $global_setting->theme_color }};
        }
    </style>

</head>

<body>

    <div class="page-wrapper">

        @if ($global_setting->preloader == 'Show')
            <div class="preloader"></div>
        @endif

        <!-- header start -->


        @include('front.layouts.top')
        <header class="header-top header header-sticky  menu-area">
            <div class="inner-container py-3">
                <div class="row v-center align-items-center">
                    <div class="header-item item-left">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('uploads/' . $global_setting->logo) }}"
                                    alt="{{ env('APP_NAME') }}"></a>
                        </div>
                    </div>
                    <!-- menu start here -->
                    <div class="header-item item-center">
                        <div class="menu-overlay"></div>
                        <nav class="menu">
                            <div class="mobile-menu-head">
                                <div class="go-back"><i class="fa fa-angle-left"></i></div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="menu-main">

                                @if ($global_setting->home_show == 'All')
                                    <li
                                        class="{{ Request::is('/') || Route::is('home_1') || Route::is('home_2') || Route::is('home_3') || Route::is('home_4') ? 'current' : '' }} dropdown">
                                        <a href="javascript:;">{{ __('Home') }}</a>
                                        <ul>
                                            <li><a href="{{ route('home_1') }}">{{ __('Home Layout 1') }}</a></li>
                                            <li><a href="{{ route('home_2') }}">{{ __('Home Layout 2') }}</a></li>
                                            <li><a href="{{ route('home_3') }}">{{ __('Home Layout 3') }}</a></li>
                                            <li><a href="{{ route('home_4') }}">{{ __('Home Layout 4') }}</a></li>
                                        </ul>
                                    </li>
                                @endif
                                @if ($global_setting->home_show == 'Home 1')
                                    <li class="{{ Route::is('home') ? 'current' : '' }}">
                                        <a href="{{ route('home') }}">{{ __('Home') }}</a>
                                    </li>
                                @endif

                                @if ($global_setting->home_show == 'Home 2')
                                    <li class="{{ Route::is('home') ? 'current' : '' }}">
                                        <a href="{{ route('home') }}">{{ __('Home') }}</a>
                                    </li>
                                @endif

                                @if ($global_setting->home_show == 'Home 3')
                                    <li class="{{ Route::is('home') ? 'current' : '' }}">
                                        <a href="{{ route('home') }}">{{ __('Home') }}</a>
                                    </li>
                                @endif

                                @if ($global_setting->home_show == 'Home 4')
                                    <li class="{{ Route::is('home') ? 'current' : '' }}">
                                        <a href="{{ route('home') }}">{{ __('Home') }}</a>
                                    </li>
                                @endif

                                @foreach ($global_menu as $item)
                                    @php
                                        $menu_arr[$item->name] = $item->status;
                                    @endphp
                                @endforeach
                                <li class="menu-item-has-children">
                                    <a href="#">Solution <i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu mega-menu mega-2">
                                        <div class="container">
                                            <div class="subLinks" id="firstStyle">
                                                <div class="in">
                                                    <div class="division">
                                                        <div class="wrap">
                                                            <div class="group">
                                                                <p>Brands</p>
                                                                <ul>
                                                                    <li class=""> <a href="#"
                                                                            target=""> <span id="main">1.
                                                                                Getting
                                                                                started?</span> <span
                                                                                id="desc">Let's develop your
                                                                                sustainability&nbsp;plan</span> </a>
                                                                    </li>
                                                                    <li class=""> <a href="#"
                                                                            target=""> <span id="main">2.
                                                                                Improve
                                                                                performance</span> <span
                                                                                id="desc">With an established
                                                                                baseline, know where to act</span> </a>
                                                                    </li>
                                                                    <li class=""> <a href="#"
                                                                            target=""> <span id="main">3.
                                                                                Scale
                                                                                progress</span> <span
                                                                                id="desc">Build a fully-integrated
                                                                                sustainability program</span> </a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="division" id="right">
                                                        <div class="wrap">
                                                            <div class="group">
                                                                <p class="text-white">Manufacturers</p>
                                                                <ul>
                                                                    <li class=""> <a href="#"
                                                                            target=""> <span id="main">Track
                                                                                factory
                                                                                impacts</span> <span
                                                                                id="desc">Fulfill requirements for
                                                                                sustainability reporting</span> </a>
                                                                    </li>
                                                                </ul>
                                                                <a<a href="#" class="mainBtn" target="_blank">
                                                                    Manufacturer
                                                                    Subscriptions</a>
                                                            </div>
                                                            <img src="{{ asset('dist-front/images/shape-sol.svg') }}"
                                                                alt="Shape" class="hide991" id="shape">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="services.html">{{ __('Pages') }} <i class="fas fa-angle-down"></i></a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            @if ($menu_arr['About'] == 'Show')
                                                <li><a href="{{ route('about') }}">{{ __('About Us') }}</a></li>
                                            @endif

                                            @if ($menu_arr['Team Members'] == 'Show')
                                                <li><a href="{{ route('team_members') }}">{{ __('Team') }}</a>
                                                </li>
                                            @endif

                                            @if ($menu_arr['Testimonials'] == 'Show')
                                                <li><a href="{{ route('testimonials') }}">{{ __('Testimonial') }}</a>
                                                </li>
                                            @endif

                                            @if ($menu_arr['Pricing'] == 'Show')
                                                <li><a href="{{ route('pricing_plans') }}">{{ __('Pricing') }}</a>
                                                </li>
                                            @endif

                                            @if ($menu_arr['FAQ'] == 'Show')
                                                <li><a href="{{ route('faqs') }}">{{ __('FAQ') }}</a></li>
                                            @endif

                                            @foreach ($global_custom_pages as $item)
                                                <li><a
                                                        href="{{ route('custom_page', $item->slug) }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </li>
                                @if ($menu_arr['Services'] == 'Show')
                                    <li class="{{ Request::is('services') ? 'current' : '' }}">
                                        <a href="{{ route('services') }}">{{ __('Services') }}</a>
                                    </li>
                                @endif
                                <li><a href="{{ route('process') }}">Process</a></li>

                                @if ($menu_arr['Portfolios'] == 'Show')
                                    <li class="{{ Request::is('portfolios') ? 'current' : '' }}">
                                        <a href="{{ route('portfolios') }}">{{ __('Portfolios') }}</a>
                                    </li>
                                @endif

                                @if ($menu_arr['Blog'] == 'Show')
                                    <li class="{{ Request::is('blog') ? 'current' : '' }}">
                                        <a href="{{ route('blog') }}">{{ __('Blog') }}</a>
                                    </li>
                                @endif

                                @if ($menu_arr['Contact'] == 'Show')
                                    <li class="{{ Request::is('contact') ? 'current' : '' }}">
                                        <a href="{{ route('contact') }}">{{ __('Contact') }}</a>
                                    </li>
                                @endif

                                

                            </ul>
                        </nav>
                    </div>
                    <!-- menu end here -->
                    <div class="header-item item-right main-header outer-box">
                        <button class="ui-btn ui-btn search-btn">
                            <span class="icon lnr lnr-icon-search"></span>
                        </button>
                        @if ($global_setting->top_bar_phone != '')
                            <a href="tel:{{ $global_setting->top_bar_phone }}" class="info-btn">
                                <i class="icon lnr-icon-phone-handset"></i>
                                <small>{{ __('Call Anytime') }}</small>
                                {{ $global_setting->top_bar_phone }}
                            </a>
                        @endif
                        <!-- mobile menu trigger -->
                        <div class="mobile-menu-trigger">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->


        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="bg bg-pattern-6"></div>

            @if ($global_setting->footer_phone != '' || $global_setting->footer_email != '' || $global_setting->footer_address != '')
                <div class="footer-upper">
                    <div class="auto-container">
                        <div class="row">
                            @if ($global_setting->footer_phone != '')
                                <div class="contact-info-block col-lg-4 col-md-6">
                                    <div class="inner">
                                        <i class="icon fa fa-phone-square"></i>
                                        <span class="sub-title">{{ __('Call Anytime') }}</span>
                                        <div class="text"><a
                                                href="tel:+{{ $global_setting->footer_phone }}">{{ $global_setting->footer_phone }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ($global_setting->footer_email != '')
                                <div class="contact-info-block col-lg-4 col-md-6">
                                    <div class="inner">
                                        <i class="icon fa fa-envelope"></i>
                                        <span class="sub-title">{{ __('Send Email') }}</span>
                                        <div class="text"><a
                                                href="mailto:{{ $global_setting->footer_email }}">{{ $global_setting->footer_email }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ($global_setting->footer_address != '')
                                <div class="contact-info-block col-lg-4 col-md-6">
                                    <div class="inner">
                                        <i class="icon fa fa-map-marker"></i>
                                        <span class="sub-title">{{ __('Address') }}</span>
                                        <div class="text">{{ $global_setting->footer_address }}</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!-- Footer COlumn -->
                        <div class="footer-column col-xl-5 col-lg-4 col-md-12">
                            <div class="footer-widget about-widget">
                                <div class="widget-content">
                                    <div class="logo"><a href="{{ route('home') }}"><img
                                                src="{{ asset('uploads/' . $global_setting->logo) }}"
                                                alt="{{ env('APP_NAME') }}"></a></div>
                                    <div class="text">{!! str_replace(['<p>', '</p>'], ['', ''], clean(nl2br($global_setting->footer_text))) !!}</div>
                                    @if (
                                        $global_setting->twitter != '' ||
                                            $global_setting->facebook != '' ||
                                            $global_setting->linkedin != '' ||
                                            $global_setting->instagram != '' ||
                                            $global_setting->youtube != '' ||
                                            $global_setting->pinterest)
                                        <ul class="social-icon-two">
                                            @if ($global_setting->twitter != '')
                                                <li><a href="{{ $global_setting->twitter }}"><i
                                                            class="fab fa-twitter"></i></a></li>
                                            @endif

                                            @if ($global_setting->facebook != '')
                                                <li><a href="{{ $global_setting->facebook }}"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                            @endif

                                            @if ($global_setting->linkedin != '')
                                                <li><a href="{{ $global_setting->linkedin }}"><i
                                                            class="fab fa-linkedin-in"></i></a></li>
                                            @endif

                                            @if ($global_setting->instagram != '')
                                                <li><a href="{{ $global_setting->instagram }}"><i
                                                            class="fab fa-instagram"></i></a></li>
                                            @endif

                                            @if ($global_setting->youtube != '')
                                                <li><a href="{{ $global_setting->youtube }}"><i
                                                            class="fab fa-youtube"></i></a></li>
                                            @endif

                                            @if ($global_setting->pinterest != '')
                                                <li><a href="{{ $global_setting->pinterest }}"><i
                                                            class="fab fa-pinterest-p"></i></a></li>
                                            @endif
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Footer COlumn -->
                        <div class="footer-column col-xl-4 col-lg-4 col-md-6">
                            <div class="widget links-widget">
                                <h5 class="widget-title">{{ $global_setting->footer_links_heading }}</h5>
                                <div class="widget-content">
                                    <ul class="user-links two-column">
                                        <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                                        <li><a href="{{ route('team_members') }}">{{ __('Team Members') }}</a></li>
                                        <li><a href="{{ route('services') }}">{{ __('Services') }}</a></li>
                                        <li><a href="{{ route('testimonials') }}">{{ __('Testimonials') }}</a></li>
                                        <li><a href="{{ route('portfolios') }}">{{ __('Portfolios') }}</a></li>
                                        <li><a href="{{ route('faqs') }}">{{ __('FAQ') }}</a></li>
                                        <li><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                                        <li><a href="{{ route('terms') }}">{{ __('Terms of Use') }}</a></li>
                                        <li><a href="{{ route('pricing_plans') }}">{{ __('Pricing') }}</a></li>
                                        <li><a href="{{ route('privacy') }}">{{ __('Privacy Policy') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="widget newsletter-widget">
                                <h5 class="widget-title">{{ $global_setting->footer_subscriber_heading }}</h5>
                                <div class="widget-content">
                                    <div class="text">{!! str_replace(['<p>', '</p>'], ['', ''], clean(nl2br($global_setting->footer_subscriber_text))) !!}</div>
                                    <div class="subscribe-form">
                                        <form method="post" action="{{ route('subscriber_submit') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" class="email" value=""
                                                    placeholder="{{ __('Email Address') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit"
                                                    class="theme-btn btn-style-one hover-light"><span
                                                        class="btn-title">{{ __('Subscribe') }}</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright-text">{{ $global_setting->footer_copyright }} <img
                            src="{{ asset('/dist-front/images/icons/Tri_logo.png') }}" style="height: 28px;"></div>
                </div>
            </div>
        </footer>

    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    @include('front.layouts.scripts')

    @if ($global_setting->tawk_live_chat_status == 'Show')
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/{{ $global_setting->tawk_live_chat_property_id }}/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    @endif

</body>

</html>
