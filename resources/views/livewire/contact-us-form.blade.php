<div>
    <form  wire:submit.prevent="contactFormSubmit" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="name" class="cs_input_label cs_heading_color">Name</label>
                <input id="name" wire:model="name"  type="text" class="cs_form_field  @error('name') border-all-red @enderror" placeholder="David John">
                <div class="cs_height_42 cs_height_xl_25"></div>
            </div>
            <div class="col-lg-6">
                <label for="email" class="cs_input_label cs_heading_color">Email</label>
                <input id="email" wire:model="email"  type="email" class="cs_form_field @error('email') border-all-red @enderror " placeholder="example@gmail.com">
                <div class="cs_height_42 cs_height_xl_25"></div>
            </div>
            <div class="col-lg-12">
                <label for="subject" class="cs_input_label cs_heading_color">Subject</label>
                <input id="subject" wire:model="subject"  type="text" class="cs_form_field @error('subject') border-all-red @enderror" placeholder="Your subject">
                <div class="cs_height_42 cs_height_xl_25"></div>
            </div>
            <div class="col-lg-12">
                <label for="message" class="cs_input_label cs_heading_color">Message</label>
                <textarea id="message" wire:model="message" cols="30" rows="5" class="cs_form_field @error('message') border-all-red @enderror" placeholder="Write something..."></textarea>
                <div class="cs_height_42 cs_height_xl_25"></div>
            </div>
            <div class="col-lg-12">
                <div class="cs_height_18"></div>
                <button class="cs_btn cs_style_1" type="submit">
                    <span>Submit</span>
                    <i>
                        <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                        <img src="assets/img/icons/arrow_white.svg" alt="Icon">
                    </i>
                </button>
            </div>
        </div>
    </form>
</div>
