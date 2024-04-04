@extends('layouts.layout')

@section('content')
    <!-- Start Hero -->
    <section class="cs_hero cs_style_3 cs_type_1">
        <div class="cs_hero_bg cs_bg_filed " data-src="assets/img/home_3/hero_bg.svg">
            <img src="/assets/img/home_2/hero_bg.jpg" alt="">
        </div>
        <div class="container">
            <div class="cs_hero_text">
                <h1 class="cs_hero_title cs_fs_94 cs_white_color">About Us</h1>
                <p class="cs_hero_subtitle cs_white_color cs_fs_20 m-0">
                    At YorkGP, we prioritize our patient's health and well-being, and we strive to provide compassionate care with exceptional results.
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
    <!-- End Hero -->
@endsection
