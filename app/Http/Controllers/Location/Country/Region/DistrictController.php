<?php

namespace App\Http\Controllers\Location\Country\Region;

use App\Http\Controllers\Controller;
use App\Models\Location\Country;
use App\Models\Location\District;
use App\Models\Location\Region;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Location\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function index(Country $country, Region $region)
    {
        // 

        return view('resources.location.country.region.show', compact("country", 'region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Location\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function create(Country $country, Region $region)
    {
        //
        return view('resources.location.country.region.district.form', compact('country', 'region'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Country $country, Region $region)
    {
        //
        $request->merge([
            'country_id' => $country->id,
            'region_id' => $region->id
        ]);
        $request->validate([
            "name" => ["required", "unique:districts,name"],
        ]);

        // dd($request->all());
        $district = District::create($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $district
            ], 201);
        }

        return redirect(route("location.countries.regions.districts.index", ['country' => $country, 'region' => $region]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location\Region  $region
     * @param  \App\Models\Location\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country, Region $region, District $district)
    {
        //
        return view("resources.location.country.region.district.show", compact('country', 'region', 'district'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\Region  $region
     * @param  \App\Models\Location\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country, Region $region, District $district)
    {
        //
        return view('resources.location.country.region.district.form', compact('country', 'region', 'district'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Region  $region
     * @param  \App\Models\Location\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country, Region $region, District $district)
    {
        //
        $request->merge([
            'country_id' => $country->id,
            'region_id' => $region->id,
        ]);
        $request->validate([
            "name" => ["exclude_if:name,{$district->name}", "required", "unique:districts,name"],
        ]);

        // dd($request->all());
        $district->update($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $region
            ], 200);
        }

        return redirect(route("location.countries.regions.districts.index", ['country' => $country, 'region' => $region]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\Region  $region
     * @param  \App\Models\Location\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region, District $district)
    {
        //
    }
}
