<?php

namespace App\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class BookingForm extends Component
{
    use LivewireAlert;

    public $doctor_id;
    public $patient_name;
    public $patient_phone;
    public $preferred_date;
    public $preferred_time;
    public $reason_for_visit;
    public $success;


    protected $rules = [
        'patient_name'      =>'required',
        'patient_phone'     =>'required',
        'preferred_date'    =>'required',
        'preferred_time'    =>'required',
        'reason_for_visit'  =>'required',
    ];

    protected $messages = [
        'patient_name.required'      =>'Please enter your name',
        'patient_phone.required'     =>'Please enter your phone number',
        'preferred_date.required'    =>'Please enter preferred date',
        'preferred_time.required'    =>'Please enter preferred time',
        'reason_for_visit.required'  =>'Please enter reason for visit',
    ];

    public function bookingFormSubmit()
    {
        $booking = $this->validate();

        Booking::create(
            $this->only(['doctor_id','patient_name', 'patient_phone','preferred_date','preferred_time','reason_for_visit'])
        );

//        $this->alert('success', 'Basic Alert');

        $this->alert('success',
            'Thank you for reaching out to us! We will get back to you as soon as possible',
            [ 'position' => 'center' ]);

        $this->clearFields();
    }

    private function clearFields()
    {

        $this->patient_name = '';
        $this->patient_phone = '';
        $this->preferred_date = '';
        $this->preferred_time = '';
        $this->reason_for_visit = '';
    }


    public function render()
    {
        return view('livewire.booking-form');
    }
}
