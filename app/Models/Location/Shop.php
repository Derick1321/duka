<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['country_id', 'region_id', 'district_id', 'ward_id', 'street_id', 'latitude', 'longitude', 'zoom', 'shop_name', 'code', 'description'];

    protected $with = ['street', 'country', 'region', 'district', 'ward'];



    public function street()
    {
        return $this->belongsTo(Street::class, 'street_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }

    public function getLocationAttribute()
    {
        return $this->region->name . " " . $this->district->name;
    }
}
