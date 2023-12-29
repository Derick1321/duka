<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkuValue extends Model
{
    use HasFactory;

    protected $fillable = ['sku_id', 'product_id', 'product_option_id', 'product_option_value_id'];

    public function sku()
    {
        return $this->belongsTo(ProductSkus::class, "sku_id");
    }

    public function product()
    {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function productOption()
    {
        return $this->belongsTo(ProductOption::class, "product_option_id");
    }

    public function productOptionValue()
    {
        return $this->belongsTo(ProductOptionValue::class, "product_option_value_id");
    }
}
