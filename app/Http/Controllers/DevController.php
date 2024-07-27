<?php

namespace App\Http\Controllers;

use App\Services\GithubApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DevController extends Controller
{
    protected $githubApiService;

    // Injetando github service
    public function __construct(GithubApiService $githubApiService) {
        $this->githubApiService = $githubApiService;
    }

    // Página buscar devs
    public function index() {
        Gate::authorize('search-devs');

        return view('dev.index');
    }

    // Método busca e lista devs encontrados no github
    public function search (Request $request)
    {
        Gate::authorize('search-devs');

        $query = 'type:' . $request->input('type') . ' ' .
                 'location:' . $request->input('location') . ' ' .
                 'language:' . $request->input('language') . ' ' .
                 'repos:>' . $request->input('repos') . ' ' .
                 'followers:>' . $request->input('followers');

        $page = $request->get('page', 1);

        $devs = $this->githubApiService->searchDevs($query, $page);

        return view('dev.index', compact('devs'));

    }
}
