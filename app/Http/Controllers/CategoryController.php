<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
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

        $response = [
            "message" => "GET category Data Success",
            "data" => $categories,
        ];
        return response()->json($response, HttpResponse::HTTP_OK);
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
    public function store(StoreCategoryRequest $request)
    {
        $validator = Validator::make($request-> all(), [
            "CategoryName"=> ["required", "string", "100"],
            "CategoryDescription" => ["nullable", "string"]
        ]);
        if ($validator->fails()) {
            return response()->json([$validator->errors()], HttpResponse::HTTP_BAD_REQUEST);
        }
        try {
            $categories = Category::create($request->all());
            $response = [
                "message" => "Data Category Success Added",
                "data" => $categories
            ];
            return response()->json($response, HttpResponse::HTTP_CREATED);

        } catch (QueryException $e) {
            return response()->json([$e->getMessage()], HttpResponse::HTTP_BAD_REQUEST);
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

        $response = [
            "message" => "Data Found!",
            "data" => $categories
        ];
        return response()->json($response, HttpResponse::HTTP_OK);
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
    public function update(UpdateCategoryRequest $request, $id)
    {
        $categories = Category::where('CategoryID', $id)->findOrFail();

        $validator = Validator::make($request-> all(), [
            "CategoryName"=> ["required"],
            "CategoryDescription" => ["required"]
        ]);
        if ($validator->fails()) {
            return response()->json([$validator->errors()], HttpResponse::HTTP_BAD_REQUEST);
        }
        try {
            $categories->update($request->all());
            $response = [
                "message" => "Data Category Updated",
                "data" => $categories
            ];
            return response()->json($response, HttpResponse::HTTP_CREATED);

        } catch (QueryException $e) {
            return response()->json([$e->getMessage()], HttpResponse::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::findOrFail($id);

        try {
            $categories->delete();
            $response = [
                "message"=> "Data Deleted!",
                "data" => $categories
            ];
            return response()->json($response, HttpResponse::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([$e->getMessage()], HttpResponse::HTTP_BAD_REQUEST);
        }
    }
}
