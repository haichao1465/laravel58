<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticPagesController extends Controller
{
    // home
    public function home() {
        $pdo = DB::connection()->getPdo();
        dd($pdo);
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
