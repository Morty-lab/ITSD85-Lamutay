<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeSearchController extends Controller
{
    public function index()
    {
        return view('anime.search');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Make a request to the Jikan API
        $response = Http::get("https://api.jikan.moe/v4/anime", [
            'q' => $query,
        ]);

        $results = $response->json();

        return view('anime.results', [
            'results' => $results['data'] ?? []
        ]);
    }
}
