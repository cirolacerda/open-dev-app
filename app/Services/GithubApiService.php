<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GithubApiService {
    private $baseUrl = 'https://api.github.com';

    public function searchDevs($query) {
        $response = Http::withHeaders([
            'Authorization' => 'token ' . env('GITHUB_TOKEN'),
        ])->get("$this->baseUrl/search/users", [
            'q' => $query,
            'per_page' => 10,
        ]);

        return $response->json();
    }
}
