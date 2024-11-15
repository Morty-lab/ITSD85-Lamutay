@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="container mx-auto p-6">
        <!-- Search Bar -->
        <div class="mb-6 flex justify-center">
            <form action="{{ route('anime.search.results') }}" method="POST" class="w-full max-w-md">
                @csrf
                <input
                    type="text"
                    name="query"
                    class="w-full p-3 rounded-lg bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400"
                    placeholder="Search for anime..."
                    value="{{ request()->query('query') }}"
                    required
                />
            </form>
        </div>

        <h1 class="text-4xl font-bold text-center text-gray-900 dark:text-gray-100 mb-8">Search Results</h1>

        @if(count($results) > 0)
            <div class="flex flex-wrap justify-center gap-6 max-h-[calc(50vh-200px)] overflow-y-auto">
                @for ($i = 0; $i < min(5, count($results)); $i++)
                    @php $anime = $results[$i] ?? null @endphp
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-all hover:shadow-lg duration-300 w-full max-w-sm md:max-w-md lg:max-w-lg">
                        <!-- Image -->
                        <img src="{{ $anime['images']['jpg']['image_url'] }}" alt="{{ $anime['title'] }}" class="h-48 object-cover object-center">

                        <!-- Info section -->
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">{{ $anime['title'] }}</h3>
                            {{-- <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">{{ $anime['synopsis'] ?? 'No synopsis available.' }}</p> --}}
                            <a href="{{ route('anime.show', ['id' => $anime['mal_id']]) }}" class="mt-2 text-blue-500 hover:text-blue-700 transition-colors duration-300 flex items-center justify-center bg-blue-100 px-4 py-2 rounded-full">
                                View Details
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-2 w-4 h-4 text-white">
                                    <path fill-rule="evenodd" d="M12 5v14l7-3.5-1.414-1.414L19 12.5 12 19 4.586 12.5H2v-3zm0 0v-2.5l6.586-3.166-1.414-1.414-4.95 3.183V9.5l-3.05-.015z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        @else
            <p class="text-center text-gray-600 dark:text-gray-300 mt-8">No results found.</p>
        @endif
    </div>
@endsection
