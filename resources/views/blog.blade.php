@extends('layout.app')

@section('title', 'Blog - WPU Keren')

@section('content')
    {{-- <article class="py-4 max-w-3xl border-b border-gray-200">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Paskibraka SMAN</h2>
        <div class="text-base text-gray-500">
            <a href="#" target="_blank" rel="noopener noreferrer">
                Yanto | Sekretaris
            </a>
        </div>
        <p class="my-4 font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci eveniet iusto, ab officiis perspiciatis eius error, voluptas cumque reiciendis laboriosam totam optio, voluptates amet nisi eum quam repudiandae architecto consequatur!</p>
    </article>
    <a href="" class="font-medium text-blue-500 hover:text-blue-700">Read more &raquo;</a> --}}

    @foreach ($posts as $post)
        <article class="py-4 max-w-3xl border-b border-gray-200">
            <a href="{{ route('blog.show', $post['id']) }}" class="font-medium text-blue-500 hover:text-blue-700">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#" target="_blank" rel="noopener noreferrer">
                    {{ $post['author'] }} | Penulis
                </a>
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="{{ route('blog.show', $post['id']) }}" class="font-medium text-blue-500 hover:text-blue-700">Read
                more &raquo;</a>
        </article>
    @endforeach
@endsection
