<?php

namespace App\Livewire;

use App\Models\Contact;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
class ContactUsForm extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $subject;
    public $message;
    public $success;


    protected $rules = [
        'name'      =>'required',
        'email'     =>'required',
        'subject'    =>'required',
        'message'    =>'required',
    ];

    protected $messages = [
        'name.required'      =>'Please enter your name',
        'email.required'     =>'Please enter your email',
        'subject.required'    =>'Please enter subject',
        'message.required'    =>'Please enter message',
    ];

    public function contactFormSubmit()
    {
        $contact = $this->validate();

        Contact::create(
            $this->only(['name','email','subject','message'])
        );


        $this->alert('success',
            'Thank you for reaching out to us! We will get back to you as soon as possible',
            [ 'position' => 'center' ]);

        $this->clearFields();
    }

    private function clearFields()
    {

        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }


    public function render()
    {
        return view('livewire.contact-us-form');
    }

}
