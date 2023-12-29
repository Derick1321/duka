<?php

namespace App\Http\Controllers\Location\Country\Region\District\Ward;

use App\Http\Controllers\Controller;
use App\Models\Location\Country;
use App\Models\Location\District;
use App\Models\Location\Region;
use App\Models\Location\Street;
use App\Models\Location\Ward;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Country $country, Region $region, District $district, Ward $ward)
    {
        //
        return view("resources.location.country.region.district.ward.show", compact("country", "region", "district", "ward"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Country $country, Region $region, District $district, Ward $ward)
    {
        //
        return view("resources.location.country.region.district.ward.street.form", compact("country", "region", "district", "ward"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Country $country, Region $region, District $district, Ward $ward)
    {
        //
        $request->merge([
            'country_id' => $country->id,
            'region_id' => $region->id,
            "district_id" => $district->id,
            "ward_id" => $ward->id,
        ]);
        $request->validate([
            "name" => ["required", "unique:streets,name"],
        ]);

        // dd($request->all());
        $street = Street::create($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $street
            ], 201);
        }

        return redirect(route("location.countries.regions.districts.wards.streets.index", ['country' => $country, 'region' => $region, 'district' => $district, 'ward' => $ward]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country, Region $region, District $district, Ward $ward, Street $street)
    {
        //
        return view("resources.location.country.region.district.ward.street.show", compact("country", "region", "district", "ward", "street"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country, Region $region, District $district, Ward $ward, Street $street)
    {
        //
        return view("resources.location.country.region.district.ward.street.form", compact("country", "region", "district", "ward", "street"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country, Region $region, District $district, Ward $ward, Street $street)
    {
        //
        $request->merge([
            'country_id' => $country->id,
            'region_id' => $region->id,
            "district_id" => $district->id,
            "ward_id" => $ward->id,
        ]);
        $request->validate([
            "name" => ["exclude_if:name,{$street->name}", "required", "unique:streets,name"],
        ]);

        // dd($request->all());
        $street->update($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $street
            ], 200);
        }

        return redirect(route("location.countries.regions.districts.wards.streets.index", ['country' => $country, 'region' => $region, 'district' => $district, 'ward' => $ward, 'street' => $street]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\Street  $street
     * @return \Illuminate\Http\Response
     */
    public function destroy(Street $street)
    {
        //
    }
}
