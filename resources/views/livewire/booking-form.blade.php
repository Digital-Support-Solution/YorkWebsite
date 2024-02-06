<section >
    <div class="container">

        <form  wire:submit.prevent="bookingFormSubmit" action="/contact" method="POST"  class="cs_appointment_form cs_style_1">
            @csrf
            <div class="cs_appointment_form_head">
                <h2 class="cs_fs_40 mb-0">Book Appoinment Now</h2>

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
                        <img src="/assets/img/home_3/appointment_icon_1.svg" alt="Icon">
                    </div>
                    <div class="cs_appointment_form_field_right">
                        <label for="name">Enter your Name</label>
                        <input id="name" type="text" wire:model="patient_name"  class="@error('patient_name')border-bottom-red @enderror" placeholder="Enter your fullname">

                        @error('patient_name')
                            <p class="text-danger _13px">  {{ $message }} </p>
                        @enderror
                    </div>
                </div>
                <div class="cs_appointment_form_field">
                    <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                        <img src="/assets/img/home_3/appointment_icon_2.svg" alt="Icon">
                    </div>
                    <div class="cs_appointment_form_field_right">
                        <label for="phone">Phone Number</label>
                        <input id="phone" type="text" wire:model="patient_phone" class="@error('patient_phone')border-bottom-red @enderror" placeholder="Include country code">

                        @error('patient_phone')  <p class="text-danger _13px">  {{ $message }} </p> @enderror
                    </div>
                </div>
                <div class="cs_appointment_form_field">
                    <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                        <img src="/assets/img/home_3/appointment_icon_3.svg" alt="Icon">
                    </div>
                    <div class="cs_appointment_form_field_right">
                        <label for="doctor">Preferred Doctor</label>
                        <select id="doctor" wire:model="doctor_id" class="cs_select @error('doctor_id')border-bottom-red @enderror">
                            @foreach (\App\Models\Doctor::all() as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->doctor_name }}</option>
                            @endforeach
                        </select>

                        @error('doctor_id')  <p class="text-danger _13px">  {{ $message }} </p> @enderror
                    </div>
                </div>
                <div class="cs_appointment_form_field">
                    <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                        <img src="/assets/img/home_3/appointment_icon_4.svg" alt="Icon">
                    </div>
                    <div class="cs_appointment_form_field_right">
                        <label for="reason">Reason for Visit</label>
                        <input id="reason" wire:model="reason_for_visit" class="@error('reason_for_visit')border-bottom-red @enderror" type="text" placeholder="Routine Checkup">
                        @error('reason_for_visit')  <p class="text-danger _13px">  {{ $message }} </p> @enderror
                    </div>
                </div>
                <div class="cs_appointment_form_field">
                    <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                        <img src="/assets/img/home_3/appointment_icon_5.svg" alt="Icon">
                    </div>
                    <div class="cs_appointment_form_field_right">
                        <label  for="datepicker">Preferred Date</label>
                        <input  type="date"
                                wire:model="preferred_date"
                                placeholder="Select Date"
                                id="datepicker"
                                class="hasDatepicker @error('preferred_date') border-bottom-red @enderror"
                        >
                        @error('preferred_date')  <p class="text-danger _13px">  {{ $message }} </p> @enderror
                    </div>
                </div>


                <div class="cs_appointment_form_field">
                    <div class="cs_appointment_form_icon cs_center rounded-circle cs_accent_bg">
                        <img src="/assets/img/home_3/appointment_icon_6.svg" alt="Icon">
                    </div>
                    <div class="cs_appointment_form_field_right">
                        <label for="preferred_time">Preferred Time</label>
                        <input id="preferred_time" wire:model="preferred_time" type="text" class="cs_timepicker" placeholder="Select Time" class="@error('preferred_time')border-bottom-red @enderror">
                        @error('preferred_time')  <p class="text-danger _13px">  {{ $message }} </p> @enderror
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none">
                <div class="cs_height_30"></div>
                <button class="cs_btn cs_style_1">
                    <span>Book Now</span>
                    <i>
                        <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                        <img src="/assets/img/icons/arrow_white.svg" alt="Icon">
                    </i>
                </button>
            </div>
        </form>
    </div>
</section>
