<x-app-layout>
    <style>
        #map {
            width: 100%;
            height: 90%;
        }

        #items-map {
            width: 100%;
            height: 300px;
        }
    </style>

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">District Details</h5>

                        <div class="row">
                            <div class="col-lg-7">
                                <table class="table table-bordered mt-4">
                                    <tr>
                                        <th width="300px">Country</th>
                                        <td>{{ $region->country->name }}</td>
                                    </tr>

                                    <tr>
                                        <th width="300px">Region</th>
                                        <td>{{ $region->name }}</td>
                                    </tr>

                                    <tr>
                                        <th width="300px">District</th>
                                        <td>{{ $district->name }}</td>
                                    </tr>
        
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ $district->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Map Zoom</th>
                                        <td>{{ $district->zoom }}</td>
                                    </tr>
                                    <tr>
                                        <th>Latitude</th>
                                        <td>{{ $district->latitude }}</td>
                                    </tr>
                                    <tr>
                                        <th>Longitude</th>
                                        <td>{{ $district->longitude }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th>No of Regions</th>
                                        <td>{{ $region->regions->count() }}</td>
                                    </tr> --}}
        
                                    {{-- <tr>
                                        <th>Total Districts</th>
                                        <td>{{ $region->districts->count() }}</td>
                                    </tr> --}}
        
                                    <tr>
                                        <th>Total Wards</th>
                                        <td>{{ $district->wards->count() }}</td>
                                    </tr>
        
                                    <tr>
                                        <th>Total Streets</th>
                                        <td>{{ $district->streets->count() }}</td>
                                    </tr>
        
                                </table>
                            </div>

                            <div class="col-lg-5">
                                <div class="mt-4"></div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-3 font-size-16 flex-grow-1">
                            {{-- {{ __('Country') }} --}}
                            Wards of {{ $district->name }} in a Map
                       </h5>
                    </div>

                    <div class="card-body">
                        <div id="items-map"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <h5 class="mt-3 font-size-16 flex-grow-1">
                                {{-- {{ __('Country') }} --}}
                                Wards of {{ $district->name }}
                           </h5>
                           <a href="{{ route('location.countries.regions.districts.wards.create', ['country' => $country, 'region' => $region, 'district' => $district]) }}" class="btn btn-primary mb-2"><i class="mdi mdi-plus me-2"></i> Add
                               Ward
                           </a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="table-responsive mt-3">
                            <table class="table table-striped ">
                                <thead class="thead-light">
                                    <tr>
                                        <th>District Name</th>
                                        <th>Total Streets</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($district->wards as $ward)
                                        <tr>
                                            <td>{{ $ward->name }}</td>
                                            <td>{{ $district->streets->count() }}</td>
                                            <td id="tooltip-container0">

                                                <div class="btn-group">
                                                    <a href="{{ route('location.countries.regions.districts.wards.show', ['country' => $country, 'region' => $region, 'district' => $district, 'ward' => $ward]) }}"
                                                        class="btn btn-outline-success" title="Edit"><i
                                                            class="mdi mdi-eye"></i></a>
                                                    <a href="{{ route('location.countries.regions.districts.wards.edit', ['country' => $country, 'region' => $region, 'district' => $district, 'ward' => $ward]) }}"
                                                        class="btn btn-outline-primary" title="Edit"><i
                                                            class="mdi mdi-pencil"></i></a>
                                                    {{-- <a href="{{ route('location.countries.edit', ['country' => $country]) }}"
                                                        class="btn btn-outline-danger" title="Edit"><i
                                                            class="mdi mdi-delete"></i></a> --}}
                                                </div>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @php
        $itemsJsonString = json_encode($district->wards);
        // dd($regionsJsonString);
    @endphp

    <script>
        let map;
        let map2;
        let marker;

        longitude = {{ $district->longitude }};
        latitude = {{ $district->latitude }};
        zoom = {{ $district->zoom }}
        items = {!! $itemsJsonString !!};


        function initMap() {
            const latLng = { lat: latitude, lng: longitude };
            map = new google.maps.Map(document.getElementById("map"), {
                center: latLng,
                zoom: zoom,
            });

            marker = new google.maps.Marker({
                position: latLng,
                map: map,
            });
            map.panTo(latLng);

            map2 = new google.maps.Map(document.getElementById("items-map"), {
                center: latLng,
                zoom: zoom,
            });

            items.map(item => {
                if (item.latitude && item.longitude) {
                    let itemLatLng = { lat: parseFloat(item.latitude), lng: parseFloat(item.longitude)};
                    new google.maps.Marker({
                        position: itemLatLng,
                        map: map2,
                    });
                }
            });
        }
    </script>
</x-app-layout>
