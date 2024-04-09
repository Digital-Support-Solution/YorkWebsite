@extends('layouts.layout')

@section('content')

    <!-- Start Hero -->
    <section class="cs_hero cs_style_2 cs_type_1">
        <div class="container">
            <div class="cs_hero_text">
                <h1 class="cs_hero_title cs_white_color cs_fs_84">Take Best Treatment with Our
                    <span class="cd-headline slide cs_accent_color">
              <span class="cd-words-wrapper">
                <b class="is-visible">GPs</b>
              </span>
            </span>
                </h1>
                <div class="cs_hero_text_in">
                    <div class="cs_hero_btn cs_white_color">
                        <a href="{{ route('about') }}" class="cs_text_btn">York General Practice</a>
                    </div>
                    <p class="cs_hero_subtitle cs_white_color">
                        Our independent doctors are experienced in every aspect of family health and can help you at any stage of life.
                    </p>
                </div>
            </div>
        </div>
        <div class="cs_hero_img">
            <img src="assets/img/home_5/hero_img.png" alt="Hero">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cs_hero_funfact text-center ">
                        <div class="cs_hero_funfact_col">
                            <h3 class="cs_white_color cs_fs_72">
                                <img style="filter: brightness(0) invert(1); height: 30px" src="/assets/img/contact/icon_1.svg" alt="Icon">
                            </h3>
                            <p class="cs_white_color mb-0">
                                <a href="tel:{{ $settings->phone_1 }}" class="__cf_email__" >{{ $settings->phone_1 }}</a>
                            </p>
                        </div>
                        <div class="cs_hero_funfact_col">
                            <h3 class="cs_white_color cs_fs_72">
                                <img style="filter: brightness(0) invert(1); height: 30px" src="/assets/img/icons/pin.svg" alt="Icon">
                            </h3>
                            <p class="cs_white_color mb-0">
                                {{ $settings->address }}
                            </p>
                        </div>
                        <div class="cs_hero_funfact_col">
                            <h3 class="cs_white_color cs_fs_72">
                                <img style="filter: brightness(0) invert(1); height: 30px"  src="assets/img/contact/icon_2.svg" alt="Icon">
                            </h3>
                            <p class="cs_white_color mb-0">
                                <a href="mail:{{$settings->email_1}}" class="__cf_email__" >{{ $settings->email_1 }}</a>
                            </p>
                        </div>
                        <div class="cs_hero_funfact_col" >
                            <a href="{{ route('bookings') }}" class="cs_btn cs_style_1" style="margin-top: 20%">
                                <span>Book Now</span>
                                <i>
                                    <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                                    <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- End Hero -->



    <section>
        <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="cs_section_heading cs_style_1">
                        <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">OUR SERVICES</h3>
                        <div class="cs_height_5"></div>
                        <h2 class="cs_section_title cs_fs_72 m-0">Provides Our Best Services</h2>
                    </div>
                    <div class="cs_height_70 cs_height_lg_50"></div>
                </div>

                @if(count($services) > 0)

                    @foreach($services as $service)
                        <div class="col-md-6 col-xl-4">
                            <div class="cs_iconbox cs_style_4">
                                <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                                    <img src="{{ asset('/assets/img/icons/ambulance.svg') }}" alt="Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_32">
                                    {{ $service->title }}
                                </h2>
                                <p class="cs_iconbox_subtitle m-0">
                                    {!! Str::limit($service->description,'120') !!}
                                </p>
                                <a href="#" class="cs_iconbox_btn cs_center">
                                    <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                    <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                </a>
                            </div>
                        </div>
                    @endforeach


                @endif
            </div>
        </div>
    </section>

    <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>

    <section class="my-5 cs_about cs_style_1 cs_type_1 cs_shape_wrap">
        <div class="cs_shape_1 cs_position_4"></div>
        <div class="container">
            <div class="row align-items-center cs_gap_y_50">
                <div class="col-lg-6">
                    <div class="cs_about_img">
                        <img src="assets/img/home_3/about.png" alt="About">
                        <div class="cs_about_mini_img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs_about_content">
                        <div class="cs_section_heading cs_style_1">
                            <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">ABOUT US</h3>
                            <div class="cs_height_5"></div>
                            <h2 class="cs_section_title cs_fs_72 m-0">York GP is a team of experienced medical professionals</h2>
                            <div class="cs_height_85 cs_height_xl_50"></div>
                            <p class="mb-0">Dedicated to providing top-quality healthcare services. We believe in a <br> holistic approach to healthcare that focuses on treating the whole <br>person, not just the illness or symptoms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="cs_iconbox_carousel_1 cs_gap_20 position-relative">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cs_section_heading cs_style_1">
                            <h2 class="cs_section_title cs_fs_72 m-0">Our Values</h2>
                        </div>
                        <div class="cs_height_200 cs_height_xl_150 cs_height_lg_10"></div>
                        <div class="cs_height_30 cs_height_xl_0"></div>
                        <div class="cs_slider_navigation cs_style_2">
                            <div class="cs_slider_prev cs_center slick-arrow" style=""><img src="/assets/img/icons/left_arrow_blue.svg" alt="Prev"></div>
                            <div class="cs_slider_next cs_center slick-arrow" style=""><img src="/assets/img/icons/right_arrow_blue.svg" alt="Next"></div>
                        </div>
                        <div class="cs_height_0 cs_height_lg_30"></div>
                    </div>

                    <div class="col-lg-8">
                        <div class="cs_slider_activate">

                            @if(count($corevalues) > 0)

                                @foreach($corevalues as $value)
                                    <div class="cs_slide">
                                        <div class="cs_iconbox cs_style_10 cs_radius_20 cs_white_bg text-center">
                                            <div class="cs_iconbox_icon cs_center rounded-circle">
                                                @if($value->icon)
                                                    <img src="/storage/{{ $value->icon  }}" alt="Icon">
                                                @else
                                                    <img src="assets/img/home_3/value_icon_1.svg" alt="Icon">
                                                @endif
                                            </div>
                                            <h2 class="cs_iconbox_title">{{ $value->title }}</h2>
                                            <p class="cs_iconbox_subtitle mb-0">
                                                {!!  Str::limit($value->description,160) !!}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Testimonial Section -->
    <section class="cs_bg_filed" data-src="assets/img/home_3/testimonial_bg.svg">

        <br>
        <div class="container">
            <div class="cs_testimonial_carousel cs_gap_20 position-relative">
                <div class="cs_slider_heading_1">
                    <div class="cs_section_heading cs_style_1">
                        <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">TESTIMONIALS</h3>
                        <div class="cs_height_5"></div>
                        <h2 class="cs_section_title cs_fs_72 m-0">What Our Patients Say <br> About Us</h2>
                    </div>
                    <div class="cs_slider_navigation cs_style_1">
                        <div class="cs_slider_prev cs_center"><img src="/assets/img/icons/left_arrow_blue.svg" alt="Prev"></div>
                        <div class="cs_slider_next cs_center"><img src="/assets/img/icons/right_arrow_blue.svg" alt="Next"></div>
                    </div>
                </div>

                <div class="cs_height_190 cs_height_xl_145 cs_height_lg_105"></div>
                <div class="cs_slider_activate">

                    @if(count($testimonials) > 0)

                        @foreach($testimonials as $testimonial)
                            <div class="cs_slide">
                                <div class="cs_testimonial cs_style_2">
                                    <div class="cs_testimonial_text cs_radius_25 cs_white_bg cs_fs_24">
                                        <div class="cs_quote_icon">
                                            <svg width="50" height="38" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M39.5536 13.8357C39.4529 12.689 39.5299 9.57182 42.365 5.23719C42.5794 4.9101 42.5405 4.46895 42.2742 4.18851C41.1184 2.97105 40.4027 2.20281 39.9008 1.66522C39.2408 0.956385 38.9395 0.633403 38.4984 0.212251C38.204 -0.0665425 37.7584 -0.0713971 37.4609 0.201883C32.5193 4.73095 27.0307 14.0896 27.8249 25.5554C28.2903 32.2879 32.9527 37.1746 38.9105 37.1746C45.0246 37.1746 49.999 31.9359 49.999 25.4959C49.999 19.2832 45.3695 14.1884 39.5536 13.8357ZM38.9105 35.5288C33.7941 35.5288 29.788 31.2842 29.3829 25.4364C28.4895 12.5411 35.7671 4.1644 37.9659 1.94648C38.1803 2.16907 38.4252 2.43099 38.7861 2.81833C39.2209 3.28441 39.8161 3.92247 40.7163 4.87397C37.2747 10.459 37.924 14.4384 38.2085 15.0089C38.3436 15.2798 38.6205 15.4622 38.9105 15.4622C44.1633 15.4622 48.4365 19.9631 48.4365 25.4959C48.4365 31.0279 44.1633 35.5288 38.9105 35.5288Z" fill="#307BC4"/>
                                                <path d="M11.8071 13.8355C11.7056 12.692 11.7803 9.57721 14.6185 5.23699C14.8321 4.90989 14.7939 4.46874 14.5277 4.1883C13.3741 2.97323 12.6592 2.20581 12.158 1.66822C11.4958 0.957825 11.1936 0.633938 10.7527 0.212046C10.4582 -0.0667479 10.0126 -0.0707801 9.7151 0.200854C4.77354 4.72993 -0.715834 14.087 0.0768219 25.5552C0.543775 32.2868 5.20682 37.1744 11.1646 37.1744C17.2789 37.1744 22.2532 31.9357 22.2532 25.4957C22.2532 19.2823 17.6237 14.1867 11.8071 13.8355ZM11.1646 35.5286C6.04917 35.5286 2.04065 31.284 1.63479 25.4354C0.743697 12.5369 8.02135 4.16337 10.2201 1.94627C10.4353 2.16886 10.681 2.43243 11.0426 2.82059C11.4767 3.28667 12.071 3.92391 12.9698 4.87377C9.52815 10.4596 10.1774 14.4381 10.462 15.0079C10.5971 15.2787 10.8747 15.462 11.1646 15.462C16.4175 15.462 20.6907 19.9629 20.6907 25.4957C20.6907 31.0277 16.4175 35.5286 11.1646 35.5286Z" fill="#307BC4"/>
                                            </svg>
                                        </div>
                                        <p>{{ $testimonial->testimonial }} ”</p>
                                        <div class="cs_rating cs_accent_color" data-rating="{{ $testimonial->number_of_stars  }}">
                                            <div class="cs_rating_bg">
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <div class="cs_rating_percentage">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cs_testimonial_meta">
                                        <div class="cs_testimonial_avatar">
                                            <img src="{{ $value->image ? '/storage/' . $value->image : 'img/testimonial.svg' }}"
                                                 alt="Icon"
                                            >
                                        </div>
                                        <div class="cs_testimonial_meta_right">
                                            <h3 class="cs_fs_24 cs_semibold m-0 text-uppercase">
                                                {{ $testimonial->fullname }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

             </div>


        <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
        <div class="cs_banner_8_wrap">
            <div class="container">
                <div class="cs_banner cs_style_8 cs_radius_25 cs_bg_filed" data-src="{{ asset('assets/img/home_3/banner_bg.svg') }}">
                    <div class="cs_banner_img"><img src="{{ asset('assets/img/home_3/banner_img.png') }}" alt=""></div>
                    <div class="cs_banner_in">
                        <h2 class="cs_banner_title cs_fs_72 cs_white_color">Don’t Let Your Health Take a Backseat!</h2>
                        <p class="cs_banner_subtitle cs_heading_color cs_fs_20 mb-0">Schedule an appointment with one of our experienced medical professionals today!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Blog Section -->
    <section>
        <div class="cs_height_160 cs_height_xl_110 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">BLOG POSTS</h3>
                <div class="cs_height_5"></div>
                <h2 class="cs_section_title cs_fs_72 m-0">Latest Update</h2>
            </div>
            <div class="cs_height_70 cs_height_lg_50"></div>
            <div class="row cs_gap_y_24">

                @if(count($blogs) > 0)
                    <div class="col-lg-6">

                        @if($featured)
                            <div class="cs_post_pr_136">
                                <div class="cs_post cs_style_1 cs_type_2">
                                    <a href="{{ route('singleBlog',$featured->slug) }}" class="cs_post_thumb cs_view_mouse">
                                        <img src="/storage/{{ $featured->preview_image }}" alt="{{ $featured->title }}">
                                    </a>
                                    <div class="cs_post_info">
                                        <div>
                                            <h2 class="cs_post_title cs_semibold cs_fs_32">
                                                <a href="{{ route('singleBlog',$featured->slug) }}">
                                                    {{ $featured->title }}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="cs_post_meta">
                                            <div class="cs_posted_by">
                                                {{ date('F d Y',strtotime($featured->created_at)) }}
                                            </div>
                                            <div class="cs_post_social">
                                                <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @else
                            <div class="cs_post_pr_136">
                                <div class="cs_post cs_style_1 cs_type_2">
                                    <a href="{{ route('singleBlog',$blogs[0]->slug) }}" class="cs_post_thumb cs_view_mouse">
                                        <img src="/storage/{{ $blogs[0]->preview_image }}" alt="{{ $blogs[0]->title }}">
                                    </a>
                                    <div class="cs_post_info">
                                        <div>
                                            <h2 class="cs_post_title cs_semibold cs_fs_32">
                                                <a href="{{ route('singleBlog',$blogs[0]->slug) }}">
                                                     {{ $blogs[0]->title }}
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="cs_post_meta">
                                            <div class="cs_posted_by">
                                                {{ date('F d Y',strtotime($blogs[0]->created_at)) }}
                                            </div>
                                            <div class="cs_post_social">
                                                <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
                                                <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif


                    </div>
                    <div class="col-lg-6">
                         @foreach($blogs as $blog)
                            <div class="cs_post cs_style_2 cs_radius_20 overflow-hidden">
                                <a href="{{ route('singleBlog',$blog->slug) }}" class="cs_post_thumb cs_view_mouse">
                                    <img src="/storage/{{ $blog->preview_image }}" alt="{{ $blog->title }}">
                                </a>
                                <div class="cs_post_info">
                                    <div>
                                        <h2 class="cs_post_title cs_semibold cs_fs_24">
                                            <a href="{{ route('singleBlog',$blog->slug) }}">
                                                {{ $blog->title }}
                                            </a>
                                        </h2>
                                        <div class="cs_posted_by">
                                            {{ date('F d Y',strtotime($blog->created_at)) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                         @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
    <br>
@endsection
