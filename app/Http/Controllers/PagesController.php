<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
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
            return view('doctors');
        }

        public function singleDoctors($slug)
        {
            return view('singleDoctors');
        }

    public function services()
    {

        return view('services',[

            'services' =>Service::all()
        ]);
    }
}
