<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all()::join('categories', 'products.CategoryID', '=', 'categories.CategoryID')->get();

        $products = Product::with("category")->get();


        $response = [
            "message" => "GET Products Data success",
            "data"=> $products
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validator = Validator::make($request->all(), [
            "ProductName" => ["required"],
            "ProductDescription"=> ["required"],
            "ProductPrice"=> ["required", "numeric"],
            "CategoryID"=> ["required"],
            "ProductImageURL"=> ["required"],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), HttpResponse::HTTP_BAD_REQUEST);
        }
        try {
            $product = Product::create($request->all());
            $response = [
                "message" => "Data Product Success Added",
                "data"=> $product,
            ];
            return response()->json($response, HttpResponse::HTTP_CREATED);
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(), HttpResponse::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
        $response = [
            "message"=> "Data Found!",
            "data"=> $products,
        ];
        return response()->json($response, HttpResponse::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $products = Product::where($request->all())->findOrFail($id);

        $validator = Validator::make($request->all(), [
            "ProductName" => ["required"],
            "ProductDescription"=> ["required"],
            "ProductPrice"=> ["required", "numeric"],
            "CategoryID"=> ["required"],
            "ProductImageURL"=> ["required"],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), HttpResponse::HTTP_BAD_REQUEST);
        }
        try {
            $products->update($request->all());
            $response = [
                "message" => "Data Product Success Added",
                "data"=> $products,
            ];
            return response()->json($response, HttpResponse::HTTP_CREATED);
        }
        catch (QueryException $e) {
            return response()->json($e->getMessage(), HttpResponse::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::findOrFail($id);

        try {
            $products->delete();
            $response = [
                "message"=> "Product Delete!",
                "data"=> $products,
            ];
            return response()->json($response, HttpResponse::HTTP_NO_CONTENT);
        }
        catch(QueryException $e) {
            return response()->json($e->getMessage(), HttpResponse::HTTP_BAD_REQUEST);
        }

    }
}
