<?php

namespace App\Models\Product;

use App\Models\Location\Shop;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'shop_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
    // public function caterogry()
    // {
    //     return $this->belongsToMany(ProductCategory::class, 'product_have_categories', 'product_id', 'category_id');
    // }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product_have_categories', 'product_id', 'category_id');
    }

    public function skus()
    {
        return $this->hasMany(ProductSkus::class, "product_id");
    }

    public function options()
    {
        return $this->hasMany(ProductOption::class, "product_id");
    }
}
