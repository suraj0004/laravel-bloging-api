<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\JsonResponse;

use App\Models\User;

use App\Http\Requests\UserRegistrationRequest;
use App\Http\Requests\UserLoginRequest;


/**
 * @group Authentication
 *
 * APIs for managing authentication
 */
class AuthController extends Controller
{
    /**
     * User Registration
     */
    public function userRegistration(UserRegistrationRequest $request)
    {
        $user = User::create($request->getData());
        $token = $user->createToken(User::TOKEN_NAME)->plainTextToken;

        return response()->json([
            "success" => true,
            "message" =>  "User Registered Successfully",
            "data" => [
                "user" => $user,
                "token" => $token
            ],
        ], JsonResponse::HTTP_OK);
    }

     /**
     * User Login
     */
    public function userLogin(UserLoginRequest $request)
    {
        if (!Auth::attempt($request->getData())) {
            return response()->json([
                'success' => false,
                'message' => "Incorrect Login Details",
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = Auth::user();

        $token = $user->createToken(User::TOKEN_NAME)->plainTextToken;

        return response()->json([
            "success" => true,
            "message" =>  "User Loged Successfully",
            "data" => [
                "user" => $user,
                "token" => $token
            ],
        ], JsonResponse::HTTP_OK);
    }
}
