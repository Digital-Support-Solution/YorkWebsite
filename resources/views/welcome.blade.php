@extends('layouts.layout')

@section('content')
    <div class="header-search-overlay-bg"></div>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P46BH3N"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <style>
        .cycle-custom-caption .rich-text-editor img {
            margin: 0px;
            display: inline-block;
        }
        .cycle-custom-caption p:last-of-type {
            margin-bottom: 0px;
        }
        @media only screen and (max-width: 767px) {
            .cycle-custom-caption  .rich-text-editor:not(.footer-rich-text-editor) img  {
                width: auto !important;
            }
            .cycle-custom-caption .table-responsive{
                border: 0px;
            }

        }
        .cycle-custom-caption .w-semibold {
            font-size: 24px;
            color: #5705d8;
            font-family: aileron-semibold;
        }
        .cycle-custom-caption .w-regular {

            color: #000 !important
        }
        .cycle-custom-caption .rich-text-editor a{
            font-size: 14px;
        }
    </style>
    <script>
        var LocationID = 176;

        window.addEventListener('load', function () {
            // Get the button that opens the booking
            var btn = document.getElementById("evBtn");

            // When the user clicks the button, open the booking
            btn.onclick = function () {
                window.open('https://web.easyvisit.com.au/?locationID='+LocationID);
            };
        })
        function openModal2() {
            document.getElementById("evBtn").click();
        }
    </script>

    <div class="wrapper sh-page">


        <div class="header-wrapper">

            <header class="header">

                <a href="#main" class="skip-content-btn">Skip to main content</a>



                <div id="header-search-overlay" class="header-search-overlay" aria-hidden="true">
                    <div class="container header-form-container">
                        <form action="/gp/wa-york-york-general-practice/?utm_source=google&amp;utm_medium=organic&amp;utm_campaign=gbp-listing" class="header-search-overlay-form" enctype="multipart/form-data" id="form5538b6c4da974481aa31e912cabf4c50" method="post">            <div class="header-search-overlay-field search-field">
                                <div class="header-search-overlay-action-wrapper search-action cursor-pointer">
                                    <button aria-label="submit" type="submit"></button>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.7321 14.7237C14.8188 14.6372 14.8875 14.5344 14.9344 14.4213C14.9813 14.3082 15.0055 14.1869 15.0055 14.0645C15.0055 13.942 14.9813 13.8208 14.9344 13.7077C14.8875 13.5946 14.8188 13.4918 14.7321 13.4053L10.814 9.49016C10.7645 9.44008 10.7334 9.37474 10.7257 9.30475C10.718 9.23475 10.7343 9.16422 10.7717 9.1046C11.4635 8.00291 11.7252 6.68498 11.5068 5.40257C11.2883 4.12016 10.6051 2.96317 9.58764 2.15261C8.57016 1.34206 7.28972 0.934755 5.99093 1.00852C4.69215 1.08228 3.46606 1.63194 2.54689 2.55249C1.62771 3.47303 1.07989 4.69995 1.00807 5.99884C0.936256 7.29773 1.34547 8.57756 2.15755 9.59383C2.96963 10.6101 4.12765 11.2916 5.41038 11.5081C6.69312 11.7246 8.01066 11.4609 9.1113 10.7675C9.17099 10.73 9.24165 10.7138 9.31171 10.7217C9.38177 10.7297 9.44705 10.7611 9.49687 10.811L13.415 14.7262C13.5014 14.813 13.6042 14.8818 13.7173 14.9288C13.8304 14.9758 13.9517 15 14.0742 15C14.1967 15 14.318 14.9758 14.4311 14.9288C14.5442 14.8818 14.6469 14.813 14.7334 14.7262L14.7321 14.7237ZM2.87884 6.29371C2.87884 5.61723 3.07944 4.95595 3.45527 4.39348C3.8311 3.83101 4.36529 3.39262 4.99027 3.13374C5.61525 2.87486 6.30297 2.80713 6.96644 2.9391C7.62992 3.07108 8.23937 3.39683 8.71771 3.87517C9.19605 4.35352 9.5218 4.96296 9.65378 5.62644C9.78575 6.28992 9.71802 6.97763 9.45914 7.60261C9.20027 8.2276 8.76187 8.76178 8.1994 9.13761C7.63693 9.51344 6.97565 9.71404 6.29917 9.71404C5.39225 9.71338 4.52266 9.35281 3.88136 8.71152C3.24007 8.07023 2.8795 7.20064 2.87884 6.29371Z"/>
                                    </svg>
                                </div>
                                <input type="text"
                                       placeholder="Search"
                                       id="keyword"
                                       name="keyword"
                                       title="Search keyword"
                                       data-enabled="true"
                                       data-searchResultsPage="/gp/wa-york-york-general-practice/search-results/"
                                       data-rootid="19821"
                                       class="search-input"/>

                                <div class="search-clear">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.36399 8.02657C9.34403 8.00666 9.3282 7.98302 9.3174 7.95698C9.30659 7.93095 9.30103 7.90304 9.30103 7.87485C9.30103 7.84667 9.30659 7.81876 9.3174 7.79273C9.3282 7.76669 9.34403 7.74305 9.36399 7.72314L12.6135 4.47368C12.6953 4.39461 12.7606 4.30003 12.8055 4.19545C12.8505 4.09088 12.8741 3.9784 12.8751 3.86459C12.8761 3.75078 12.8544 3.63791 12.8113 3.53257C12.7682 3.42723 12.7046 3.33153 12.6241 3.25105C12.5436 3.17057 12.4479 3.10693 12.3426 3.06383C12.2372 3.02073 12.1243 2.99904 12.0105 3.00003C11.8967 3.00102 11.7843 3.02467 11.6797 3.06959C11.5751 3.11451 11.4805 3.17981 11.4015 3.26168L8.15199 6.51114C8.13208 6.5311 8.10844 6.54693 8.0824 6.55773C8.05637 6.56853 8.02846 6.57409 8.00027 6.57409C7.97209 6.57409 7.94418 6.56853 7.91814 6.55773C7.89211 6.54693 7.86846 6.5311 7.84856 6.51114L4.59909 3.26168C4.43744 3.10554 4.22092 3.01914 3.99618 3.0211C3.77144 3.02305 3.55646 3.1132 3.39754 3.27212C3.23861 3.43104 3.14847 3.64602 3.14652 3.87076C3.14456 4.0955 3.23096 4.31202 3.38709 4.47368L6.63656 7.72314C6.65651 7.74305 6.67235 7.76669 6.68315 7.79273C6.69395 7.81876 6.69951 7.84667 6.69951 7.87485C6.69951 7.90304 6.69395 7.93095 6.68315 7.95698C6.67235 7.98302 6.65651 8.00666 6.63656 8.02657L3.38709 11.276C3.23096 11.4377 3.14456 11.6542 3.14652 11.8789C3.14847 12.1037 3.23861 12.3187 3.39754 12.4776C3.55646 12.6365 3.77144 12.7267 3.99618 12.7286C4.22092 12.7306 4.43744 12.6442 4.59909 12.488L7.84856 9.23857C7.86846 9.21861 7.89211 9.20278 7.91814 9.19198C7.94418 9.18118 7.97209 9.17561 8.00027 9.17561C8.02846 9.17561 8.05637 9.18118 8.0824 9.19198C8.10844 9.20278 8.13208 9.21861 8.15199 9.23857L11.4015 12.488C11.5631 12.6442 11.7796 12.7306 12.0044 12.7286C12.2291 12.7267 12.4441 12.6365 12.603 12.4776C12.7619 12.3187 12.8521 12.1037 12.854 11.8789C12.856 11.6542 12.7696 11.4377 12.6135 11.276L9.36399 8.02657Z"/>
                                    </svg>
                                </div>
                            </div>
                            <button class="header-search-overlay-close"
                                    role="button"
                                    aria-label="Close search"
                                    aria-pressed="false"
                                    aria-controls="header-search-overlay">
                                Close
                            </button>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8DlSDOn8PS1ClelvJIaTaxcH1UHkH0EQ3eQheDmltdrpsn6LuX363EBtFcMqPPJFAOOkgHng4QGyz-KXlppdu1Hf2bQzdiPNHJparvhXQwQ9IdnAjnnh0RLZD8CLoujQ-zOKeaGpM4-CsNIzHe6imiw" /><input name="ufprt" type="hidden" value="CfDJ8DlSDOn8PS1ClelvJIaTaxfM0ulSR0OImYGcbeA_KDyMWHgYQfZhNJN5V-wXdm8xxqL7sDkeXFragu3OmcGvrJMEXm0UkwWeqZBTMI3G3TF5qiblrH19oEY4klvwY43I7g1a6qfltzJ74r_Ps_Mqkk8NTgL3Wy-EqmVEKRefhBsl" /></form>    </div>
                    <div class="container header-results-container">
                        <div class="header-search-overlay-response-placeholder" data-status="loaded">
                            <div class="row">
                                <div class="col-12 header-search-overlay-response-left">
                                    <div class="header-search-overlay-loader">
                                        <div id="circularG">
                                            <div id="circularG_1" class="circularG"></div>
                                            <div id="circularG_2" class="circularG"></div>
                                            <div id="circularG_3" class="circularG"></div>
                                            <div id="circularG_4" class="circularG"></div>
                                            <div id="circularG_5" class="circularG"></div>
                                            <div id="circularG_6" class="circularG"></div>
                                            <div id="circularG_7" class="circularG"></div>
                                            <div id="circularG_8" class="circularG"></div>
                                        </div>
                                    </div>
                                    <div class="header-search-overlay-results-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="js-hide-on-search">




                    <div class="top-bar d-none d-md-block">
                        <div class="container">
                            <div class="top-bar-row">
                                <div class="top-bar-text">


                                </div>

                                <div class="top-bar-controls contols d-none d-md-flex align-items-center">
                                    <a href="#" onclick="header.decrease()" role="button" aria-label="Decrease Font Size" tabindex="0"><i class="icon icon_font-reduce"></i><span>Smaller</span></a>
                                    <a href="#" onclick="header.increase()" role="button" aria-label="Increase Font Size" tabindex="0"><i class="icon icon_font-increase"></i><span>Larger</span></a>


                                    <a href="#" onclick="print()" role="button" aria-label="Print" tabindex="0"><i class="icon icon_print"></i><span>Print</span></a>


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="main-nav">

                        <div class="container">

                            <div class="logo pull-left">
                                <a href="/gp/wa-york-york-general-practice/">
                                    <img alt="York General Practice | IPN" height="60" src="/media/9449/ipn_york-general-practice.svg" class="header-logo d-sm-none" id="small-screen-logo"/>
                                    <img alt="York General Practice | IPN" height="60" src="/media/9449/ipn_york-general-practice.svg" class="header-logo d-none d-sm-inline-block d-md-none" id="mobi-logo"/>
                                    <img alt="York General Practice | IPN" height="100" src="/media/9449/ipn_york-general-practice.svg" class="header-logo d-none d-md-inline-block" id="dtop-logo"/>
                                </a>
                            </div>

                            <div class="buttons pull-right">
                                <a role="button" aria-label="Search" aria-pressed="false" aria-controls="header-search-overlay" class="header-icon header-icon-search js-header-search-trigger">
                                    <i class="icon icon_search d-none d-md-inline-block"></i>
                                    <svg class="d-inline-block d-md-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.7321 14.7237C14.8188 14.6372 14.8875 14.5344 14.9344 14.4213C14.9813 14.3082 15.0055 14.1869 15.0055 14.0645C15.0055 13.942 14.9813 13.8208 14.9344 13.7077C14.8875 13.5946 14.8188 13.4918 14.7321 13.4053L10.814 9.49016C10.7645 9.44008 10.7334 9.37474 10.7257 9.30475C10.718 9.23475 10.7343 9.16422 10.7717 9.1046C11.4635 8.00291 11.7252 6.68498 11.5068 5.40257C11.2883 4.12016 10.6051 2.96317 9.58764 2.15261C8.57016 1.34206 7.28972 0.934755 5.99093 1.00852C4.69215 1.08228 3.46606 1.63194 2.54689 2.55249C1.62771 3.47303 1.07989 4.69995 1.00807 5.99884C0.936256 7.29773 1.34547 8.57756 2.15755 9.59383C2.96963 10.6101 4.12765 11.2916 5.41038 11.5081C6.69312 11.7246 8.01066 11.4609 9.1113 10.7675C9.17099 10.73 9.24165 10.7138 9.31171 10.7217C9.38177 10.7297 9.44705 10.7611 9.49687 10.811L13.415 14.7262C13.5014 14.813 13.6042 14.8818 13.7173 14.9288C13.8304 14.9758 13.9517 15 14.0742 15C14.1967 15 14.318 14.9758 14.4311 14.9288C14.5442 14.8818 14.6469 14.813 14.7334 14.7262L14.7321 14.7237ZM2.87884 6.29371C2.87884 5.61723 3.07944 4.95595 3.45527 4.39348C3.8311 3.83101 4.36529 3.39262 4.99027 3.13374C5.61525 2.87486 6.30297 2.80713 6.96644 2.9391C7.62992 3.07108 8.23937 3.39683 8.71771 3.87517C9.19605 4.35352 9.5218 4.96296 9.65378 5.62644C9.78575 6.28992 9.71802 6.97763 9.45914 7.60261C9.20027 8.2276 8.76187 8.76178 8.1994 9.13761C7.63693 9.51344 6.97565 9.71404 6.29917 9.71404C5.39225 9.71338 4.52266 9.35281 3.88136 8.71152C3.24007 8.07023 2.8795 7.20064 2.87884 6.29371Z"/>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="mobile-menu-open" title="menu"><i aria-label="menu" class="icon icon_menu"></i><br />MENU</a>
                            </div>

                            <div class="clear"></div>



                            <nav aria-label="Main Navigation" class="d-none d-md-block">
                                <div class="pull-right desktop-menu-more" style=""><a href="#" aria-label=""><i class="icon icon_menu-dots"></i></a></div>

                                <ul>
                                    <li class="dropdown megamenu">
                                        <a href="/gp/wa-york-york-general-practice/fees-appointments/" target="_self" class="active">Fees &amp; Appointments</a>
                                    </li>
                                    <li class="dropdown megamenu">
                                        <a href="/gp/wa-york-york-general-practice/our-doctors/" target="_self" class="active">Our Doctors</a>
                                    </li>
                                    <li class="dropdown megamenu">
                                        <a href="/gp/wa-york-york-general-practice/our-services/" target="_self" class="active">Our Services</a>
                                    </li>
                                    <li class="dropdown megamenu">
                                        <a href="/gp/wa-york-york-general-practice/our-practice/" target="_self" class="active">Our Practice</a>
                                    </li>
                                    <li class="dropdown megamenu">
                                        <a href="/gp/wa-york-york-general-practice/contact-us/" target="_self" class="active">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="clear"></div>

                            <div class="mobile-menu">
                                <div class="overlay">

                                </div>
                                <div class="menu">
                                    <div class="mobile-menu-header">
                                        <ul class="mobile-menu-quickitems">
                                            <li class="w-decrease-item">
                                                <a class="w-decrease"
                                                   role="button"
                                                   aria-label="Decrease Font Size"
                                                   tabindex="0"
                                                   onclick="header.decrease();"
                                                   href="javascript:;">
                                                    <span class="sh-icon sh-icon-smallertext"></span>
                                                </a>
                                            </li>
                                            <li class="w-increase-item">
                                                <a class="w-increase"
                                                   role="button"
                                                   aria-label="Increase Font Size"
                                                   tabindex="0"
                                                   onclick="header.increase();"
                                                   href="javascript:;">
                                                    <span class="sh-icon sh-icon-largertext"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <a class="close-menu" href="javascript:;"></a>
                                    </div>
                                    <div class="clear"></div>
                                    <ul data-level="0">
                                        <li class="">
                                            <a href="/gp/wa-york-york-general-practice/fees-appointments/" title="Fees &amp; Appointments" target="_self">
                                                <div>Fees &amp; Appointments</div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/gp/wa-york-york-general-practice/our-doctors/" title="Our Doctors" target="_self">
                                                <div>Our Doctors</div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/gp/wa-york-york-general-practice/our-services/" title="Our Services" target="_self">
                                                <div>Our Services</div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/gp/wa-york-york-general-practice/our-practice/" title="Our Practice" target="_self">
                                                <div>Our Practice</div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/gp/wa-york-york-general-practice/contact-us/" title="Contact Us" target="_self">
                                                <div>Contact Us</div>
                                            </a>
                                        </li>
                                        <li class="mobileLogoutButton">
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="header-information-bar">
                        <div class="container">
                            <div class="text-left">
                                <p><a id="evBtn" style="background: none; border: none; font-family: aileron; font-weight: 600;" href="#"><img style="vertical-align: middle;" class="cke_widget_element" src="/media/5570/icon_book-online.png" alt="Book Online" width="17" height="17" data-id="13732" data-cke-saved-src="https://pre-ipn.apps.sonichealthcare.com/media/5570/icon_book-online.png" data-cke-widget-data="%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fpre-ipn.apps.sonichealthcare.com%2Fmedia%2F5570%2Ficon_book-online.png%22%2C%22alt%22%3A%22Book%20Online%22%2C%22width%22%3A%2220%22%2C%22height%22%3A%2220%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22none%22%2C%22classes%22%3Anull%7D" data-cke-widget-upcasted="1" data-cke-widget-keep-attr="0" data-widget="image">   Book Online</a>    <a href="tel:(08)96410000"><span class="cke_widget_wrapper cke_widget_inline cke_image_nocaption cke_widget_selected" data-cke-widget-wrapper="1" data-cke-filter="off" data-cke-display-name="image" data-cke-widget-id="2" aria-label="Phone image widget"><img style="vertical-align: middle;" class="cke_widget_element" src="/media/5579/ph.png" alt="Phone" width="17" height="17" data-id="13741" data-cke-saved-src="https://pre-ipn.apps.sonichealthcare.com/media/5579/ph.png" data-cke-widget-data="%7B%22hasCaption%22%3Afalse%2C%22src%22%3A%22https%3A%2F%2Fpre-ipn.apps.sonichealthcare.com%2Fmedia%2F5579%2Fph.png%22%2C%22alt%22%3A%22Phone%22%2C%22width%22%3A%2220%22%2C%22height%22%3A%2220%22%2C%22lock%22%3Atrue%2C%22align%22%3A%22none%22%2C%22classes%22%3Anull%7D" data-cke-widget-upcasted="1" data-cke-widget-keep-attr="0" data-widget="image"><span class="cke_image_resizer">  (08) 9641 0000</span></span></a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </header>
            <a name="main" class="main-content-link"></a>
        </div>
        <main>


            <section class="w-gallery cycle-wrapper has-gradient ">

                <div
                    class="w-gallery cycle-slideshow"
                    data-cycle-swipe="true"
                    data-cycle-timeout="5000"
                    data-cycle-fx="fade"
                    data-cycle-prev=".cycle-prev"
                    data-cycle-next=".cycle-next"
                    data-cycle-pager=".cycle-pager"
                    data-cycle-pager-template="<a class='cycle-pager-item' href='#cycle-slide-1' aria-controls='cycle-slide-1' aria-label='Go to slide 1'></a>"
                    data-cycle-slides="> .cycle-slide">

                    <div tabindex="0"
                         class="cycle-slide w-no-heading w-no-sub-heading w-no-link  w-invert-controls"
                         data-cycle-timeout="5000"
                         data-cycle-fx="fade">

                        <!-- Image -->
                        <div class="cycle-slide-img" >
                            <picture>
                                <source srcset="/media/9446/dsc07950-copy.jpg?format=webp&amp;quality=80&amp;rnd=132929452254330000" type="image/webp" media="(min-width: 1200px)" />
                                <source srcset="/media/9446/dsc07950-copy.jpg?width=1920&amp;height=985&amp;rnd=132929452254330000" media="(min-width: 1200px)" />
                                <source srcset="/media/9446/dsc07950-copy.jpg?format=webp&amp;quality=80&amp;rnd=132929452254330000" type="image/webp" media="(min-width: 992px)"/>
                                <source srcset="/media/9446/dsc07950-copy.jpg?width=1200&amp;height=975&amp;rnd=132929452254330000" media="(min-width: 992px)"/>
                                <source srcset="/media/9446/dsc07950-copy.jpg?format=webp&amp;quality=80&amp;rnd=132929452254330000"  type="image/webp" media="(min-width: 574px)"/>
                                <source srcset="/media/9446/dsc07950-copy.jpg?width=1024&amp;height=975&amp;rnd=132929452254330000" media="(min-width: 574px)"/>
                                <source srcset="/media/9446/dsc07950-copy.jpg?format=webp&amp;quality=80&amp;rnd=132929452254330000" type="image/webp" />
                                <img src="/media/9446/dsc07950-copy.jpg?width=768&amp;height=520&amp;rnd=132929452254330000" alt="Book Now" />
                            </picture>

                            <div class="cycle-controls cycle-controls-mobile  w-single-slide d-lg-none">
                                <div class="cycle-controls-container">
                                    <a role="button" aria-label="Play / pause slide" href="javascript:;" class="cycle-play"></a>
                                    <div class="cycle-pager"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Caption -->
                        <div class="cycle-custom-caption-wrapper">
                            <div class="container">
                                <div class="d-md-flex justify-content-md-end">
                                    <div class="cycle-custom-caption">
                                        <div class="cycle-custom-caption-scroll">
                                            <div class="cycle-custom-caption-summary">


                                                <div class="rich-text-editor">
                                                    <p><img src="/media/9435/easyvisit_colour_rgb_high.jpg?width=282&amp;height=67&amp;mode=max" alt="EasyVisit" width="282" height="67"></p>
                                                    <p><span class="w-semibold" style="font-size: 24px; color: #5705d8;">Take the hassle out of Healthcare</span></p>
                                                    <div class="table-responsive">
                                                        <table border="0" class="table" style="width: 100%; font-size: 14px; height: 151px;">
                                                            <tbody>
                                                            <tr style="height: 24px;">
                                                                <td style="border-top: 1px solid #ffffff; padding: 6px 8px 6px 0px; width: 8.31099%; height: 24px;"><img style="min-width: 18px;" src="/media/9441/ev_phone.svg" alt="" width="auto" height="18px"></td>
                                                                <td colspan="2" style="border-top: 1px solid #ffffff; padding: 8px 8px 8px 0px; width: 90.7954%; height: 24px;"><a href="tel:(08) 96410000"><span class="w-regular">(08) 9641 0000</span></a></td>
                                                            </tr>
                                                            <tr style="height: 24px;">
                                                                <td style="border-top: 1px solid #ffffff; padding: 6px 8px 6px 0px; width: 8.31099%; height: 24px;"><span class="w-regular"><img style="min-width: 18px;" src="/media/9439/ev_address.svg" alt="" width="auto" height="18px"></span></td>
                                                                <td colspan="2" style="border-top: 1px solid #ffffff; padding: 6px 8px 6px 0px; width: 90.7954%; height: 24px;"><a rel="noopener" href="https://goo.gl/maps/9K5WnocBArxYjUjcA" target="_blank"><span class="w-regular">6 Howick Street, York WA 6302</span></a></td>
                                                            </tr>
                                                            <tr style="height: 23px;">
                                                                <td style="border-top: 1px solid #ffffff; padding: 4px 8px 4px 0px; width: 8.31099%; height: 23px;"><img style="min-width: 18px;" src="/media/9440/ev_opening-hrs.svg" alt="" width="auto" height="18px"></td>
                                                                <td style="border-top: 1px solid #ffffff; padding: 4px 8px 4px 0px; width: 33.6908%; height: 23px;"><span class="w-regular">Monday to Friday</span></td>
                                                                <td style="border-top: 1px solid #ffffff; padding: 4px 8px 4px 0px; width: 57.1046%; height: 23px;">8:30am - 5:00pm</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <p class="purple-button"><span class="btn btn-custom-3" style="background-color: #5705db; color: #ffffff; margin: 0;"><a id="evBtn2" rel="noopener"></a>Make a booking</span></p>
                                                </div>                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="cycle-controls  w-single-slide d-none d-lg-block">
                            <div class="cycle-controls-container">
                                <a role="button" aria-label="Play / pause slide" href="javascript:;" class="cycle-play"></a>
                                <div class="cycle-pager"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="main-content">
                <div class="Content-Wrapper">
                    <div class="container sonic-container py-2 py-md-4">



                        <!-- with SideMenu -->

                        <div>

                            <div class="umb-grid">
                                <div class="row  Content1Column">
                                    <div class="col-12">



                                        <section class="w-match-height rich-text-editor-module">
                                            <div class="rich-text-editor">
                                                <p><span style="color: #084eb2;"><strong>[UPDATED 17 January 2024] – The centre will remain closed today, and will resume operations tomorrow, 18 January 2024. We thank you for your kind understanding. </strong></span></p>
                                            </div>
                                        </section>


                                        <section class="w-match-height rich-text-editor-module">
                                            <div class="rich-text-editor">
                                                <h2>York General Practice</h2>
                                                <p>In 2009, The Old York Primary School, one of the oldest buildings in York, was converted to become York General Practice. Our GPs live locally and understand the health care needs of our small country town.</p>
                                                <p><strong>If you have any symptoms of COVID-19, are a close contact of a COVID-19 positive case or are currently awaiting test results for COVID-19 please contact us by phone prior to making a booking or visiting our medical centre.</strong></p>
                                                <p><strong>Mask wearing is recommended in our Medical Centre. If you are experiencing any acute respiratory symptoms please ensure you are wearing a mask. If you are asked to wear a mask during your consultation or when in our waiting room we appreciate your understanding.</strong></p>
                                            </div>
                                        </section>                </div>
                                </div>
                                <div class="row feature-sections content3Column Content3Column">
                                    <div class="col-lg-4">


                                        <section class="feature-tile w-match-height">
                                            <div class="feature-tile-media">
                                                <picture>
                                                    <source srcset="/media/9438/ev_screens.jpg?format=webp&amp;quality=80&amp;rnd=132485273399130000" type="image/webp"/>
                                                    <img class="feature-tile-img" src="/media/9438/ev_screens.jpg" alt="Ev Screens"/>
                                                </picture>
                                            </div>
                                            <div class="feature-tile-content">
                                                <div class="feature-tile-body">
                                                    <div class="feature-tile-description">

                                                        <div class="rich-text-editor">
                                                            <p><img alt="Easyvisit Colour RGB High" class="editorImage" data-id="30133" height="59" src="/media/9435/easyvisit_colour_rgb_high.jpg" width="250"></p><p><span style="font-family:aileronsemibold;"><span style="font-size:18px; color: #5705d8"><b>Take the hassle out of Healthcare</b></span></span></p><p>See your GP, easily! EasyVisit helps patients connect with their Doctors across Australia and takes the hassle out of healthcare.</p><p>EasyVisit&nbsp;is the booking platform for:</p><ul>	<li>Practices within IPN Medical Centres</li>	<li>Australian Skin Cancer Clinics</li>	<li>Medical centres within Sonic HealthPlus</li></ul><p><a href="https://play.google.com/store/apps/details?id=com.sonichealthcare.easyvisit"><img alt="Google Play" class="editorImage" data-id="28583" height="30" src="/media/Multisite9329/google-play.svg" width="101"></a>&nbsp;&nbsp;<a href="https://apps.apple.com/au/app/gp4me/id916155535"><img alt="App Store" class="editorImage" data-id="28584" height="30" src="/media/Multisite9330/app-store.svg" width="89"></a></p><p>&nbsp;</p><p class="purple-button"><span class="btn btn-custom-3" style="background-color: #5705db; color: #ffffff; margin: 0;"><a id="evBtn2" onclick="openModal2();" rel="noopener"></a>Make a booking</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                    <div class="col-lg-4">


                                        <section class="feature-tile w-match-height">
                                            <div class="feature-tile-media">
                                                <picture>
                                                    <source srcset="/media/9436/istock-1177027395.jpg?format=webp&amp;quality=80&amp;rnd=132485272081070000" type="image/webp"/>
                                                    <img class="feature-tile-img" src="/media/9436/istock-1177027395.jpg" alt="Istock 1177027395"/>
                                                </picture>
                                            </div>
                                            <div class="feature-tile-content">
                                                <div class="feature-tile-body mb-4">
                                                    <div class="feature-tile-description">

                                                        <div class="rich-text-editor">
                                                            <h2>Our Doctors</h2><p>Our independent doctors are experienced in every aspect of family health and can help you at any stage of life. Some GPs also have extra qualifications and areas of special interest.</p><p>&nbsp;</p><ul></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feature-tile-footer">
                                                    <div class="sonic-link">
                                                        <a class="sonic-link-text" href="/gp/wa-york-york-general-practice/our-doctors/" target="_self">
                                                            Read Doctor bios
                                                        </a>
                                                        <i class="sonic-link-icon sonic-link-icon-right sonic sonic_thick-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                    <div class="col-lg-4">


                                        <section class="feature-tile w-match-height">
                                            <div class="feature-tile-media">
                                                <picture>
                                                    <source srcset="/media/cishxoni/adobestock_602848546.jpeg?format=webp&amp;quality=80&amp;rnd=133473874132270000" type="image/webp"/>
                                                    <img class="feature-tile-img" src="/media/cishxoni/adobestock_602848546.jpeg" alt="Adobestock 602848546"/>
                                                </picture>
                                            </div>
                                            <div class="feature-tile-content">
                                                <div class="feature-tile-body">
                                                    <div class="feature-tile-description">

                                                        <div class="rich-text-editor">
                                                            <h2><span style="color: #c8102e;">Prioritise your Heart Health in 2024!</span></h2>
                                                            <p>What are your resolutions for the New Year? An important resolution for 2024 should be to prioritise your heart health! ❤️</p>
                                                            <p>Start the New Year by eating well, exercising regularly, quitting smoking, and seeing your GP regularly. </p>
                                                            <p><a href="https://web.easyvisit.com.au/?locationID=176" target="_blank" class="btn-custom dark-btn btn-custom-1" data-anchor="?locationID=176" rel="noopener">Book an appointment today!</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>        <div>


                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="footer-wrapper">



        <footer class="w-footer">

            <div class="w-footer-main">
                <div class="container sonic-container">


                    <div class="w-footer-text">
                        <div class="footer-row">
                            <div class="footer-col">
                                <h2>
                                    Contact Us                </h2>
                                <ul>
                                    <li class="rich-text-editor footer-rich-text-editor" x-ms-format-detection="none"><p>Phone: <a href="tel:(08) 9641 0000">(08) 9641 0000</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h2>
                                    Policies                </h2>
                                <ul>
                                    <li class="rich-text-editor footer-rich-text-editor">
                                        <a href="https://www.ipn.com.au/media/10357/privacy-policy_may-2022.pdf" target="_self">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h2>
                                    York General Practice is part of IPN Medical Centres                </h2>
                                <ul>
                                    <li class="rich-text-editor footer-rich-text-editor">
                                        <a href="https://www.ipn.com.au" target="_blank">Visit the IPN website</a>
                                    </li>
                                    <li>
                                        <span><a href='https://www.facebook.com/York-General-Practice-1639398072950166/' target='_blank'><img src="/media/5558/fb.png" style="width:25px;height:25px;"></a></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <h2>
                                    Download the App!                </h2>
                                <ul>
                                    <li class="rich-text-editor footer-rich-text-editor" x-ms-format-detection="none"><p><a href="http://www.easyvisit.com.au"><img alt="Easyvisit Rev" class="editorImage" data-id="30145" height="40" src="/media/9444/easyvisit_rev.svg" width="169" /></a></p>

                                        <p><a href="https://apps.apple.com/au/app/gp4me/id916155535"><img alt="App Store" class="editorImage" data-id="28584" height="30" src="/media/Multisite9330/app-store.svg" style="margin-right: 5px;" width="89" /></a><a href="https://play.google.com/store/apps/details?id=com.sonichealthcare.easyvisit"><img alt="Google Play" class="editorImage" data-id="28583" height="30" src="/media/Multisite9329/google-play.svg" width="101" /></a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-footer-bottom w-has-additional">
                <div class="container sonic-container">
                    <div class="row">
                        <div class="col-12">
                        <span class="w-copyright">
                            &copy; IPN Medical Centres Pty Ltd 2024
                        </span>
                            <span class="w-additional">6 Howick Street, York WA 6302</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>




    <div class="floating-controls">
        <a id="back-to-top" href="#" class="back-to-top-btn" role="button"
           aria-label="Click to return on the top page">
            <i class="icon sh-icon-thick-arrow-up"></i>
        </a>
    </div>
@endsection
