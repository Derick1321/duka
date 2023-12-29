<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['country_id', 'name', 'description', 'latitude', 'longitude', 'zoom'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }

    public function streets()
    {
        return $this->hasMany(Street::class);
    }
}
