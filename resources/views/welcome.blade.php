@extends('layouts.layout')

@section('content')



    <section class="cs_hero cs_style_2 cs_bg_filed" data-src="/assets/img/home_2/hero_bg.jpg" style="background-image: url(&quot;assets/img/home_2/hero_bg.jpg&quot;);">
        <div class="container">
            <div class="cs_hero_text">
                <h1 class="cs_hero_title cs_white_color cs_fs_84">Compassionate care, exceptional results.</h1>
                <div class="cs_hero_text_in">
                    <div class="cs_hero_btn cs_white_color">
                        <a href="#" class="cs_text_btn">York General Practice</a>
                    </div>
                    <p class="cs_hero_subtitle cs_white_color">
                        Our team of experienced doctors and healthcare professionals are committed to providing quality care and personalized attention to our patients.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cs_hero_bottom">
                <div class="cs_hero_bottom_left">
                    <div class="cs_hero_btn_wrap">
{{--      add class for video                  cs_video_open--}}
                        <a href="#" class=" cs_white_color cs_text_btn_2 cs_fs_20">
                            <span class="cs_text_btn_icon">
                              <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M42.739 7.26089C32.8938 -2.48797 17.0097 -2.40994 7.26088 7.43526C-2.42029 17.2121 -2.42029 32.9623 7.26088 42.7392C17.1061 52.488 32.9902 52.41 42.739 42.5648C52.4202 32.788 52.4202 17.0377 42.739 7.26089ZM25 48.0713C12.2783 48.0713 1.92868 37.7217 1.92868 25C1.92868 12.2782 12.2782 1.9288 25 1.9288C37.7217 1.9288 48.0712 12.2784 48.0712 25.0001C48.0712 37.7218 37.7216 48.0713 25 48.0713Z" fill="currentColor"></path>
                                <path d="M38.5996 24.1265V24.1277L18.2308 12.368C17.7487 12.0897 17.1322 12.2548 16.8539 12.737C16.7655 12.8901 16.7189 13.0637 16.7189 13.2405V36.7598C16.7191 37.3164 17.1707 37.7676 17.7273 37.7672C17.9041 37.7671 18.0778 37.7206 18.2309 37.6322L38.5997 25.8725C39.0819 25.5943 39.2471 24.9778 38.9689 24.4956C38.8803 24.3423 38.753 24.215 38.5996 24.1265Z" fill="currentColor"></path>
                              </svg>
                            </span>
                            <span class="cs_text_btn_text">See how we work</span>
                        </a>
                    </div>
                </div>
                <div class="cs_hero_bottom_right">
                    <div class="cs_hero_funfact text-center">
                        <div class="cs_hero_funfact_col">
                            <h3 class="cs_white_color cs_fs_72"><span class="odometer odometer-auto-theme" data-count-to="20"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h3>
                            <p class="cs_white_color mb-0">Years of experience</p>
                        </div>
                        <div class="cs_hero_funfact_col">
                            <h3 class="cs_white_color cs_fs_72"><span class="odometer odometer-auto-theme" data-count-to="95"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span></div></span>%</h3>
                            <p class="cs_white_color mb-0">Patient satisfaction rating</p>
                        </div>
                        <div class="cs_hero_funfact_col">
                            <h3 class="cs_white_color cs_fs_72"><span class="odometer odometer-auto-theme" data-count-to="5000"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h3>
                            <p class="cs_white_color mb-0">Patients served annually</p>
                        </div>
                        <div class="cs_hero_funfact_col">
                            <h3 class="cs_white_color cs_fs_72"><span class="odometer odometer-auto-theme" data-count-to="10"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>+</h3>
                            <p class="cs_white_color mb-0">Healthcare providers on staff</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('booking-form')

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
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Diagnostic testing</h2>
                        <p class="cs_iconbox_subtitle m-0">Blood tests, imaging studies, and other tests to diagnose health conditions</p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Rehabilitation services</h2>
                        <p class="cs_iconbox_subtitle m-0">Physical therapy, occupational therapy, and other services to help patients recover from injuries</p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Preventive care</h2>
                        <p class="cs_iconbox_subtitle m-0">Annual checkups, immunizations, and health screenings care preventive</p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Treatment for acute and chronic conditions</h2>
                        <p class="cs_iconbox_subtitle m-0">Medication management, disease management, and other treatments to improve health outcomes</p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="cs_iconbox cs_style_4">
                        <div class="cs_iconbox_icon cs_accent_bg rounded-circle cs_center">
                            <img src="assets/img/icons/calendar_white.svg" alt="Icon">
                        </div>
                        <h2 class="cs_iconbox_title cs_fs_32">Mental health services</h2>
                        <p class="cs_iconbox_subtitle m-0">Counseling, therapy, and other services to help patients manage mental health conditions</p>
                        <a href="#" class="cs_iconbox_btn cs_center">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
