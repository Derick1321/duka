<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @isset($shop)
                            <h5 class="mt-3 font-size-16">{{ __('Update shop') }}</h5>
                        @else
                            <h5 class="mt-3 font-size-16">{{ __('New shop') }}</h5>
                        @endisset
                    </div>
                    <div class="card-body"
                        x-data="getState()"
                        x-init="initialize({{ json_encode($countries) }}, {{ json_encode($regions) }}, {{ json_encode($districts) }}, {{ json_encode($wards) }}, {{ json_encode($streets) }}, {{ isset($shop) ? json_encode($shop) : null }})"
                        x-on:google-maps-loaded.window="initMap()">
                                @isset($shop)
                                    <form action="{{ route('location.shops.update', ['shop' => $shop->id]) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('patch')
                                @else
                                    <form action="{{ route('location.shops.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                @endisset
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="">
                                                    <div class="mb-4">
                                                        <x-form.customer-input type="text" name="shop_name"
                                                            label="Shop Name" placeholder="Shop Name"
                                                            value="{{ isset($shop) ? $shop->shop_name : old('name') }}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="">
                                                    <div class="mb-4">
                                                        <x-form.customer-input type="text" name="phone"
                                                                               label="Phone Number" placeholder="Phone Number"
                                                                               value="{{ isset($shop) ? $shop->phone : old('phone') }}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="">
                                                    <div class="mb-4">
                                                        <x-form.customer-input type="text" name="email"
                                                                               label="Email Address" placeholder="Email Address"
                                                                               value="{{ isset($shop) ? $shop->email : old('email') }}" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="">
                                                    <div class="mb-4">
                                                        <label for="" class="label-control">Select Region</label>
                                                        <select name="region_id" id="region_id"
                                                            class="form-control  @error('region_id') is-invalid @enderror"
                                                            x-model="form.region_id">
                                                            <option value="">Choose...</option>
                                                            <template
                                                                x-for="region in regions.filter( u => form.country_id ? form.country_id == u.country_id :true)">
                                                                <option x-bind:value="region.id" x-text="region.name"
                                                                        x-bind:selected="region.id == form.region_id"></option>
                                                            </template>
                                                        </select>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="">
                                                    <div class="mb-4">
                                                        <label for="" class="label-control">Select District</label>
                                                        <select name="district_id" x-model="form.district_id" id="district_id"
                                                            class="form-control  @error('district_id') is-invalid @enderror">
                                                            <option value="">Choose...</option>
                                                            <template
                                                                x-for="district in districts.filter(u => form.region_id ? form.region_id == u.region_id :true)">
                                                                <option x-bind:value="district.id" x-text="district.name"
                                                                    x-bind:selected="district.id == form.district_id"></option>
                                                            </template>
                                                        </select>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="">
                                                    <div class="mb-4">
                                                        <label for="" class="label-control">Select Ward</label>
                                                        <select name="ward_id" x-model="form.ward_id" id="ward_id"
                                                            class="form-control  @error('ward_id') is-invalid @enderror">
                                                            <option value="" x-text="fetchWards.isLoading ? 'Fetching...' : 'Choose...'"></option>
                                                            <template
                                                                x-for="ward in wards.filter(u => form.district_id ? form.district_id == u.district_id :true)">
                                                                <option x-bind:value="ward.id" x-text="ward.name"
                                                                    x-bind:selected="ward.id == form.ward_id"></option>
                                                            </template>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="">
                                                    <div class="mb-4">
                                                        <label for="" class="label-control">Select Street</label>
                                                        <select name="street_id" x-model="form.street_id" id="street_id"
                                                            class="form-control  @error('street_id') is-invalid @enderror">
                                                            <option value="" x-text="fetchStreets.isLoading ? 'Fetching...' : 'Choose...'"></option>
                                                            <template
                                                                x-for="street in streets.filter( u => form.ward_id ? form.ward_id == u.ward_id && form.region_id==u.region_id:true)">
                                                                <option x-bind:value="street.id" x-text="street.name"
                                                                    x-bind:selected="street.id == form.street_id"></option>

                                                            </template>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div>
                                           
                                        </div>

                                        <div class="col-lg-6">
                                            <div id="map" style="background-color: rgb(119, 119, 104); height: 100% width: 100%;"></div>
                                            <x-form.coordinates-input
                                                    latitude="{{ isset($shop) ? $shop->latitude : old('latitude') }}"
                                                    longitude="{{ isset($shop) ? $shop->longitude : old('longitude') }}"
                                                    zoom="{{ isset($shop) ? $shop->zoom : old('zoom') }}"
                                                />
                                        </div>
                                    </div>

                                    <hr />
                                    <div>
                                        @isset($shop)
                                            <div class="float-end"><button type="submit" class="btn btn-primary">Update
                                                    Info<i class="mdi mdi-arrow-right ms-1"></i></button></div>
                                        @else
                                            <div class="float-end"><button type="submit" class="btn btn-success">Save
                                                    Info<i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </div>
                                        @endisset
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <script>
        function initializeMap(latitude, longitude, zoom) {
            const latLng = { lat: parseFloat(latitude), lng: parseFloat(longitude) };
            const map = new google.maps.Map(document.getElementById("map"), {
                center: latLng,
                zoom: parseFloat(zoom),
            });
        }

        function getState() {
            return {
                map: null,
                countries: [],
                regions: [],
                districts: [],
                wards: [],
                form: {
                    country_id: "",
                    region_id: "",
                    district_id: "",
                    ward_id: "",
                    street_id: ""
                },
                streets: [],
                fetchWards: { isLoading: false },
                fetchStreets: { isLoading: false },
                initialize(countries, regions, districts, wards, streets, shop) {
                    this.countries = countries;
                    this.regions = regions;
                    this.districts = districts;
                    this.wards = wards;
                    this.streets = streets;
                    this.form = {
                        country_id: shop ? shop.country.id : "",
                        region_id: shop ? shop.region.id : "",
                        district_id: shop ? shop.district.id : "",
                        ward_id: shop ? shop.ward.id : "",
                        street_id: shop ? shop.street.id : ""
                    };

                    if (shop && this.form.district_id) {
                        this.fetchWardsQuery(this.form.district_id);
                    }

                    if (shop && this.form.ward_id) {
                        this.fetchStreetsQuery(this.form.ward_id);
                    }
                },
                initMap() {
                    initializeMap(this.form.latitude, this.form.longitude, this.form.zoom);
                },
                fetchWardsQuery(district_id) {
                    this.fetchWards.isLoading = true;
                    fetchWards(district_id).then(res => {
                        this.fetchWards.isLoading = false;
                        this.wards = res.data;
                    }).catch(error => this.fetchWards.isLoading = false);
                },
                fetchStreetsQuery(ward_id) {
                    this.fetchStreets.isLoading = true;
                    fetchStreets(ward_id).then(res => {
                        this.fetchStreets.isLoading = false;
                        this.streets = res.data;
                    }).catch(error => this.fetchStreets.isLoading = false);
                },
            };
        }

        async function fetchWards(district_id) {
            const url = new URL("{{ route("api.wards.index") }}");
            url.searchParams.append("district_id", district_id);
            const res = await fetch(url.href, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                }
            });

            return res.json();
        }

        async function fetchStreets(ward_id) {
            const url = new URL("{{ route("api.streets.index") }}");
            url.searchParams.append("ward_id", ward_id);
            const res = await fetch(url.href, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                }
            });

            return res.json();
        }

        // Trigger the initMap function when Google Maps is loaded
        document.addEventListener('google-maps-loaded', () => {
            getState().initMap();
        });
    </script>
</x-app-layout>


    
