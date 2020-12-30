<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    // home
    public function home() {
        return view("static_pages/home");
    }

    // home
    public function about() {
        return view("static_pages/about");
    }

    // home
    public function help() {
        return view("static_pages/help");
    }

}
