<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Utility;
use App\Models\Product\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Product\ProductSkus;
use App\Models\Product\ProductOption;
use App\Models\Product\ProductCategory;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $request->input();

        $query = Product::query();
        $query = $query->with(['skus', 'options', 'categories']);

        if (array_key_exists("categories", $filters)) {
            $categories = explode(',', $request->categories);
            $query = $query->whereHas("categories", function ($query) use ($categories) {
                return $query->whereIn("product_categories.id", $categories);
            });
        }

        $products = $query->latest()->get();
        $productOptions = ProductOption::all();
        $productSkuses = ProductSkus::all();
        $categories = ProductCategory::all();
        if (request()->wantsJson()) {
            return response([
                "data" => $products
            ], 200);
        }
        return view('resources.product.index', compact('products', 'productOptions', 'productSkuses', 'categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('resources.product.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->input());
        $request->validate([
            "name" => ["required", "unique:products,name"],
            "price" => ["required", "numeric"]
        ]);
        $data = [];
        DB::beginTransaction();
        $product = Product::create($request->input());
        $data['product_id'] = $product->id;
        $data['name'] = $product->name;
        $data['price'] = $request->input('price');
        $data['description'] = $request->input('description');
        $productSkus = new ProductSkus();
        $productSkus->fill($data);
        // random string code here withough using a function
        $productSkus->name = 'SKU' . rand(100000, 999999);
        if (request()->hasFile('featured_image')) {
            $productSkus->featured_image = Utility::uploadFile('featured_image');
        }
        $productSkus->save();
        DB::commit();


        if (request()->wantsJson()) {
            return response([
                "data" => $product,
            ], 201);
        }
        return redirect(route('product.products.index'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // dd($product);
        // $productSkus = ProductSkus::where(['product_id' => $product->id])->get();
        // $productOptions = ProductOption::where(['product_id' => $product->id])->get();
        //  dd($productOptions);
        $product->load(['skus.products', 'options.values', 'categories']);
        if (request()->wantsJson()) {
            return response([
                "data" => $product
            ], 200);
        }

        return view('resources.product.show', compact('product'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('resources.product.edit', compact('product'));

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
    public function update(Request $request, Product $product)
    {
        if (request()->wantsJson()) {
            return response([
                "data" => [$product,]
            ], 200);
        }
        $product->update($request->input());
        return redirect("product.products.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Product  $product
     * @param  \App\Models\Product\ProductSkus  $productSkus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (request()->wantsJson()) {
            return response(null, 204);
        }
        $product->delete();
        return redirect("product.products.index");
    }
}
