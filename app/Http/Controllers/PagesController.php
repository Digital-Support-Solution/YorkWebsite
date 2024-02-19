<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\CoreValue;
use App\Models\Doctor;
use App\Models\Fee;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index()
    {
       return view('welcome',[
           'services'     => Service::orderBy('title','DESC')->get(),
           'corevalues'   => CoreValue::orderBy('title','DESC')->get(),
           'testimonials' => Testimonial::orderBy('fullname','DESC')->get(),
           'blogs'        => Blog::orderBy('title','DESC')->limit(3)->get(),
           'featured'     => Blog::where('is_featured',1)->latest('updated_at')->first(),
           'settings'     => Setting::first(),
       ]);
    }


    public function search(Request $request)
    {
        return $request->all();
    }


    public function sendContacts(Request $request)
    {
        return $request->all();
    }

    public function doctors()
    {
        return view('doctors',[
            'doctors' => Doctor::orderBy('doctor_name','DESC')->get()
        ]);
    }

    public function singleDoctors($slug)
    {
        return view('singleDoctors');
    }

    public function services()
    {
        return view('services', [
            'services' => Service::all()
        ]);
    }


    public function postBooking(Request $request)
    {


    }

    public function appointments(){
        return view('appointments',[
            'appointments' => Appointment::get(),
            'fees' => Fee::get(),
        ]);
    }
}
