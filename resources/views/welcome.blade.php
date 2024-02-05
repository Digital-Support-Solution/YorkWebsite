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


    <section >
        <div class="container">
            <form action="#" class="cs_appointment_form cs_style_1">
                <div class="cs_appointment_form_head">
                    <h2 class="cs_fs_40 mb-0">Book Appoinment Now</h2>
                    <div class="cs_appointment_categories">
                        <div class="cs_appointment_category">
                            <input type="radio" name="category" value="Pediatric" checked="">
                            <span>Pediatric</span>
                        </div>
                        <div class="cs_appointment_category">
                            <input type="radio" name="category" value="Obstetrics">
                            <span>Obstetrics and Gynecology</span>
                        </div>
                        <div class="cs_appointment_category">
                            <input type="radio" name="category" value="Cardiology">
                            <span>Cardiology</span>
                        </div>
                        <div class="cs_appointment_category">
                            <input type="radio" name="category" value="Neurology">
                            <span>Neurology</span>
                        </div>
                    </div>
                    <div class="cs_appointment_submit d-none d-lg-block">
                        <button class="cs_btn cs_style_1">
                            <span>Book Now</span>
                            <i>
                                <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                                <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            </i>
                        </button>
                    </div>
                </div>
                <div class="cs_appointment_form_fields">
                    <div class="cs_appointment_form_field">
                        <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                            <img src="assets/img/home_3/appointment_icon_1.svg" alt="Icon">
                        </div>
                        <div class="cs_appointment_form_field_right">
                            <label>Name</label>
                            <input type="text" placeholder="David John">
                        </div>
                    </div>
                    <div class="cs_appointment_form_field">
                        <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                            <img src="assets/img/home_3/appointment_icon_2.svg" alt="Icon">
                        </div>
                        <div class="cs_appointment_form_field_right">
                            <label>Phone Number</label>
                            <input type="text" placeholder="(123) 456 - 789">
                        </div>
                    </div>
                    <div class="cs_appointment_form_field">
                        <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                            <img src="assets/img/home_3/appointment_icon_3.svg" alt="Icon">
                        </div>
                        <div class="cs_appointment_form_field_right">
                            <label>Medical Record Number</label>
                            <input type="text" placeholder="123456-7890-0987">
                        </div>
                    </div>
                    <div class="cs_appointment_form_field">
                        <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                            <img src="assets/img/home_3/appointment_icon_4.svg" alt="Icon">
                        </div>
                        <div class="cs_appointment_form_field_right">
                            <label>Reason for Visit</label>
                            <input type="text" placeholder="Routine Checkup">
                        </div>
                    </div>
                    <div class="cs_appointment_form_field">
                        <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                            <img src="assets/img/home_3/appointment_icon_5.svg" alt="Icon">
                        </div>
                        <div class="cs_appointment_form_field_right">
                            <label>Preferred Date</label>
                            <input type="text" placeholder="August 23, 2023" id="datepicker" class="hasDatepicker">
                        </div>
                    </div>
                    <div class="cs_appointment_form_field">
                        <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                            <img src="assets/img/home_3/appointment_icon_6.svg" alt="Icon">
                        </div>
                        <div class="cs_appointment_form_field_right">
                            <label>Preferred Time</label>
                            <input type="text" class="cs_timepicker" placeholder="10:00AM">
                        </div>
                    </div>
                </div>
                <div class="d-block d-lg-none">
                    <div class="cs_height_30"></div>
                    <button class="cs_btn cs_style_1">
                        <span>Book Now</span>
                        <i>
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                            <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </i>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
