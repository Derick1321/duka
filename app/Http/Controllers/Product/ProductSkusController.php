<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Utility;
use App\Models\Product\Product;
use App\Models\Product\ProductOption;
use App\Models\Product\ProductSkus;
use Illuminate\Http\Request;

class ProductSkusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $productSkus = ProductSkus::where(['product_id' => $product->id])->with('products')->get();
        $productOptions = ProductOption::where(['product_id' => $product->id])->with('productOptionVal', 'optionValue', 'values')->get();
        if (request()->wantsJson()) {
            return response([
                "data" => [$productOptions, $productSkus]
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
        return view('resources.product.skus.create', compact('product'));
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
            "name" => ["required", "unique:product_skuses,name"],
        ]);
        $data = [];
        $productSkus = new ProductSkus();
        $data['product_id'] = $product->id;
        $data['name'] = $request->input('name') ?? 'SKU' . rand(100000, 999999);;
        $data['price'] = $request->input('price');
        $data['description'] = $request->input('description');
        $productSkus->fill($data);

        if (request()->hasFile('featured_image')) {
            $productSkus->featured_image = Utility::UploadFile('featured_image');
        }

        $productSkus->save();
        if (request()->wantsJson()) {
            return response([
                "data" => $productSkus
            ], 201);
        }

        return $this->index($product);


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, ProductSkus $productSku)
    {
        //$productSkus = ProductSkus::where(['product_id' => $product->id])->get();
        //  dd($product);
        // dd($productSku);
        if (request()->wantsJson()) {
            return response([
                "data" => [$product, $productSku]
            ], 200);
        }
        return view('resources.product.skus.show', compact('product', 'productSku'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, ProductSkus $productSku)
    {

        return view('resources.product.skus.create', compact('product', 'productSku'));
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
    public function update(Request $request, Product $product, ProductSkus $productSku)
    {
        $productSku->fill($request->input());
        if (request()->hasFile('featured_image')) {
            $productSku->featured_image = Utility::UploadFile('featured_image');
        }
        $productData = $productSku->update();
        if (request()->wantsJson()) {
            return response([
                "data" => $productData
            ], 200);
        }
        return $this->index($product);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, ProductSkus $productSku)
    {
        $productSku->delete();
        if (request()->wantsJson()) {
            return response(null, 204);
        }
        return $this->index($product);

        //
    }
}