@extends('layouts.layout')

@section('content')
    <!-- Start Banner  -->
    <section class="cs_banner cs_style_5 cs_bg_filed" data-src="/assets/img/doctors/banner_bg.svg">
        <div class="cs_banner_img">
            <img src="/assets/img/doctors/banner_img.png" alt="Banner Image">
        </div>
        <div class="container">
            <div class="cs_banner_text">
                <h2 class="cs_banner_title cs_fs_72">
                    {{ $service->title }}
                </h2>
                <p class="cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">
                    {!! Str::limit($service->description, 200) !!}
                </p>
            </div>
        </div>
    </section>
    <!-- End Banner  -->
    <div class="cs_height_65"></div>
    <div class="container">
        <h3> {{ $service->title }}</h3>
        {!! $service->description  !!}
    </div>

    <div class="cs_height_65"></div>
@endsection
