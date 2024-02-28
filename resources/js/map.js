// resources/js/map.js

import mapboxgl from 'mapbox-gl';

document.addEventListener('DOMContentLoaded', () => {
    mapboxgl.accessToken = 'pk.eyJ1IjoieWthcGl0YW4yMjQxIiwiYSI6ImNscXh6em54ODBoZmcybG1pNG93ODQ3N2QifQ.EUuD--FoN_l_a4Axh18Ptw';

    const mymap = new mapboxgl.Map({
        container: 'mapid',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-7.12345, 112.34567],
        zoom: 13
    });

    // Ambil data lokasi dari server
    fetch('/getLocations')
        .then(response => response.json())
        .then(locations => {
            // Tampilkan marker untuk setiap lokasi
            locations.forEach(location => {
                new mapboxgl.Marker()
                    .setLngLat([location.longitude, location.latitude])
                    .setPopup(new mapboxgl.Popup().setHTML(`<b>${location.nama_tps}</b><br>${location.alamat}`))
                    .addTo(mymap);
            });
        });
});
