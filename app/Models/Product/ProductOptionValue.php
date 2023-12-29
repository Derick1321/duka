<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_id', 'product_option_id', 'name'];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $latest = ProductOptionValue::latest()->first();

            if (!$latest) {
                $model->id = 1;
                //dd($model->id);
            } else {
                $arr = $latest->id;
                $model->id = $arr + 1;
            }
        });
    }

    public function optionValue()
    {
        return $this->belongsTo(ProductOption::class, 'product_option_id');
    }
}
