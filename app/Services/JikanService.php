<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class JikanService
{
    protected $baseUrl = 'https://api.jikan.moe/v4';

    public function getAnimeById($id)
    {
        $response = Http::get("{$this->baseUrl}/anime/{$id}/full");
        return $response->json();
    }
}
