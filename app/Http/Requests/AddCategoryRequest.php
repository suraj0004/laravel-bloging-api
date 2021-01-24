<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class AddCategoryRequest extends FormRequest
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
            "category" => "required|string|unique:categories,category"
        ];
    }

    public function getData()
    {
        return [
            "category" => $this->get("category")
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
