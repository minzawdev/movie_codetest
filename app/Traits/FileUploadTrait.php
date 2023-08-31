<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait FileUploadTrait
{

    public function uploadFile(UploadedFile $file, $folder = null, $disk = 'public', $name = null)
    {
        $file_name = !is_null($name) ? $name : Str::random(10);

        return $file->storeAs(
            $folder,
            $file_name . "." . $file->getClientOriginalExtension(),
            $disk
        );
    }

    public function deleteFile($path, $disk = 'public')
    {
        if(!is_null($path))
          Storage::disk($disk)->delete($path);
    }

    public function filePath($value, $default = 1)
    {
        if (is_object($value)) {
            return is_null($value)
                ? (is_null($default) ? $value : asset("/img/no-image.jpg"))
                : Storage::url($value->path);
        }

        return is_null($value)
            ? (is_null($default) ? $value : asset("/img/no-image.jpg"))
            : Storage::url($value);
    }
}
