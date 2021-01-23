<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

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
            "description" => "required|string"
        ];
    }

    public function getData()
    {
        return [
            "user_id" => auth()->user()->id,
            "title" => $this->title,
            "description" => $this->description,
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
