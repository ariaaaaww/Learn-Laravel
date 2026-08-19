<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    public function show($id)
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Belajar Laravel',
                'author' => 'Arianto',
                'body' => 'Laravel adalah framework PHP yang digunakan untuk membangun aplikasi web dengan cepat dan efisien.',
            ],
            [
                'id' => 2,
                'title' => 'Belajar Vue.js',
                'author' => 'Arianto',
                'body' => 'Vue.js adalah framework JavaScript yang digunakan untuk membangun antarmuka pengguna interaktif.',
            ],
            [
                'id' => 3,
                'title' => 'Belajar React',
                'author' => 'Arianto',
                'body' => 'React adalah library JavaScript yang digunakan untuk membangun antarmuka pengguna yang dinamis dan responsif.',
            ],
        ];

        $post = Arr::first($posts, fn ($item) => $item['id'] == $id);

        if (! $post) {
            abort(404);
        }

        $header = 'Single Post';
        $title = $post['title'];

        return view('post', compact('post', 'header', 'title'));
    }
}

