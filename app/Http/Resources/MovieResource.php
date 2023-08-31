<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Traits\FileUploadTrait;

class MovieResource extends JsonResource
{
    use FileUploadTrait;

    public function toArray(Request $request): array
    {
        if (isset($this->route_url) && $this->route_url == 'detail') {
            return [
                'id'      => $this->id,
                'title'   => $this->title,
                'summary' => $this->summary,
                'cover_image'=> $this->filePath($this->cover_image, null),
                'pdf_url'    => $this->filePath($this->pdf_url, null),
                'user_name'  => $this->user->name,
                'genre_name' => $this->genre->name,
                'author_name'=> $this->author->name,
                'ratings' => number_format($this->getRatings()),
                'tags'    => $this->getTagsName(),
                'comments'=> CommentResource::collection($this->comments),
                'related_movies' => MovieResource::collection($this->relatedMovies()),
                'created_at' => $this->created_at->format('Y-m-d H:m:s')
            ];
        } else {
            return [
                'id'      => $this->id,
                'title'   => $this->title,
                'summary' => $this->summary,
                'user_name'   => $this->user->name,
                'genre_name'  => $this->genre->name,
                'author_name' => $this->author->name,
                'pdf_url'     => $this->filePath($this->pdf_url, null),
                'cover_image' => $this->filePath($this->cover_image, null),
                'created_at'  => $this->created_at->format('Y-m-d H:m:s')
            ];
        }
    }
}
