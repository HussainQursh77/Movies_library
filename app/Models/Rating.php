<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'movie_id',
        'rating',
        'review',
    ];

    /**
     * Get the user that owns the rating.
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the movie that the rating is for.
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
