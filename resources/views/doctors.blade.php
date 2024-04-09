@extends('layouts.layout')

@section('content')
    <!-- Start Hero -->
    <section class="cs_hero cs_style_3 cs_type_1">
        <div class="cs_hero_bg cs_bg_filed " data-src="assets/img/home_3/hero_bg.svg">
            <img src="/assets/img/home_2/hero_bg.jpg" alt="">
        </div>
        <div class="container">
            <div class="cs_hero_text">
                <h1 class="cs_hero_title cs_fs_94 cs_white_color">Our Esteemed Doctors</h1>
                <p class="cs_hero_subtitle cs_white_color cs_fs_20 m-0">
                    At YorkGP, we prioritize our patient's health and well-being, and we strive to provide compassionate care with exceptional results.
                </p>
                <div class="cs_height_25 cs_height_xl_25 cs_height_lg_25"></div>
                <a href="{{ route('bookings') }}" class="cs_btn cs_style_1">
                    <span>Book Now</span>
                    <i>
                        <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                        <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                    </i>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Start All Doctors -->
    <div class="cs_height_65"></div>
    <div class="container">
        <div class="cs_doctors_heading">
            <div class="cs_isotop_filter cs_style1">
                <p class="mb-0">Sort by</p>
                <ul class="cs_mp0">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                </ul>
            </div>
            <div class="cs_view_box">
                <span>Showing 12 items</span>
                <div class="cs_view_box_in">
                    <button type="button" class="cs_grid_view active">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 11.8571H11.8571V0H0V11.8571ZM1.5625 1.5625H10.2948V10.2948H1.5625V1.5625ZM13.1429 0V11.8571H25V0H13.1429ZM23.4375 10.2948H14.7052V1.5625H23.4375V10.2948ZM0 25H11.8571V13.1429H0V25ZM1.5625 14.7052H10.2948V23.4375H1.5625V14.7052ZM13.1429 25H25V13.1429H13.1429V25ZM14.7052 14.7052H23.4375V23.4375H14.7052V14.7052Z" fill="currentColor"/>
                        </svg>
                    </button>
                    <button type="button" class="cs_list_view">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 11.8571H12.2396V0H0V11.8571ZM1.6129 1.5625H10.6267V10.2946H1.6129V1.5625ZM0 25H12.2396V13.1429H0V25ZM1.6129 14.7052H10.6267V23.4375H1.6129V14.7052ZM25 0.85022V2.41272H14.3731V0.85022H25ZM14.3731 9.44458H25V11.0071H14.3731V9.44458ZM14.3731 5.1475H25V6.71H14.3731V5.1475ZM14.3731 13.9929H25V15.5554H14.3731V13.9929ZM14.3731 22.5873H25V24.1498H14.3731V22.5873ZM14.3731 18.2902H25V19.8527H14.3731V18.2902Z" fill="currentColor"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="cs_height_65"></div>
        <div class="cs_isotop cs_style1 cs_grid_view_wrap cs_isotop_col_3 cs_has_gutter_24">
            <div class="cs_grid_sizer"></div>

            @if(count($doctors) > 0)
                @foreach($doctors as $doctor)
                    <div class="cs_isotop_item emergency">
                        <div class="cs_team cs_style_1 cs_type_2 text-center cs_radius_20 overflow-hidden">
                            <div class="cs_member_img">
                                <a href="{{ route('singleDoctor', $doctor->slug) }}" class="d-block">
                                    <img src="/storage/{{ $doctor->doctor_image }}" alt="{{ $doctor->doctor_name }}">
                                </a>
                                <div class="cs_label cs_white_color cs_accent_bg"></div>
                            </div>
                            <div class="cs_team_meta cs_white_bg">
                                <div>
                                    <h3 class="cs_member_name cs_fs_32">
                                        <a href="{{ route('singleDoctor', $doctor->slug) }}">{{ $doctor->doctor_name }}</a>
                                    </h3>
                                    <p class="cs_member_designation cs_heading_color cs_medium">
                                        {{ $doctor->qualifications }}
                                    </p>
                                    <p class="cs_member_description">
                                        {!! Str::limit($doctor->description,100) !!}
                                    </p>
                                </div>
                                <div>
                                    <div class="cs_social_links">
                                        <a target="_blank" href="{{ $doctor->facebook_handle }}"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a target="_blank" href="{{ $doctor->linkedin_handle }}"><i class="fa-brands fa-linkedin-in"></i></a>
                                        <a target="_blank" href="{{ $doctor->twitter_handle }}"><i class="fa-brands fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


        </div>
    </div>
    <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
    <!-- End All Doctors -->

@endsection
