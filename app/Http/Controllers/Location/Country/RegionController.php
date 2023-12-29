<?php

namespace App\Http\Controllers\Location\Country;

use App\Http\Controllers\Controller;
use App\Models\Location\Country;
use App\Models\Location\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Location\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function index(Country $country)
    {
        //
        return view('resources.location.country.show', compact("country"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Location\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function create(Country $country)
    {
        //
        return view('resources.location.country.region.form', compact("country"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Country $country)
    {
        //
        // dd($request->all());
        $request->merge(['country_id' => $country->id]);
        $request->validate([
            "name" => ["required", "unique:regions,name"],
        ]);

        // dd($request->all());
        $region = Region::create($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $region
            ], 201);
        }

        return redirect(route("location.countries.regions.index", ['country' => $country]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location\Country  $country
     * @param  \App\Models\Location\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country, Region $region)
    {
        //
        return view('resources.location.country.region.show', compact("country", "region"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\Country  $country
     * @param  \App\Models\Location\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country, Region $region)
    {
        //
        return view('resources.location.country.region.form', compact("country", "region"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Country  $country
     * @param  \App\Models\Location\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country, Region $region)
    {
        //
        $request->merge(['country_id' => $country->id]);
        $request->validate([
            "name" => ["exclude_if:name,{$region->name}", "required", "unique:regions,name"],
        ]);

        // dd($request->all());
        $region->update($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $region
            ], 200);
        }

        return redirect(route("location.countries.regions.index", ['country' => $country]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\Country  $country
     * @param  \App\Models\Location\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country, Region $region)
    {
        //
        foreach ($region->districts as $district) {
            foreach ($district->wards as $ward) {
                foreach ($ward->streets as $street) {
                    $street->delete();
                }
                $ward->delete();
            }
            $district->delete();
        }
        $region->delete();

        return redirect(route("location.countries.regions.index", ['country' => $country]));
    }
}
