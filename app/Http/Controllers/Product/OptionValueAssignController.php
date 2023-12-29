<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductOption;
use App\Models\Product\ProductOptionValue;
use App\Models\Product\SkuValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionValueAssignController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Product $product, ProductOption $productOption)
    {
        $request->validate([
            "name" => ["required", "unique:product_option_values,name"],
        ]);
        $data = [];
        $data['product_id'] = $product->id;
        $data['product_option_id'] = $productOption->id;
        $data['name'] = $request->input('name');
        $optionValue = ProductOptionValue::create($data);
        return redirect(route('product.products.productOptions.index', compact('product')));


        //
    }
}