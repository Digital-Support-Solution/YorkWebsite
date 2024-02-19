@extends('layouts.layout')

@section('content')
    <!-- Start Banner  -->
    <section class="cs_banner cs_style_5 cs_bg_filed" data-src="assets/img/doctors/banner_bg.svg">
        <div class="cs_banner_img">
            <img src="assets/img/doctors/banner_img.png" alt="Banner Image">
        </div>
        <div class="container">
            <div class="cs_banner_text">
                <h2 class="cs_banner_title cs_fs_72">Our  Services</h2>
                <p class="cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">
                    York General Practice has a treatment room and procedure room. Here are some of the main services we provide.
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

    <!-- Start Detartments -->
    <section>
        <div class="container cs_mt_minus_110">
            <div class="row justify-content-end">
                @if(count($services) > 0)
                    @foreach($services as $service)
                        <div class="col-xl-4 col-md-6">
                            <div class="cs_iconbox cs_style_7">
                                <div class="cs_iconbox_icon">
                                    <img src="/assets/img/departments/icon_1.svg" alt="Icon">
                                </div>
                                <h2 class="cs_iconbox_title cs_fs_32">
                                    {{ $service->title }}
                                </h2>
                                <p class="cs_iconbox_subtitle m-0">
                                    {!! Str::limit($service->description, 100) !!} ff
                                </p>
                                <a href="{{ route('serviceSingle',$service->slug) }}" class="cs_iconbox_btn cs_center">
                                    <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                                    <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End Detartments -->
@endsection
