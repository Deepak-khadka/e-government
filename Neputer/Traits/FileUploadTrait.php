<?php

namespace Neputer\Traits;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Trait Image
 * @package Neputer\Supports\Concerns
 */
trait FileUploadTrait
{

    /**
     * @param $image
     * @param $folder_name
     * @param null $existing_image
     * @return string
     */
    public function uploadImage($image, $folder_name, $existing_image = null)
    {
        $image_name = $this->__getRandomNumbers() . '_' . $image->getClientOriginalName();
        $file_path = $folder_name . DIRECTORY_SEPARATOR . $image_name;
        Storage::disk('public')->put($file_path, File::get($image));
        if ($existing_image) {
            $this->__deleteFile('images' . DIRECTORY_SEPARATOR . $folder_name . DIRECTORY_SEPARATOR . $existing_image);
        }
        return $image_name;
    }

    /**
     * Creates different size thumbs for uploaded image
     *
     * @param $image
     * @param $imageName
     * @param $folder_name
     * @param null $image_name will have value if request_for is update
     */
    public function uploadImageThumbs($image, $imageName, $folder_name, $image_name = null)
    {
        $image_dimension = $this->image_dimensions;

        foreach ($image_dimension as $image_dimansion) {
            // open and resize an image file
            $img = \Intervention\Image\Facades\Image::make($image)->resize($image_dimansion['width'], $image_dimansion['height']);
            // save file as jpg with medium quality
            Storage::disk('public')->put('images' . DIRECTORY_SEPARATOR . $folder_name . DIRECTORY_SEPARATOR . $image_dimansion['width'] . '_' . $image_dimansion['height'] . '_' . $imageName, $img);
        }
    }

    public function delete($folder_name, $image_name)
    {
        $this->__deleteFile('images' . DIRECTORY_SEPARATOR . $folder_name . DIRECTORY_SEPARATOR . $image_name);
    }

    public function __deleteFile($file)
    {
        if (Storage::disk('public')->has($file)) {
            Storage::disk('public')->delete($file);
            return true;
        }
        return false;
    }

    /**
     * Get Random Number
     *
     * @return string
     */
    public function __getRandomNumbers()
    {
        return rand(5555, 9876) . '_';
    }
}
