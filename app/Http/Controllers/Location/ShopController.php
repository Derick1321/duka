<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\Location\Shop;
use App\Models\Location\Country;
use App\Models\Location\District;
use App\Models\Location\Region;
use App\Models\Location\Street;
use App\Models\Location\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $filters = $request->input();

        $query = Shop::query()->select("*");

        if (array_key_exists("country_id", $filters)) {
            $query = $query->where("country_id", $filters["country_id"]);
        }

        if (array_key_exists("region_id", $filters)) {
            $query = $query->where("region_id", $filters["region_id"]);
        }

        if (array_key_exists("district_id", $filters)) {
            $query = $query->where("district_id", $filters["district_id"]);
        }

        if (array_key_exists("ward_id", $filters)) {
            $query = $query->where("ward_id", $filters["ward_id"]);
        }

        if (array_key_exists("street_id", $filters)) {
            $query = $query->where("ward_id", $filters["ward_id"]);
        }

        if (array_key_exists("latitude", $filters) && array_key_exists("longitude", $filters)) {
            $latitude = $filters['latitude'];
            $longitude = $filters['longitude'];
            $query = $query->addSelect(DB::raw("(3959 * acos(cos( radians($latitude)) * cos(radians(shops.latitude)) * cos( radians( shops.longitude ) - radians($longitude) ) + sin(radians($latitude)) * sin(radians( shops.latitude)))) as distance"))
                ->orderBy("distance");
        }

        $shops = $query->get();

        if (request()->wantsJson()) {
            return response([
                "data" => $shops
            ], 200);
        }
        return view("resources.location.shop.index", compact('shops'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $regions = Region::all();
        $districts = District::all();

        $wards = Ward::all();
        $streets = Street::all();
        return view("resources.location.shop.create", compact('countries', 'regions', 'districts', 'wards', 'streets'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        if ($request->input("region_id")) {
            $region = Region::find($request->input("region_id"));
            $request->merge([
                "country_id" => $region->country_id,
            ]);
        }
        $request->validate([
            'shop_name' => "required",
            'country_id' => "required",
            'region_id' => "required",
            'district_id' => "required",
            //            "ward_id" => "required",
            //            "street_id" => "required",
        ]);
        //dd($request->all());

        $shop = Shop::create($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $shop
            ], 201);
        }


        //
        return redirect(route("location.shops.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        if (request()->wantsJson()) {
            return response([
                "data" => $shop
            ], 200);
        }

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        $countries = Country::all();
        $regions = Region::all();
        $districts = District::all();
        $streets = [];
        $wards = [];

        return view("resources.location.shop.create", compact('countries', 'regions', 'districts', 'streets', 'wards',  'shop')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $shop->update($request->input());
        if (request()->wantsJson()) {
            return response([
                "data" => $shop
            ], 200);
        }
        return redirect(route("location.shops.index"));
        //
    }


    public function destroy(Shop $shop)
    {
        $shop->delete();
        if (request()->wantsJson()) {
            return response(null, 204);
        }
        return redirect(route("location.shops.index"));
        //
    }
}
