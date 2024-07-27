<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class GithubApiService {
    private $baseUrl = 'https://api.github.com';

    public function searchDevs($query, $page = 1, $perPage = 10) {
        $response = Http::withHeaders([
            'Authorization' => 'token ' . env('GITHUB_TOKEN'),
        ])->get("$this->baseUrl/search/users", [
            'q' => $query,
            'per_page' => $perPage,
            'page' => $page,

        ]);

        $items = $response->json()['items'];
        $total = $response->json()['total_count'];

        return new LengthAwarePaginator($items,$total,$perPage,$page, [ 'path' => LengthAwarePaginator::resolveCurrentPath(),]);
    }
}
