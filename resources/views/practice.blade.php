@extends('layouts.layout')

@section('content')
    <!-- Start Banner  -->
    <section class="app-bg cs_banner cs_style_3 cs_bg_filed" data-src="assets/img/pricing_plan/banner_bg.svg">
        <div class="cs_banner_img">
            <img src="assets/img/pricing_plan/banner_img.png" alt="Banner Image">
        </div>
        <div class="container">
            <div class="cs_banner_text">
                <h2 class="text-white cs_banner_title cs_fs_72">Our Practice at <br> York General Practice</h2>
                <p class="text-white cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">
                    Explore list of our practice start your journey to better Health
                </p>
                <div class="cs_height_25 cs_height_xl_25 cs_height_lg_25"></div>
                <a href="{{ route('contacts') }}" class="cs_btn cs_style_1">
                    <span>Contact Us</span>
                    <i>
                        <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                        <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                    </i>
                </a>
            </div>
        </div>
    </section>
    <!-- End Banner  -->


    <!-- Start FAQ Section -->
    <section class="cs_gray_bg_1">
        <div class="cs_height_185 cs_height_xl_145 cs_height_lg_110"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h2 class="cs_section_title cs_fs_72 m-0">List of Our Practice</h2>
            </div>
            <div class="cs_height_72 cs_height_lg_50"></div>
            <div class="row cs_gap_y_40 d-flex align-content-center">
                <div class="col-xl-8">
                    @if(count($practices) > 0)
                        @foreach($practices as $practice)
                            <div class="cs_accordians cs_style1 cs_type_3 cs_heading_color mb-3">
                                    <div class="cs_accordian @if ($loop->first) active @endif ">
                                        <h2 class="cs_accordian_head cs_heading_color">
                                            {{ $practice->title }}
                                            <span class="cs_accordian_arrow">
                                        <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M22.9996 1.52904C23.0071 1.23098 22.9085 0.938281 22.7175 0.691638C22.5265 0.444996 22.2525 0.256664 21.9337 0.152828C21.615 0.048992 21.2674 0.0348107 20.939 0.112255C20.6107 0.1897 20.3181 0.354922 20.1018 0.584951L11.5264 9.36188L2.95408 0.58495C2.8207 0.425828 2.65137 0.292566 2.45653 0.193511C2.26169 0.094456 2.04557 0.0317421 1.82181 0.00929567C1.59805 -0.0131507 1.37146 0.00515451 1.15614 0.0630648C0.940819 0.120975 0.741392 0.217243 0.570471 0.345839C0.399549 0.474436 0.260902 0.632592 0.162918 0.810402C0.0649357 0.988212 0.00990291 1.18185 0.00121875 1.37918C-0.00746351 1.57651 0.0302848 1.77329 0.112352 1.95719C0.19442 2.14109 0.318905 2.30815 0.478018 2.44791L10.2836 12.4967C10.4372 12.6545 10.6278 12.7812 10.8427 12.8681C11.0575 12.955 11.2914 13 11.528 13C11.7646 13 11.9984 12.955 12.2132 12.8681C12.4281 12.7812 12.6189 12.6545 12.7725 12.4967L22.5875 2.44791C22.8447 2.19407 22.9905 1.86847 22.9996 1.52904Z" fill="#307BC4"/>
                                        </svg>
                                      </span>
                                        </h2>
                                        <div class="cs_accordian_body">
                                            <p>{!! $practice->description !!}</p>
                                        </div>
                                    </div><!-- .cs_accordian -->
                                </div>
                            <!-- .cs_accordians -->
                        @endforeach
                    @endif
                </div>

                <div class="col-xl-4">
                    <div class="cs_about cs_style_1 cs_type_2">
                        <div class="cs_about_img">
                            <img src="/assets/img/home_4/faq_img.jpg" alt="About" class="w-100">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
    </section>
    <!-- End FAQ Section -->
@endsection
