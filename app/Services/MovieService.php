<?php
namespace App\Services;

use App\Http\Requests\MovieIndexRequest;
use App\Http\Requests\MovieSaveRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\ReviewResource;


class MovieService
{
    /**
     * Get a listing of all movies.
     *
     * @param MovieIndexRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllMovies(MovieIndexRequest $request)
    {
        try {
            $itemsPerPage = $request->query('items_per_page', 15); // 15 items per page by default
            $sortOrder = strtoupper($request->query('sort_order', 'DESC')); // Default DESC order

            $gener = $request->query('gener'); // Filter by genre
            $director = $request->query('director'); // Filter by director

            // Use scope ByGener ByDirector from model Movie to filter
            $movies = Movie::byGener($gener)
                ->byDirector($director)
                ->orderBy('release_year', $sortOrder)
                ->paginate($itemsPerPage);

            return response()->json(MovieResource::collection($movies), 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while fetching movies.'], 500);
        }
    }
    //======================================================================================================================
    /**
     * Create a newly created movie in the database.
     *
     * @param MovieSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMovie(MovieSaveRequest $request)
    {
        try {
            $movie = Movie::create($request->validated());
            return response()->json(new MovieResource($movie), 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while creating the movie.'], 500);
        }
    }
    //==============================================================================================================
    /**
     * Get the specified movie.
     *
     * @param Movie $movie
     * @return \Illuminate\Http\JsonResponse
     */
    public function getOneMovie(Movie $movie)
    {
        try {

            //get movie with reating
            if ($movie->ratings->isEmpty()) {
                $ratings = 'No ratings yet.';
            } else {
                $ratings = ReviewResource::collection($movie->ratings);
            }
            $data = [
                'movie' => new MovieResource($movie),
                'ratings' => $ratings,
            ];

            return response()->json($data, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An unexpected error occurred.'], 500);
        }
    }
    //======================================================================================
    /**
     * Update the specified movie in the database.
     *
     * @param MovieSaveRequest $request
     * @param Movie $movie
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateMovie(MovieSaveRequest $request, Movie $movie)
    {
        try {
            $movie->update($request->validated());
            return response()->json(new MovieResource($movie), 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Movie not found.'], 404);
        }
    }
    //============================================================================================================
    /**
     * Delete the specified movie from the database.
     *
     * @param Movie $movie
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMovie(Movie $movie)
    {
        try {
            $movie->delete();
            return response()->json(null, 204);
        } catch (\Exception $th) {
            return response()->json(['message' => 'Movie not found.'], 404);
        }
    }
}
