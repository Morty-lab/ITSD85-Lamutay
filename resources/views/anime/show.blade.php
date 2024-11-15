@extends('layouts.app')

@section('title', $anime['data']['title'])

@section('content')
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-8 text-center">
            {{ $anime['data']['title'] }}
        </h1>

        <div class="flex flex-col md:flex-row gap-8">
            <!-- Image Section -->
            <div class="w-full md:w-[200px]">
                <img
                    src="{{ $anime['data']['images']['jpg']['image_url'] }}"
                    alt="{{ $anime['data']['title'] }}"
                    class="rounded-xl shadow-lg object-cover h-[200px] transition-transform transform hover:scale-105 duration-300 ease-in-out"
                >
            </div>

            <!-- Anime Information and Synopsis Section -->
            <div class="w-full md:w-[calc(100%-200px)]">
                <p class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Synopsis</p>
                <p class="text-gray-600 dark:text-gray-300 line-clamp-6 mb-6">{{ $anime['data']['synopsis'] }}</p>
            </div>
        </div>
    </div>
@endsection
