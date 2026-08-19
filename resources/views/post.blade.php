@extends('layout.app')

@section('title', $title)

@section('content')
    <article class="py-4 max-w-3xl border-b border-gray-200">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#" target="_blank" rel="noopener noreferrer">
                {{ $post['author'] }} | Penulis
            </a>
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="{{ route('blog') }}" class="font-medium text-blue-500 hover:text-blue-700">&laquo; Back to blog</a>
    </article>
@endsection
