<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Config;
use App\Models\User;

class UserResource extends JsonResource
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
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "role" => array_search($this->role_id,User::ROLES),
            "profile_photo" => getImageUrl($this->getDisk($this->role_id),$this->profile_photo),
        ];
    }

    public function with($request)
    {
        return [
            "success" => true,
            'message' => ""
        ];
    }

    private function getDisk($role_id)
    {
        if($role_id == 2)
          return Config::get('constant.DISK.EDITOR');
        else if($role_id == 3)
          return Config::get('constant.DISK.AUTHOR');
        else
          return Config::get('constant.DISK.USER');
    }
}
