<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Auth;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group Registration | Login
 *
 * APIs for managing authentication
 */
class AuthController extends Controller
{
    /**
     * User Registration
     *
     */
    public function userRegistration(RegistrationRequest $request)
    {
        $user = User::create($request->getUserData());
        $token = $user->createToken(User::TOKEN_NAME)->plainTextToken;

        return (new UserResource($user))->additional([
            "message" => "User Registered Successfully",
            "token" => $token,
        ]);
    }

    /**
     * Author Registration
     */
    public function authorRegistration(RegistrationRequest $request)
    {
        $user = User::create($request->getAuthorData());
        $token = $user->createToken(User::TOKEN_NAME)->plainTextToken;

        return (new UserResource($user))->additional([
            "message" => "Author Registered Successfully",
            "token" => $token,
        ]);
    }

    /**
     * Editor Registration
     */
    public function editorRegistration(RegistrationRequest $request)
    {
        $user = User::create($request->getEditorData());
        $token = $user->createToken(User::TOKEN_NAME)->plainTextToken;

        return (new UserResource($user))->additional([
            "message" => "Editor Registered Successfully",
            "token" => $token,
        ]);
    }

    /**
     * Login
     */
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->getData())) {
            return response()->json([
                'success' => false,
                'message' => "Incorrect Login Details",
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = Auth::user();

        $token = $user->createToken(User::TOKEN_NAME)->plainTextToken;

        return (new UserResource($user))->additional([
            "message" => "User Login Successfully",
            "token" => $token,
        ]);
    }

    /**
     * Logout
     * @authenticated
     */
    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Opps Something went wrong",
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
        return response()->json([
            'success' => true,
            'message' => "Logout Successfully.",
        ], JsonResponse::HTTP_OK);
    }
}
