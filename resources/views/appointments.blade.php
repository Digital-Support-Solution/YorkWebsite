@extends('layouts.layout')

@section('content')
<section class="app-bg cs_banner cs_style_3 cs_bg_filed" data-src="/assets/img/appointments/banner_bg.svg">
    <div class="cs_banner_img">
      <img src="/assets/img/appointments/banner_img.png" alt="Banner Image">
    </div>
    <div class="container">
      <div class="cs_banner_text">
        <h2 class="text-white cs_banner_title cs_fs_72">Don’t Let Your Health Take a Backseat!</h2>
        <p class="text-white cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color">
            Fill out the appointment form below to schedule a consultation with one of our healthcare professionals.
        </p>

        <p class="text-white cs_banner_subtitle cs_fs_20 mb-0 cs_heading_color mt-3 mb-3">
            Learn more about our fees and payments.
        </p>

          <a href="{{ route('bookings') }}" class="cs_btn cs_style_1"  >
              <span>Book Now</span>
              <i>
                  <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                  <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
              </i>
          </a>
      </div>

    </div>
</section>
  <!-- End Banner  -->

{{--  @livewire('booking-form')--}}


  <section>
    <div class="cs_height_185 cs_height_xl_140 cs_height_lg_100"> </div>
    <div class="container">
        <h2 class=mb-2>Fees & Payments</h2>
        <p>
            York General Practice is mixed billing. We offer bulk billing services for pensioners with a Pension Card, Veterans Affairs card holders and people aged under 16. Medicare cards and concession cards must be presented before each consultation.
        </p>

        <p class="mb-5">
            As of 1 November 2022, our centre will be updating our fees as mentioned below:
        </p>

        @if (count($fees))
            <div class="row cs_gap_y_50">
            @foreach ($fees as $fee )
                <div class="col-xl-6">
                <div class="cs_pricing_card cs_style_1 cs_radius_20 overflow-hidden">
                <div class="cs_pricing_card_head cs_accent_bg cs_white_color">

                    <h3 class="cs_white_color cs_fs_24 cs_semibold mb-3">
                        <span class="cs_accent_bg">{{ $fee->consultation_type }}</span>
                    </h3>

                    <div class="d-flex justify-content-between my-3">
                        <div>Fee</div>
                        <div>&dollar;{{ $fee->fee }}</div>
                    </div>

                    <div class="d-flex justify-content-between my-3">
                        <div>Medicare Rebate</div>
                        <div>&dollar;{{ $fee->medical_rebate }}</div>
                    </div>

                    <div class="d-flex justify-content-between my-3">
                        <div>Out of Pocket</div>
                        <div>&dollar;{{  $fee->out_of_pocket }}</div>
                    </div>

                </div>
                <div class="cs_pricing_card_body">
                    <div class="cs_pricing_card_btn">
                    <a href="{{  route('contacts') }}" class="cs_btn cs_style_1 w-100">
                        <span>Get Started</span>
                        <i>
                        <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </i>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
    </div>
        @endif

        <h2 class="mb-3 mt-5">Making Payments</h2>
        <p>
            Payment is required on the day of the consultation and can be made by cash, EFTPOS or Credit Card (excluding Diners and AMEX cards). All workers compensation and motor vehicle accident patients are required to pay their accounts at the time of consultation until a letter of liability is produced from their insurance company.
        </p>
    </div>
    <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
  </section>
  <!-- End Pricing Section -->


  <section>
    <div class="cs_height_185 cs_height_xl_140 cs_height_lg_100"> </div>


    <div class="container">
        <h2 class=mb-5>Consultation Types</h2>

        @if (count($appointments))
        <div class="row cs_gap_y_50">
            @foreach ($appointments as $appointment )
                <div class="col-xl-6">
                <div class="cs_pricing_card cs_style_1 cs_radius_20 overflow-hidden">
                <div class="cs_pricing_card_head cs_accent_bg cs_white_color">
                    <h3 class="cs_white_color cs_fs_24 cs_semibold">
                    <span class="cs_accent_bg">{{ $appointment->title }}</span>
                </h3>
                    <p>
                        {!!  Str::limit($appointment->description, 230, '...')  !!}
                    </p>
                </div>
                <div class="cs_pricing_card_body">
                    <div class="cs_pricing_card_btn">
                    <a href="{{  route('contacts') }}" class="cs_btn cs_style_1 w-100">
                        <span>Get Started</span>
                        <i>
                        <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        </i>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
    </div>
        @endif
    </div>
    <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
  </section>
  <!-- End Pricing Section -->
@endsection
