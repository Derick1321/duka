<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductOption;
use App\Models\Product\ProductSkus;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $productSkus = ProductSkus::where(['product_id' => $product->id])->get();
        $productOptions = ProductOption::where(['product_id' => $product->id])->get();
        if (request()->wantsJson()) {
            return Response([
                "data" => [$productSkus, $productOptions]
            ], 200);
        }
        return redirect(route('product.products.show', compact('productSkus', 'productOptions', 'product')));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('resources.product.option.create', compact('product'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $request->validate([
            "name" => ["required", "unique:product_options,name"],
            // "product_id" => ["required"]
        ]);
        $data = [];
        $data['name'] = $request->input('name');
        $data['product_id'] = $product->id;
        $productOption = ProductOption::create($data);
        if (request()->wantsJson()) {
            return Response([
                "data" => $productOption
            ], 201);
        }
        return $this->index($product);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductOption  $productOption
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, ProductOption $productOption)
    {
        if (request()->wantsJson()) {
            return response([
                "data" => [$product, $productOption]
            ], 200);
        }

        return view('resources.product.option.show', compact('product', 'productOption'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductOption  $productOption
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, ProductOption $productOption)
    {
        return view('resources.product.option.create', compact('product', 'productOption'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductOption  $productOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, ProductOption $productOption)
    {
        if (request()->wantsJson()) {
            return response([
                "data" => [$product, $productOption]
            ], 200);
        }
        $productOption->update($request->input());
        return $this->index($product);


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductOption  $productOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, ProductOption $productOption)
    {
        if (request()->wantsJson()) {
            return response(null, 204);
        }
        $productOption->delete();
        return $this->index($product);
        //
    }
}