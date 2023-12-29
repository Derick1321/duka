<?php

namespace App\Http\Controllers\Location\Country\Region\District;

use App\Http\Controllers\Controller;
use App\Models\Location\Country;
use App\Models\Location\District;
use App\Models\Location\Region;
use App\Models\Location\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Location\District  $district
     * @return \Illuminate\Http\Response
     */
    public function index(Country $country, Region $region, District $district)
    {
        //
        return view("resources.location.country.region.district.show", compact('country', 'region', 'district'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Location\District  $district
     * @return \Illuminate\Http\Response
     */
    public function create(Country $country, Region $region, District $district)
    {
        //
        return view("resources.location.country.region.district.ward.form", compact("country", "region", "district"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\District  $district
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Country $country, Region $region, District $district)
    {
        //
        //
        $request->merge([
            'country_id' => $country->id,
            'region_id' => $region->id,
            "district_id" => $district->id,
        ]);
        $request->validate([
            "name" => ["required", "unique:wards,name"],
        ]);

        // dd($request->all());
        $ward = Ward::create($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $ward
            ], 201);
        }

        return redirect(route("location.countries.regions.districts.wards.index", ['country' => $country, 'region' => $region, 'district' => $district]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location\District  $district
     * @param  \App\Models\Location\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country, Region $region, District $district, Ward $ward)
    {
        //
        // dd($ward->streets);
        return view("resources.location.country.region.district.ward.show", compact("country", "region", "district", "ward"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\District  $district
     * @param  \App\Models\Location\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country, Region $region, District $district, Ward $ward)
    {
        //
        return view("resources.location.country.region.district.ward.form", compact("country", "region", "district", "ward"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\District  $district
     * @param  \App\Models\Location\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country, Region $region, District $district, Ward $ward)
    {
        //
        $request->merge([
            'country_id' => $country->id,
            'region_id' => $region->id,
            "district_id" => $district->id,
        ]);
        $request->validate([
            "name" => ["exclude_if:name,{$ward->name}", "required", "unique:wards,name"],
        ]);

        // dd($request->all());
        $ward->update($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $region
            ], 200);
        }

        return redirect(route("location.countries.regions.districts.wards.index", ['country' => $country, 'region' => $region, 'district' => $district]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\District  $district
     * @param  \App\Models\Location\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country, Region $region, District $district, Ward $ward)
    {
        //
    }
}
