<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'email'       => $this->email,
            'description' => $this->description,
            'created_at'  => $this->created_at->format('Y-m-d H:m:s')
        ];
    }
}
