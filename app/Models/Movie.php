<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'director',
        'gener',
        'release_year',
        'description'
    ];

    /**
     * Scope a query to filter movies by genre.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string|null  $gener
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByGener($query, $gener)
    {
        return $query->when($gener, function ($query, $gener) {
            return $query->where('gener', $gener);
        });
    }

    /**
     * Scope a query to filter movies by director.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string|null  $director
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByDirector($query, $director)
    {
        return $query->when($director, function ($query, $director) {
            return $query->where('director', $director);
        });
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
