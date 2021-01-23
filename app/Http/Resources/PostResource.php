<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
USE Config;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "profile_photo" => getImageUrl(Config::get('constant.DISK.POST'),$this->feature_image),
            "created_at" => Carbon::parse($this->created_at)->format("Y M d, H:i a"),
        ];
    }
}
