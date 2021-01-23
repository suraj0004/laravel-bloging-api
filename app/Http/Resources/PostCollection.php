<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function ($post) {
            return (new PostResource($post));
        });
        return parent::toArray($request);
    }


    public function with($request)
    {
        return [
            'success' => true,
            'message' => ''
        ];
    }
}
