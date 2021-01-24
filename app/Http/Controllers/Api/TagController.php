<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Resources\TagCollection;
use App\Http\Resources\TagResource;
use App\Http\Requests\AddTagRequest;

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
        // return $request->getData();
        $tag = Tag::create($request->getData());
        return (new TagResource($tag))->additional([
            "message" => "Tag created successfully."
        ]);
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
