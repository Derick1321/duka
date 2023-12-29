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
                        <h5 class="card-title">Ward Details</h5>

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
                                        <th width="300px">Ward</th>
                                        <td>{{ $ward->name }}</td>
                                    </tr>

                                    <tr>
                                        <th width="300px">Street</th>
                                        <td>{{ $street->name }}</td>
                                    </tr>
        
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ $street->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Map Zoom</th>
                                        <td>{{ $street->zoom }}</td>
                                    </tr>
                                    <tr>
                                        <th>Latitude</th>
                                        <td>{{ $street->latitude }}</td>
                                    </tr>
                                    <tr>
                                        <th>Longitude</th>
                                        <td>{{ $street->longitude }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th>No of Regions</th>
                                        <td>{{ $region->regions->count() }}</td>
                                    </tr> --}}
        
                                    {{-- <tr>
                                        <th>Total Districts</th>
                                        <td>{{ $region->districts->count() }}</td>
                                    </tr> --}}
        
                                    {{-- <tr>
                                        <th>Total Wards</th>
                                        <td>{{ $district->wards->count() }}</td>
                                    </tr> --}}
        
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

    </div>

    @php
        $itemsJsonString = json_encode([]);
        // dd($regionsJsonString);
    @endphp

    <script>
        let map;
        let map2;
        let marker;

        longitude = {{ $street->longitude }};
        latitude = {{ $street->latitude }};
        zoom = {{ $street->zoom }}
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
