<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Http\Requests\User\AddPostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display all posts.
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['user'])->get();

        return response()->json([
            "success" => true,
            "message" =>  "Post Fetch Successfully",
            "data" => $posts
        ], JsonResponse::HTTP_OK);
    }

    /**
     * Add Post.
     * @authenticated
     * @param  AddPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPostRequest $request)
    {
        Post::create($request->getData());

        return response()->json([
            "success" => true,
            "message" =>  "Post Added Successfully",
        ], JsonResponse::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
