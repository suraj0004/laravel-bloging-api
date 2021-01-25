<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;
use App\Http\Requests\AddTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Exception;
/**
 * @group Tag
 */
class TagController extends Controller
{
    /**
     * Display a listing of the tags.
     * @authenticated
     * @return TagCollection
     */
    public function index()
    {
        $tags = Tag::paginate(10);
        return (new TagCollection($tags))->additional([
            "message" => "Tags fetch successfully."
        ]);

    }

    /**
     * Store a newly created tag.
     * @authenticated
     * @param  AddTagRequest  $request
     * @returnTagResource
     */
    public function store(AddTagRequest $request)
    {
        $tag = Tag::create($request->getData());
        return (new TagResource($tag))->additional([
            "message" => "Tag created successfully."
        ]);
    }

    /**
     * fetch the specified tag.
     * @authenticated
     * @param  int  $id
     * @return TagResource
     */
    public function show($id)
    {
        $tag = Tag::find($id);

        if(!$tag){
            return response()->json([
                "success" => false,
                "message" => "Tag ID does not exists."
            ], 200);
        }

        return (new TagResource($tag))->additional([
            "message" => "Tag fetch successfully."
        ]);
    }

    /**
     * Update the specified tag.
     * @authenticated
     * @param  UpdateTagRequest  $request
     * @param  int  $id
     * @return TagResource
     */
    public function update(UpdateTagRequest $request, $id)
    {
        $tag = Tag::find($id);

        if(!$tag){
            return response()->json([
                "success" => false,
                "message" => "Tag ID does not exists."
            ], 200);
        }

         $tag->update($request->getData());
        return (new TagResource($tag))->additional([
            "message" => "Tag updated successfully."
        ]);
    }

    /**
     * Remove the specified Tag.
     * @authenticated
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Tag::whereId($id)
              ->delete();
        } catch (Exception $th) {
            return response()->json([
                "success" => false,
                "message" => "unable to delete Tag, tag is associated to some post."
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Tag deleted successfully"
        ], 200);
    }
}
