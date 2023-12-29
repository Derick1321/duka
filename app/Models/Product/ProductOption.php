<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOption extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['id', 'name', 'product_id'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $latest = ProductOption::latest()->first();
            if (!$latest) {
                $model->id = 1;
            } else {
                $arr = $latest->id;
                $model->id = $arr + 1;
            }
        });
    }


    public function productOptionVal()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function optionValue()
    {
        return $this->hasMany(ProductOptionValue::class);
    }

    public function values()
    {
        return $this->hasMany(ProductOptionValue::class, 'product_option_id');
    }
}
