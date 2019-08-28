<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function invitation () {
        return view('invitation');
    }

    public function rsvp () {
        return view('rsvp');
    }

    public function registries () {
        return view('registries');
    }

    public function info () {
        return view('info');
    }

}
