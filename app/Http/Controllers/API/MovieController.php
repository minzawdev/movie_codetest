<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Comment;
use App\Http\Requests\MovieRequest;
use App\Http\Requests\CommentRequest;
use App\Http\Resources\MovieResource;
use Illuminate\Support\Carbon;
use App\Traits\FileUploadTrait;
class MovieController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $movies = Movie::latest()->paginate(10);
        return MovieResource::collection($movies);
    }

    public function store(MovieRequest $request)
    {   
        $data = [
            'author_id' => $request->author_id,
            'user_id'   => auth()->user()->id,
            'genre_id'  => $request->genre_id,
            'title'     => $request->title,
            'summary'   => $request->summary
        ];

        if ($file = $request->file('cover_image')) {
            $data['cover_image'] = $this->uploadFile($file, 'movies');
        }

        if ($file = $request->file('pdf_url')) {
            $data['pdf_url'] = $this->uploadFile($file, 'movies');
        }

        $movie = Movie::create($data);

        if (!empty($request->tag)) {
            $tag_ids = array_map(
                function ($value) {
                    return (int)$value;
                },
                $request->tag
            );

            $movie->tags()->attach($tag_ids, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        $movie["route_url"]    = 'detail';

        return new MovieResource($movie);
    }

    public function show(Movie $movie)
    {
        $movie["route_url"] = 'detail';
        return new MovieResource($movie);
    }

    public function update(MovieRequest $request, Movie $movie)
    {    
        if (auth()->user()->id != $movie->user_id) {
            return response()->json([
                'message' => 'Forbidden Error!'
            ], 403);
        }

        $data = [
            'title'    => $request->title,
            'summary'  => $request->summary,
            'author_id'=> $request->author_id,
            'user_id'  => auth()->user()->id,
            'genre_id' => $request->genre_id,
        ];

        if ($file = $request->file('cover_image')) {
            $data['cover_image'] = $this->uploadFile($file, 'movies');
        }

        if ($file = $request->file('pdf_url')) {
            $data['pdf_url'] = $this->uploadFile($file, 'movies');
        }

        $movie->update($data);

        if (!empty($request->tag)) {
            $tag_ids = array_map(
                function ($value) {
                    return (int)$value;
                },
                $request->tag
            );

            $movie->tags()->attach($tag_ids, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    
        $movie["route_url"]    = 'detail';

        return new MovieResource($movie);
    }

    public function destroy(Movie $movie)
    {    
        if (auth()->user()->id != $movie->user_id) {
            return response()->json([
                'message' => 'Forbidden Error!'
            ], 403);
        }

        $this->deleteFile($movie->cover_image);
        $this->deleteFile($movie->pdf_url);
        $movie->delete();

        return response()->json([
            'message' => 'Successfully Deleted'
        ]);
    }

    public function storeComment(CommentRequest $request, Movie $movie)
    {
        $data = [
            'user_id'  => auth()->user()->id,
            'movie_id' => $movie->id,
            'email'    => $request->email,
            'description' => $request->description
        ];

        Comment::create($data);
        $movie["route_url"] = 'detail';

        return new MovieResource($movie);
    }
}
