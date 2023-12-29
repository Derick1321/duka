<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use Illuminate\Http\Request;

class AssignProductCategory extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ProductCategory $productCategory)
    {
        $productCategory->product()->sync($request->input('product_id'));
        return redirect(route('product.productCategories.show', compact('productCategory')));
        //
    }
}