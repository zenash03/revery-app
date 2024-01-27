<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\Categories;
use App\Http\Resources\CategoriesResource;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Validator;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator;

class CategoryController extends BaseAPIController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();

        return $this->sendResponse(CategoriesResource::collection($categories), 'Category Data Fetched.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request-> all(), [
            "category_name" => "required",
            "category_description" => "nullable"
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), "Input Data Invalid!", 402);
        }
        try {
            // $lastID = Category::max("CategoryID");
            // $idNum = substr($lastID, 1);
            // $newID = sprintf("C%04d", $idNum + 1);
            $newID = UniqueIdGenerator::generate(['table' => 'categories', 'field' => 'category_id', 'length' => 10, 'prefix' => 'CAT-']);


            $requestData = $request->all();
            $requestData["category_id"] = $newID;

            $categories = Category::create($requestData);

            return $this->sendResponse(new CategoriesResource($categories),"Category Data Added");
        }
         catch (QueryException $e) {
            return $this->sendError($e->getMessage(), "Error");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::findOrFail($id);

        return $this->sendResponse(new CategoriesResource($categories), 'Category Data Fetched.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $input = $request ->all();
        $validator = Validator::make($input, [
            'category_name'=> 'required',
            'category_description'=> 'nullable'
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), '', 400);
        }
        $category->category_name = $input['category_name'];
        $category->category_description = $input['category_description'];
        $category->save();

        return $this->sendResponse(new CategoriesResource($category),'Category Updated');

        // $categories = Category::where('category_id', $id)->findOrFail();

        // $validator = Validator::make($request-> all(), [
        //     "CategoryName"=> "required",
        //     "CategoryDescription" => "nullable"
        // ]);
        // if ($validator->fails()) {
        //     return response()->json([$validator->errors()], HttpResponse::HTTP_BAD_REQUEST);
        // }
        // try {
        //     $categories->update($request->all());
        //     $response = [
        //         "message" => "Data Category Updated",
        //         "data" => $categories
        //     ];
        //     return response()->json($response, HttpResponse::HTTP_CREATED);

        // } catch (QueryException $e) {
        //     return response()->json([$e->getMessage()], HttpResponse::HTTP_BAD_REQUEST);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->sendResponse(new CategoriesResource($category),'Category Deleted.');

        // $categories = Category::findOrFail($id);
        // try {
        //     $categories->delete();
        //     $response = [
        //         "message"=> "Data Deleted!",
        //         "data" => $categories
        //     ];
        //     return response()->json($response, HttpResponse::HTTP_OK);
        // } catch (QueryException $e) {
        //     return response()->json([$e->getMessage()], HttpResponse::HTTP_BAD_REQUEST);
        // }
    }
}
