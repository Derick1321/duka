<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <style>
        #map {
            height: 300px;
            width: 100%;
        }
    </style>


    <div id="map"></div>
    <div class="row">
        <div class="col-lg-4">
            <input type="text" id="latitude" name="latitude" placeholder="latitude" readonly>
        </div>
        <div class="col-lg-4">
            <input type="text" id="longitude" name="longitude" placeholder="longitude" readonly>
        </div>
        <div class="col-lg-4">
            <input type="text" id="zoom" name="zoom" placeholder="zoom" readonly>
        </div>
    </div>

    <script>
        let map;
        let marker;

        longitude = {{ $longitude }};
        latitude = {{ $latitude }};
        zoom = {{ $zoom }}

        latitudeField = document.getElementById('latitude');
        longitudeField = document.getElementById('longitude');
        zoomField = document.getElementById('zoom')

        latitudeField.value = latitude;
        longitudeField.value = longitude;
        zoomField.value = zoom;




        function initMap() {
            const latLng = { lat: latitude, lng: longitude };
            map = new google.maps.Map(document.getElementById("map"), {
                center: latLng,
                zoom: zoom,
            });

            placeMarkerAndPanTo(latLng, map);
            map.addListener("click", (e) => {
                // 3 seconds after the center of the map has changed, pan back to the
                // marker.
                // window.setTimeout(() => {
                // map.panTo(marker.getPosition());
                // }, 3000);
                placeMarkerAndPanTo(e.latLng, map);
                console.log(e)
                latitudeField.value = e.latLng.lat();
                longitudeField.value = e.latLng.lng();
                zoomField.value = map.zoom;
            });

        }

        window.initMap = initMap;

        function placeMarkerAndPanTo(latLng, map) {
            if (marker) {
                marker.setMap(null);
            }

            marker = new google.maps.Marker({
                position: latLng,
                map: map,
            });
            map.panTo(latLng);
        }


    </script>
</div>