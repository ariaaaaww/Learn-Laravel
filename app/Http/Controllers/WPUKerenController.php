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
        $posts = [
            [
                "id" => 1,
                "title" => "Belajar Laravel",
                "author" => "Arianto",
                "body" => "Laravel adalah framework PHP yang digunakan untuk membangun aplikasi web dengan cepat dan efisien."
            ],
            [
                "id" => 2,
                "title" => "Belajar Vue.js",
                "author" => "Arianto",
                "body" => "Vue.js adalah framework JavaScript yang digunakan untuk membangun antarmuka pengguna interaktif."
            ],
            [
                "id" => 3,
                "title" => "Belajar React",
                "author" => "Arianto",
                "body" => "React adalah library JavaScript yang digunakan untuk membangun antarmuka pengguna yang dinamis dan responsif."
            ]
        ];
        return view('blog', compact('header', 'title', 'posts'));
    }
    public function contact()
    {
        $header = "Contact - WPU Keren";
        $title = "Contact - WPU Keren";
        return view('contact', compact('header', 'title'));
    }
}
