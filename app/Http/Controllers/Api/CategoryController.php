<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;


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
     * fetch the specified Category.
     * @authenticated
     * @param  int  $id
     * @return CategoryResource
     */
    public function show($id)
    {
        $category = Category::find($id);

        if(!$category){
            return response()->json([
                "success" => false,
                "message" => "category ID does not exists."
            ], 200);
        }

        return (new CategoryResource($category))->additional([
            "message" => "category fetch successfully."
        ]);
    }

    /**
     * Update the specified Category.
     * @authenticated
     * @param  UpdateCategoryRequest  $request
     * @param  int  $id
     * @return CategoryResource
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = Category::find($id);

        if(!$category){
            return response()->json([
                "success" => false,
                "message" => "category ID does not exists."
            ], 200);
        }

         $category->update($request->getData());
        return (new CategoryResource($category))->additional([
            "message" => "category updated successfully."
        ]);
    }

    /**
     * Remove the specified Category.
     * @authenticated
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Category::whereId($id)
              ->delete();
        } catch (Exception $th) {
            return response()->json([
                "success" => false,
                "message" => "unable to delete Category, Category is associated to some post."
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Category deleted successfully"
        ], 200);
    }
}
