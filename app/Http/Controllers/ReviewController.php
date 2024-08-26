<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewSaveRequest;
use App\Models\Rating;
use App\Services\RatingService;
use Illuminate\Http\JsonResponse;

class ReviewController extends Controller
{
    protected $ratingService;

    /**
     * ReviewController constructor.
     *
     * Injects the RatingService, which contains the business logic for managing reviews.
     *
     * @param RatingService
     */
    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }
    //==========================================================================================
    /**
     * Store a newly created review in the database.
     *
     * @param ReviewSaveRequest
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ReviewSaveRequest $request)
    {
        return $this->ratingService->createReview($request);
    }
    //=======================================================================
    /**
     * Update the specified review in the database.
     *
     * @param ReviewSaveRequest
     * @param Rating
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ReviewSaveRequest $request, Rating $review)
    {
        return $this->ratingService->updateReview($request, $review);
    }
    //=====================================================================================

    /**
     * Remove the specified review from the database.
     *
     * @param Rating
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Rating $review)
    {
        return $this->ratingService->deleteReview($review);
    }
}
