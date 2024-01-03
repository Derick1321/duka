<x-app-layout>
    <style>
        #map {
            width: 100%;
            height: 90%;
        }

        #regions-map {
            width: 100%;
            height: 300px;
        }
    </style>

    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Country Details</h5>

                        <div class="row">
                            <div class="col-lg-7">
                                <table class="table table-bordered mt-4">
                                    <tr>
                                        <th width="300px">Country</th>
                                        <td>{{ $country->name }}</td>
                                    </tr>
        
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ $country->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Map Zoom</th>
                                        <td>{{ $country->zoom }}</td>
                                    </tr>
                                    <tr>
                                        <th>Latitude</th>
                                        <td>{{ $country->latitude }}</td>
                                    </tr>
                                    <tr>
                                        <th>Longitude</th>
                                        <td>{{ $country->longitude }}</td>
                                    </tr>
                                    <tr>
                                        <th>No of Regions</th>
                                        <td>{{ $country->regions->count() }}</td>
                                    </tr>
        
                                    <tr>
                                        <th>Total Districts</th>
                                        <td>{{ $country->districts->count() }}</td>
                                    </tr>
        
                                    <tr>
                                        <th>Total Wards</th>
                                        <td>{{ $country->wards->count() }}</td>
                                    </tr>
        
                                    <tr>
                                        <th>Total Streets</th>
                                        <td>{{ $country->streets->count() }}</td>
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
                            Regions of {{ $country->name }} in a Map
                       </h5>
                    </div>

                    <div class="card-body">
                        <div id="regions-map"></div>
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
                                Regions of {{ $country->name }}
                           </h5>
                           <a href="{{ route('location.countries.regions.create', ['country' => $country]) }}" class="btn btn-primary mb-2"><i class="mdi mdi-plus me-2"></i> Add
                               Region
                           </a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="table-responsive mt-3">
                            <table class="table table-striped ">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Region Name</th>
                                        <th>No of Districts</th>
                                        <th>Total Wards</th>
                                        <th>Total Streets</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($country->regions as $region)
                                        <tr>
                                            <td>{{ $region->name }}</td>
                                            <td>{{ $region->districts->count() }}</td>
                                            <td>{{ $region->wards->count() }}</td>
                                            <td>{{ $region->streets->count() }}</td>
                                            <td id="tooltip-container0">
                                                <form action="{{ route('location.countries.regions.destroy', ['country' => $country, 'region' => $region]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="btn-group">
                                                        <a href="{{ route('location.countries.regions.show', ['country' => $country, 'region' => $region]) }}"
                                                            class="btn btn-outline-success" title="Edit"><i
                                                                class="mdi mdi-eye"></i></a>
                                                        <a href="{{ route('location.countries.regions.edit', ['country' => $country, 'region' => $region]) }}"
                                                            class="btn btn-outline-primary" title="Edit"><i
                                                                class="mdi mdi-pencil"></i></a>
                                                        <button type="submit"
                                                            class="btn btn-outline-danger" title="Edit"><i
                                                                class="mdi mdi-delete"></i></button>
                                                    </div>
                                                </form>
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
        $regionsJsonString = json_encode($country->regions);
        // dd($regionsJsonString);
    @endphp

    <script>
        let map;
        let map2;
        let marker;

        longitude = {{ $country->longitude }};
        latitude = {{ $country->latitude }};
        zoom = {{ $country->zoom }}
        regions = {!! $regionsJsonString !!};
        console.log(regions);

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

            map2 = new google.maps.Map(document.getElementById("regions-map"), {
                center: latLng,
                zoom: zoom,
            });

            regions.map(region => {
                if (region.latitude && region.longitude) {
                    let regionLatLng = { lat: parseFloat(region.latitude), lng: parseFloat(region.longitude)};
                    new google.maps.Marker({
                        position: regionLatLng,
                        map: map2,
                    });
                }
            });
        }
    </script>
</x-app-layout>
