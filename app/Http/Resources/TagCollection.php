<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TagCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function($tag){
            return (new TagResource($tag));
        });
        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            "success" => true,
        ];
    }

}
