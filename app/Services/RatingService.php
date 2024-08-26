<?php

namespace App\Services;

use App\Http\Requests\ReviewSaveRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Rating;
use Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
// use Exception;

class RatingService
{
    /**
     * Create a new review for a movie.
     *
     * @param ReviewSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createReview(ReviewSaveRequest $request)
    {
        try {
            $user_id = auth()->id();
            if (!$user_id) {
                return response()->json(['message' => 'Unauthorized.'], 401);
            }
            $reviewData = $request->validated();
            $reviewData['user_id'] = $user_id;
            $review = Rating::create($reviewData);
            return response()->json(new ReviewResource($review), 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred while creating the review.'], 500);
        }
    }

    /**
     * Update a specific review.
     *
     * @param ReviewSaveRequest $request
     * @param Rating $review
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateReview(ReviewSaveRequest $request, Rating $review)
    {
        try {
            if ($review->user_id !== auth()->id()) {
                return response()->json(['message' => 'You are not authorized to update this review.'], 403);
            }
            $review->update($request->validated());
            return response()->json(new ReviewResource($review), 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Review not found.'], 404);
        }
    }

    /**
     * Delete a specific review.
     *
     * @param Rating $review
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteReview(Rating $review)
    {
        try {
            if ($review->user_id !== auth()->id()) {
                return response()->json(['message' => 'You are not authorized to delete this review.'], 403);
            }
            $review->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {

            return response()->json(['message' => 'Review not found.'], 404);
        }
    }
}
