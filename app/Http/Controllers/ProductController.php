<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Validator;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator;

class ProductController extends BaseAPIController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all()::join('categories', 'products.CategoryID', '=', 'categories.CategoryID')->get();

        $products = Product::query()->paginate(10);

        // return $products;

        return $this->sendResponse(ProductResource::collection($products), 'Product Data Fetched.');

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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "product_name" => "required",
            "product_description"=> "required",
            "product_price"=> ["required", "numeric"],
            "category_id"=> ["required"],
            "product_image_url"=> ["required"],
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), $validator->errors()->first(), 402);
        }
        try {
            $newID = UniqueIdGenerator::generate(['table' => 'products', 'field' => 'product_id', 'length' => 10, 'prefix' => 'P-']);

            $requestData = $request->all();
            $requestData["product_id"] = $newID;

            $product = Product::create($requestData);

            return $this->sendResponse(new ProductResource($product), "Product data added.");

            // return response()->json($response, HttpResponse::HTTP_CREATED);
        }
        catch (\Exception $e) {
            return $this->sendError($e->getMessage(), "Error");
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
        // $products = Product::findOrFail($id);
        // $response = [
        //     "message"=> "Data Found!",
        //     "data"=> $products,
        // ];
        // return response()->json($response, HttpResponse::HTTP_OK);

        $products = Product::query()->find($id);

        // return $products;

        return $this->sendResponse(new ProductResource($products), 'Product Data Fetched.');

        $response = [
            "message" => "GET Products Data success",
            "data"=> $products
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
    public function update(Request $request, Product $product)
    {
        // $products = Product::where($request->all())->findOrFail($id);
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            "product_name" => "required",
            "product_description"=> "required",
            "product_price"=> ["required", "numeric"],
            "category_id"=> ["required"],
            "product_image_url"=> ["required"],
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), $validator->errors()->first(), 402);
        }
        try {
            $product->product_name = $input["product_name"];
            $product->product_description = $input["product_description"];
            $product->product_price = $input["product_price"];
            $product->product_image_url = $input["product_image_url"];
            $product->save();

            return $this->sendResponse(new ProductResource($product),"Product Updated.");
        }
        catch (QueryException $e) {
            return $this->sendError($e->getMessage(), $e->getCode(), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        try {
            $product->delete();
            return $this->sendResponse(new ProductResource($product),"Product Deleted.");
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), $e->getCode(), 400);
        }

    }
}
