<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WPUKerenController extends Controller
{
    public function about()
    {
        $header = "About WPU Keren";
        $title = "Tentang WPU Keren";
        $name = "Arianto";
        return view('about', compact('header', 'title', 'name'));
    }
    public function home()
    {
        $header = "Welcome to WPU Keren";
        $description = "Selamat datang di halaman Home";
        $title = "Home - WPU Keren";
        return view('home', compact('header', 'description', 'title'));
    }
    public function blog()
    {
        $header = "Blog - WPU Keren";
        $title = "Blog - WPU Keren";
        return view('blog', compact('header', 'title'));
    }
    public function contact()
    {
        $header = "Contact - WPU Keren";
        $title = "Contact - WPU Keren";
        return view('contact', compact('header', 'title'));
    }
}
