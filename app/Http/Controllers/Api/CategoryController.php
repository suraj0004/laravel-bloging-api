<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\AddCategoryRequest;


/**
 * @group Category
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return (new CategoryCollection($categories))->additional([
            "message" => "categories fetch successfully."
        ]);
    }

    /**
     * Store a newly created Category.
     * @authenticated
     * @param  AddCategoryRequest  $request
     * @return CategoryResource
     */
    public function store(AddCategoryRequest $request)
    {
        $category = Category::create($request->getData());
        return (new CategoryResource($category))->additional([
            "message" => "Category created successfully."
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
