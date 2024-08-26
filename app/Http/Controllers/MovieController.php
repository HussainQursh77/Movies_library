<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieSaveRequest;
use App\Http\Requests\MovieIndexRequest;
use App\Http\Resources\MovieResource;
use App\Services\MovieService;

class MovieController extends Controller
{
    protected $movieService;

    /**
     * Injects the MovieService, which contains the logic for managing movies.
     *
     * @param MovieService $movieService
     */
    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }
    //============================================================================================================
    /**
     * Display a listing of the movies.
     *
     * @param MovieIndexRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(MovieIndexRequest $request)
    {
        return $this->movieService->getAllMovies($request);
    }
    //============================================================================================================
    /**
     * Store a newly created movie in the database.
     *
     * @param MovieSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MovieSaveRequest $request)
    {
        return $this->movieService->createMovie($request);
    }
    //============================================================================================================
    /**
     * Display the specified movie.
     *
     * @param Movie $movie .
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Movie $movie)
    {
        return $this->movieService->getOneMovie($movie);
    }
    //============================================================================================================

    /**
     * Update the specified movie in the database.
     * @param MovieSaveRequest $request
     * @param Movie $movie
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MovieSaveRequest $request, Movie $movie)
    {
        return $this->movieService->updateMovie($request, $movie);
    }
    //============================================================================================================
    /**
     * Remove the specified movie from the database.
     * @param Movie $movie
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Movie $movie)
    {
        return $this->movieService->deleteMovie($movie);
    }
}
