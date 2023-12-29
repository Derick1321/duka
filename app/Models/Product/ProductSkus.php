<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductSkus extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['id', 'name', 'product_id', 'price', 'featured_image', 'description'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $latest = ProductSkus::latest()->first();
            if (!$latest) {
                $model->id = 1;
            } else {
                $arr = $latest->id;
                $model->id = $arr + 1;
            }
        });
    }


    protected function featuredImage(): Attribute
    {
        return Attribute::make(fn ($val) => $val ? Storage::url($val) : '');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function values()
    {
        return $this->hasMany(SkuValue::class, "sku_id");
    }
}
