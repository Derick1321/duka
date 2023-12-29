<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ward extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['country_id', 'region_id', 'district_id', 'name', 'description', 'latitude', 'longitude', 'zoom'];

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
        return $this->belongsTo(District::class, "district_id");
    }

    public function streets()
    {
        return $this->hasMany(Street::class);
    }
}
