<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactControlller extends Controller
{
    public function contact() {
        return view('client/contact');

    }
}
