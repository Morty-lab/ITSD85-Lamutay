<?php

namespace App\Http\Controllers;

use App\Services\JikanService;

class AnimeController extends Controller
{
    protected $jikanService;

    public function __construct(JikanService $jikanService)
    {
        $this->jikanService = $jikanService;
    }

    public function show($id)
    {
        $anime = $this->jikanService->getAnimeById($id);
        return view('anime.show', ['anime' => $anime]);
    }
}
