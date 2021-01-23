<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Http\Requests\AddPostRequest;
use App\Models\Post;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * Display published posts.
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function published()
    {
        $posts = Post::where('published',1)->get();
        return (new PostCollection($posts))->additional([
            "message" =>  "Posts Fetch Successfully",
        ]);
    }

     /**
     * Display all posts.
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $posts = Post::get();
        return (new PostCollection($posts))->additional([
            "message" =>  "Posts Fetch Successfully",
        ]);
    }

     /**
     * Display unpublished posts.
     * @authenticated
     * @return PostCollection
     */
    public function unpublished()
    {
        $posts = Post::where('published',0)->get();
        return (new PostCollection($posts))->additional([
            "message" =>  "Posts Fetch Successfully",
        ]);
    }

    /**
     * Add Post.
     * @authenticated
     * @param  AddPostRequest  $request
     * @return PostResource
     */
    public function store(AddPostRequest $request)
    {
       $post = Post::create($request->getData());
        return (new PostResource($post))->additional([
            "message" =>  "Post Added Successfully",
        ]);
    }

    /**
     * Display the specified post.
     * @authenticated
     * @param  int  $id
     * @return PostResource
     */
    public function showFromAll($id)
    {
        $post = Post::find($id);
        if(!$post){
            return response()->json([
                "success" => false,
                "message" => "Post not available."
            ], 200);
        }
        return (new PostResource($post))->additional([
            "message" =>  "Post Fetch Successfully",
        ]);
    }

     /**
     * Display the specified published post .
     * @authenticated
     * @param  int  $id
     * @return PostResource
     */
    public function showFromPublished($id)
    {
        $post = Post::whereId($id)->where('published',1)->first();
        if(!$post){
            return response()->json([
                "success" => false,
                "message" => "Post not available."
            ], 200);
        }
        return (new PostResource($post))->additional([
            "message" =>  "Post Fetch Successfully",
        ]);
    }

     /**
     * Display the specified unpublished post.
     * @authenticated
     * @param  int  $id
     * @return PostResource
     */
    public function showFromUnpublished($id)
    {
        $post = Post::whereId($id)->where('published',0)->first();
        if(!$post){
            return response()->json([
                "success" => false,
                "message" => "Post not available."
            ], 200);
        }
        return (new PostResource($post))->additional([
            "message" =>  "Post Fetch Successfully",
        ]);
    }

    /**
     * Update the specified post.
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
     * Remove the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
