<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;

function getImageUrl($disk, $image, $default_image_path = null)
{
    $default_image_path = $default_image_path ?? Config::get("constant.DEFAULT_IMAGE_PATH");
    return (Storage::disk($disk)->exists($image))
    ? Storage::disk($disk)->url($image)
    : asset($default_image_path);
}

function saveImage($disk, $image_prefix = "", $image, $delete_file = null)
{

    $imageName = $image_prefix . '_' . time() . '_' . mt_rand(1,9999) . '.' . $image->getClientOriginalExtension();
    Storage::disk($disk)->putFileAs(null, $image, $imageName);
    if(!empty($delete_file)) Storage::disk($disk)->delete($delete_file);

    return $imageName;
}
