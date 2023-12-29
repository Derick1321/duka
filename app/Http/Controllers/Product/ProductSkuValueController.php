<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductOption;
use App\Models\Product\ProductOptionValue;
use App\Models\Product\ProductSkus;
use App\Models\Product\SkuValue;
use Illuminate\Http\Request;

class ProductSkuValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product, ProductSkus $productSku)
    {
        $productOptions = ProductOption::all();
        $productOptionValues = ProductOptionValue::all();
        return view('resources.product.value.create', compact('product', 'productSku', 'productOptions', 'productOptionValues'));  // dd($productSku);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product, ProductSkus $productSku)
    {
        //  dd($request->all());
        // dd($product->id);
        //
        $data = [];
        $data['sku_id'] = $productSku->id;
        $data['product_id'] = $product->id;
        $data['product_option_id'] = $request->input('product_option_id');
        $data['product_option_value_id'] = $request->input('product_option_value_id');
        $productSkuValue = SkuValue::create($data);
        if (request()->wantsJson()) {
            return Response([
                "data" => $productSkuValue
            ], 201);
        }
        return redirect(route(
            'product.products.productSkus.show',
            compact('product', 'productSku')
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, ProductSkus $productSkus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, ProductSkus $productSkus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, ProductSkus $productSkus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, ProductSkus $productSkus)
    {
        //
    }
}