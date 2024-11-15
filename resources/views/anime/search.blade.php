@extends('layouts.app')

@section('title', 'Search Anime')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 px-4">
        <div class="w-full max-w-xl bg-white dark:bg-gray-800 p-14 rounded-2xl shadow-2xl mx-auto">
            <!-- Title Section -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-extrabold text-gray-900 dark:text-gray-100">Search Your Favorite Anime</h1>
                <p class="mt-2 text-xl text-gray-600 dark:text-gray-300">Find detailed information about anime titles, episodes, and more!</p>
            </div>

            <!-- Image Section -->
            <div class="mb-8 text-center">
                <img src="https://via.placeholder.com/600x300.png?text=Anime+Search" alt="Anime Search" class="rounded-lg shadow-lg max-w-full h-auto">
            </div>

            <!-- Search Form -->
            <form action="{{ route('anime.search.results') }}" method="POST" class="space-y-8">
                @csrf
                <div>
                    <input
                        type="text"
                        name="query"
                        placeholder="Enter anime title"
                        class="w-full px-8 py-4 text-lg border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-100 dark:border-gray-600"
                        required
                    />
                </div>
                <div class="flex justify-center">
                    <button
                        type="submit"
                        class="px-8 py-4 text-lg bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white rounded-lg font-semibold focus:outline-none focus:ring-4 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700 transition-all duration-300 transform hover:scale-105"
                    >
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
