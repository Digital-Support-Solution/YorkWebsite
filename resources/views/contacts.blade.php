@extends('layouts.layout')

@section('content')
    <!-- Start Banner  -->
    <section class="app-bg cs_banner cs_style_5 cs_bg_filed" data-src="assets/img/contact/banner_bg.svg">
        <div class="cs_banner_img">
            <img src="/assets/img/contact/banner_img.png" alt="Banner Image" class="cs_main_banner_img">
        </div>
        <div class="container">
            <h2 class="text-white cs_banner_title cs_fs_72 mt-12">Contact Us</h2>
            <p class="text-white cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">Kindly reach us to get the fastest response and treatment</p>
        </div>
    </section>
    <!-- End Banner  -->

    <!-- Start Contact Section -->
    <section>
        <div class="container cs_mt_minus_110">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cs_contact_form cs_style_1 cs_white_bg cs_radius_30">

                        <livewire:contact-us-form></livewire:contact-us-form>
                    </div>
                </div>
            </div>
            <div class="cs_height_200 cs_height_xl_150 cs_height_lg_100"></div>
            <h2 class="cs_fs_72 mb-0">Find Us Here</h2>
            <div class="cs_height_70 cs_height_lg_50"></div>
            <div class="row g-4 g-xl-3 g-xxl-5">
                <div class="col-xl-4">
                    <div class="cs_iconbox cs_style_11 cs_radius_25">
                        <div class="cs_iconbox_icon">
                            <img src="assets/img/contact/icon_1.svg" alt="Icon">
                        </div>
                        <div class="cs_iconbox_right">
                            <h3 class="cs_iconbox_title cs_fs_24 mb-0">Phone</h3>
                            <p class="cs_iconbox_subtitle mb-0 cs_heading_color">
                                <a href="tel:{{ $settings->phone_1 }}" class="__cf_email__" >{{ $settings->phone_1 }}</a>
                                <br>
                                <a href="tel:{{ $settings->phone_2 }}" class="__cf_email__" >{{ $settings->phone_2 }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="cs_iconbox cs_style_11 cs_radius_25">
                        <div class="cs_iconbox_icon">
                            <img src="/assets/img/contact/icon_2.svg" alt="Icon">
                        </div>
                        <div class="cs_iconbox_right">
                            <h3 class="cs_iconbox_title cs_fs_24 mb-0">Email</h3>
                            <p class="cs_iconbox_subtitle mb-0 cs_heading_color">
                                <a href="mail:{{$settings->email_1 }}" class="__cf_email__" >{{ $settings->email_1 }}</a>
                                <br>
                                <a href="mail:{{$settings->email_2 }}" class="__cf_email__" >{{ $settings->email_2 }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="cs_iconbox cs_style_11 cs_radius_25">
                        <div class="cs_iconbox_icon">
                            <img src="assets/img/contact/icon_3.svg" alt="Icon">
                        </div>
                        <div class="cs_iconbox_right">
                            <h3 class="cs_iconbox_title cs_fs_24 mb-0">Location</h3>
                            <p class="cs_iconbox_subtitle mb-0 cs_heading_color">
                                {{ $settings->address }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_height_35"></div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection
