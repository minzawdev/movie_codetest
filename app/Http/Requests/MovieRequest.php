<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'author_id'=> 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
            'title'    => 'required',
            'summary'  => 'required',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdf_url'     => 'nullable|mimes:pdf|max:10000',
        ];
    }
}
