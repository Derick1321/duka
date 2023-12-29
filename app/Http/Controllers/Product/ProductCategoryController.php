<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategories = ProductCategory::all();
        if (request()->wantsJson()) {
            return Response([
                "data" => $productCategories
            ], 200);
        }
        return view('resources.product.category.index', compact('productCategories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategories = ProductCategory::all();
        return view('resources.product.category.create', compact('productCategories'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "unique:product_categories,name"]
        ]);

        $productCategory = new ProductCategory();
        $productCategory->fill($request->input());
        if (request()->hasFile("featured_image")) {
            //$productCategory->featured_image = Utility::UploadFile($request->input('featured_image'));
        }
        $productCategory->save();
        if (request()->wantsJson()) {
            return Response([
                "data" => $productCategory
            ], 201);
        }
        return $this->index();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        $products = Product::all();
        if (request()->wantsJson()) {
            return Response([
                "data" => $productCategory
            ], 200);
        }
        return view('resources.product.category.show', compact('productCategory', 'products'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $productCategories = ProductCategory::all();
        return view('resources.product.category.create', compact('productCategories', 'productCategory'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $productCategory->fill($request->input());
        if (request()->hasFile("featured_image")) {
            //$productCategory->featured_image = Utility::UploadFile($request->input('featured_image'));
        }
        $productCategory->update();
        if (request()->wantsJson()) {
            return Response([
                "data" => $productCategory
            ], 200);
        }
        return $this->index();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        if (request()->wantsJson()) {
            return Response(204, null);
        }
        return $this->index();
        //
    }
}