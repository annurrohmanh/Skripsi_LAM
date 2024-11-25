{{-- @extends('components.layout') --}}
{{-- @section('content')
@section('title', 'Kriteria LAM INFOKOM') --}}
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3>HALO, {{ $nama }} !</h3> --}}
    {{-- @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div>
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a>
                in
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>|
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
            <a class="font-medium text-blue-500 hover:underline" href="/posts/{{ $post['slug'] }}">read more &raquo;</a>
        </article>
    @endforeach --}}


    <div class="min-h-screen bg-gray-100">
        <div class="grid grid-cols-1 justify-items-center gap-6 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($data as $item)
                <div
                    class="flex max-w-sm flex-col justify-between rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
                    <div>
                        <a href="{{ $item['slug'] }}/create">
                            <p
                                class="mb-2 text-lg font-bold tracking-tight text-gray-900 hover:underline dark:text-white">
                                {{ $item['judul'] }}
                            </p>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $item['deskripsi'] }}
                        </p>
                    </div>
                    <a href="#"
                        class="mt-auto inline-flex w-fit items-end justify-end place-self-end rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more &raquo;
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</x-layout>
