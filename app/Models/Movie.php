<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Rating;
use App\Models\Tag;
use App\Models\MovieTag;
class Movie extends Model
{
    use HasFactory;

    protected $table = "movies";

    protected $guarded = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $fillable = [
        'user_id',
        'author_id',
        'genre_id',
        'title',
        'summary',
        'cover_image',
        'pdf_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function getRatings()
    {
        return Rating::where('movie_id', $this->id)->avg('rate');
    }

    public function getTagsName()
    {
        return $this->tags->pluck('name');
    }

    public function relatedMovies()
    {
        $currentMovie = $this;
        $relatedMovies = Movie::where('id', '<>', $currentMovie->id)
            ->where(function ($query) use ($currentMovie) {
                $query->whereHas('author', function ($subQuery) use ($currentMovie) {
                    $subQuery->where('author_id', $currentMovie->author_id);
                })
                    ->orWhereHas('genre', function ($subQuery) use ($currentMovie) {
                        $subQuery->where('genre_id', $currentMovie->genre_id);
                    })
                    ->orWhereHas('tags', function ($subQuery) use ($currentMovie) {
                        $subQuery->whereIn('tag_id', $currentMovie->tags->pluck('id'));
                    })
                    ->orWhereHas('ratings', function ($subQuery) use ($currentMovie) {
                        $subQuery->whereIn('rate', $currentMovie->ratings()->pluck('rate'));
                    })
                    ->orderBy('rate', 'desc');
            })
            ->limit(7)
            ->get();

        return $relatedMovies;
    }
}
