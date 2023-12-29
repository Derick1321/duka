<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::withCount(['regions', 'districts', 'wards', 'streets'])->get();
        if (request()->wantsJson()) {
            return response([
                "data" => $countries
            ], 200);
        }
        return view("resources.location.country.index", compact('countries'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("resources.location.country.create"); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "unique:countries,name"]
        ]);
        $country = Country::create($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $country
            ], 201);
        }
        return $this->index();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        if (request()->wantsJson()) {
            return response([
                "data" => $country
            ], 200);
        }
        //
        return view("resources.location.country.show", compact("country"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view("resources.location.country.create", compact('country'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        // return response($request->input(), 400);
        $country->update($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $country
            ], 200);
        }
        return $this->index();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        if (request()->wantsJson()) {
            return response(null, 204);
        }
        return $this->index();
        //
    }
}