@extends('layouts.layout')

@section('content')

    <!-- End Page Heading -->
    <!-- Start Doctor Details -->
    <div class="cs_doctor_details">
        <br><br>
        <div class="cs_doctor_details_bg cs_bg_filed" data-src="/assets/img/doctors/doctor_details_bg.svg"></div>
        <div class="cs_height_85"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cs_single_doctor overflow-hidden cs_radius_20">
                        <img src="/storage/{{ $doctor->doctor_image }}" alt="Doctor" class="w-100">
                        <h3 class="cs_white_color cs_accent_bg mb-0 text-center cs_semibold cs_fs_24">
                            {{ $doctor->doctor_name }}
                        </h3>
                    </div>
                    <div class="cs_height_94 cs_height_lg_60"></div>

                    <div class="cs_height_66 cs_height_lg_60"></div>
                    <div class="cs_list cs_style_3">
                        <h2 class="cs_list_title cs_medium cs_fs_24">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.8 2.2H18.7V1.1C18.7 0.44 18.26 0 17.6 0C16.94 0 16.5 0.44 16.5 1.1V2.2H5.5V1.1C5.5 0.44 5.06 0 4.4 0C3.74 0 3.3 0.44 3.3 1.1V2.2H1.1C0.55 2.2 0 2.64 0 3.3V18.7C0 19.36 0.55 19.8 1.1 19.8H7.81C7.04 18.48 6.6 16.94 6.6 15.4C6.6 10.56 10.56 6.6 15.4 6.6C17.49 6.6 19.36 7.37 20.9 8.58V3.3C20.9 2.75 20.35 2.2 19.8 2.2Z" fill="#307BC4"/>
                                <path d="M15.3998 8.80005C11.7698 8.80005 8.7998 11.77 8.7998 15.4C8.7998 19.03 11.7698 22 15.3998 22C19.0298 22 21.9998 19.03 21.9998 15.4C21.9998 11.77 19.0298 8.80005 15.3998 8.80005ZM17.5998 16.5H15.3998C14.7398 16.5 14.2998 16.06 14.2998 15.4V12.1C14.2998 11.44 14.7398 11 15.3998 11C16.0598 11 16.4998 11.44 16.4998 12.1V14.3H17.5998C18.2598 14.3 18.6998 14.74 18.6998 15.4C18.6998 16.06 18.2598 16.5 17.5998 16.5Z" fill="#307BC4"/>
                            </svg>
                            Available days and times
                        </h2>
                        <ul class="cs_mp0 cs_heading_color cs_radius_20 cs_white_bg cs_medium">

                            @if(count($doctor->appointments) > 0)
                                @foreach($doctor->appointments as $appointment)
                                    <li>
                                        <span>{{ $appointment->day }}</span>
                                        <span><i class="fa-regular fa-clock"></i> {{ $appointment->start_time }} - {{ $appointment->end_time }} </span>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 position-relative">
                    <div class="cs_height_55"></div>
                    <h2 class="cs_fs_48 mb-0 cs_semibold">{{ $doctor->doctor_name }}</h2>
                    <div class="cs_height_12"></div>
                    <h3 class="cs_semibold cs_fs_24 mb-0">{{ $doctor->qualifications }}</h3>
                    <div class="cs_height_32"></div>
                    <p class="mb-0 cs_heading_color">{!! $doctor->interests !!}</p>
                    <div class="cs_social_links cs_accent_bg cs_radius_15">
                        <a target="_blank" href="{{ $doctor->facebook_handle }}"><i class="fa-brands fa-facebook-f"></i></a>
                        <a target="_blank" href="{{ $doctor->linkedin_handle }}"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a target="_blank" href="{{ $doctor->twitter_handle }}"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                    <div class="cs_height_200 cs_height_xl_150 cs_height_lg_80"></div>
                    <div class="cs_height_35 cs_height_lg_0"></div>
                    <div class="cs_list cs_style_1">
                        <h2 class="cs_list_title cs_medium cs_fs_24">
                            <svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.4331 4.82659L14.7827 0.048049C14.5998 -0.0160163 14.4003 -0.0160163 14.2174 0.048049L0.566973 4.82659C0.227583 4.94539 0.000453804 5.26347 6.78953e-07 5.62055C-0.000452446 5.97763 0.22594 6.29621 0.565048 6.4158L14.2154 11.2306C14.3075 11.2631 14.4038 11.2794 14.5 11.2794C14.5963 11.2794 14.6925 11.2631 14.7846 11.2306L28.435 6.4158C28.7741 6.29621 29.0004 5.97763 29 5.62055C28.9995 5.26347 28.7724 4.94539 28.4331 4.82659Z" fill="#307BC4"/>
                                <path d="M26.9583 16.0785V8.72559L25.259 9.32493V16.0785C24.7472 16.3708 24.4023 16.9184 24.4023 17.5464C24.4023 18.1744 24.7472 18.7221 25.259 19.0144V23.157C25.259 23.6226 25.6394 24 26.1086 24C26.5779 24 26.9583 23.6226 26.9583 23.157V19.0144C27.4701 18.7222 27.8149 18.1744 27.8149 17.5465C27.8149 16.9185 27.4701 16.3708 26.9583 16.0785Z" fill="#307BC4"/>
                                <path d="M14.5002 12.9653C14.2086 12.9653 13.9214 12.9161 13.6465 12.8192L5.97266 10.1124V13.8219C5.97266 14.7295 6.92688 15.4969 8.80882 16.103C10.4492 16.6312 12.4705 16.9222 14.5002 16.9222C16.53 16.9222 18.5512 16.6312 20.1917 16.103C22.0736 15.4969 23.0278 14.7295 23.0278 13.8219V10.1124L15.354 12.8192C15.0791 12.9161 14.7919 12.9653 14.5002 12.9653Z" fill="#307BC4"/>
                            </svg>
                            Degrees
                        </h2>
                         {!! $doctor->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_190 cs_height_xl_145 cs_height_lg_105"></div>
    <!-- End Doctor Details -->
@endsection
