<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Hash;
use Illuminate\Support\Facades\Config;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|string",
            "email" => "required|email:rfc,dns|unique:users,email",
            // "phone" => "required|numeric|digits:10|unique:users,phone",
            "password" => "required|min:6|confirmed",
            "password_confirmation" => "required",
            // "profile_photo" => "required|image",
        ];
    }

    public function getUserData()
    {
        return [
            // "role_id" => User::ROLES["USER"],
            "name" => $this->name,
            "email" => $this->email,
            // "phone" => $this->phone,
            "password" => Hash::make($this->password),
            // "profile_photo" => saveImage(Config::get("constant.DISK.USER"), "user", $this->profile_photo)
        ];
    }

    public function getAuthorData()
    {
        return [
            "role_id" => User::ROLES["AUTHOR"],
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "password" => Hash::make($this->password),
            "profile_photo" => saveImage(Config::get("constant.DISK.AUTHOR"), "author", $this->profile_photo)
        ];
    }

    public function getEditorData()
    {
        return [
            "role_id" => User::ROLES["EDITOR"],
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "password" => Hash::make($this->password),
            "profile_photo" => saveImage(Config::get("constant.DISK.EDITOR"), "editor", $this->profile_photo)
        ];
    }

    public function failedValidation(Validator $validation)
    {
        $response = new JsonResponse(
          [
            "success" => false,
            "message" => $validation->errors()->first(),
          ],
          JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        );

        throw new HttpResponseException( $response );
    }
}
