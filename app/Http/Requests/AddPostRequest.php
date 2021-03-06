<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Config;

class AddPostRequest extends FormRequest
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
            "title" => "required|string",
            "description" => "required|string",
            "feature_image" => "required|image",
            "tags" => "required|array",
            "tags.*" => "required|numeric|exists:tags,id",
            "categories" => "required|array",
            "categories.*" => "required|numeric|exists:categories,id",
        ];
    }

    public function getData()
    {
        return [
            "user_id" => auth()->user()->id,
            "title" => $this->title,
            "description" => $this->description,
            "feature_image" => saveImage(Config::get("constant.DISK.POST"), auth()->user()->id, $this->feature_image)
        ];
    }

    public function getTags()
    {
        return $this->get("tags");
    }

    public function getCategories()
    {
        return $this->get("categories");
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
