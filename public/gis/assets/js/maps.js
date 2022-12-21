
$(document).ready(function() {

    //     $array [a,b,c,d];

    // for i = 0; i < count($array);

    // for j = 0; j < count($array);

    // $array_baru = $array[i].''.$array[j];
        var myStringArray = ["Hello","World","this","fucked","up"];
        var arrayLength = myStringArray.length;
        for (var i = 0; i < arrayLength; i++) {
            for (var j = 0; j < arrayLength; j++) {
                console.log(myStringArray[i]+myStringArray[j]);
            }
        }
        // SETTING MAP
        var map = L.map('map').setView([-1.241563, 116.858613], 14);

        map.addControl(new L.Control.Fullscreen());

        var theMarker = {};
        map.on('click', function(e) {
            // alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng);
            $("#inputlat").val(e.latlng.lng);
            $("#inputlng").val(e.latlng.lat);
            if (theMarker != undefined) {
                map.removeLayer(theMarker);
            };

            theMarker = L.marker([e.latlng.lat,e.latlng.lng]).addTo(map);
        });

        const zoom = 16
        const gmhybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);
        const gmsatellite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);
        const gmterrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);
        const gmstreet = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);

        const gmbaseLayers = {
            'Terrain' : gmterrain,
            'Hybrid' : gmhybrid,
            'Satellite' : gmsatellite,
            'Street' : gmstreet
        };

        L.control.layers(gmbaseLayers).addTo(map);

        // MY LOC
        // SETTING LEGEND
        const legend = L.control({
            position: "bottomleft",
        });

        const div = L.DomUtil.create("div", "legend");
        const colors = ["https://i.ibb.co/p1qf6b8/bts.png", "https://i.ibb.co/VCpL9qp/aksesinternet.png", "https://i.ibb.co/P6FdxzG/terminal.png"];
        const label = ["BTS", "Akses Internet", "Terminal"];

        const rows = [];
        legend.onAdd = function () {
            colors.map((item, index) => {
            rows.push(`
                <div class="row">
                    <img src="${item}" style="width: 45px!important; height: 25px!important; display: inline!important;">${label[index]}
                </div>
            `);
            });
            div.innerHTML = rows.join("");
            return div;
        };

        legend.addTo(map);

        // RULLER
        var jaraklokasi = {
            position: 'topleft',
            lengthUnit: {
              factor: null,    //  from km to nm
              display: 'KM',
              decimal: 2,
              label: 'Jarak'
            }
          };
        L.control.ruler(jaraklokasi).addTo(map);

        var markersLayer = new L.LayerGroup();	//layer contain searched elements
        map.addLayer(markersLayer);
        // Marker Maps BTS
        var firefoxIcon = L.icon({
            iconUrl: 'https://i.ibb.co/p1qf6b8/bts.png',
            iconSize: [36, 45], // size of the icon
        });
        $.getJSON('regularmap/rmap', function(data){
            var kosongan = [];
            const options = {
                steps: 64,
                units: "meters",
                options: {},
            };
            // $array [a,b,c,d];
            // for i = 0; i < count($array);
            // for j = 0; j < count($array);
            // $array_baru = $array[i].''.$array[j];

            // array polygons
            let polygons = [];
            $.each(data, function(index){
                var marker = L.marker([data[index].longitude, data[index].latitude], {nama: data[index].nama, icon: firefoxIcon}).addTo(map);
                markersLayer.addLayer(marker);
                marker.bindPopup(
                    "<p class='text-primary fw-bolder text-uppercase mb-2'>Detail Tower</p>"+
                    "<div class='d-flex'>"+
                        "<img class='me-2 img-rd' src='../../../storage/gis/"+data[index].gambar+"' class='img-fluid' width='75px'>" +
                        "<table>"+
                            "<tbody>"+
                            "<tr>"+
                                "<td class='fw-bold'>Nama</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].nama +"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td class='fw-bold'>Tinggi</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].tinggi_tower +"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td class='fw-bold'>Alamat</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].alamat +"</td>"+
                            "</tr>"+
                            "</tbody>"+
                        "</table>"+
                    "</div>"
                ).on("click", clickZoom).addTo(map);
                function clickZoom(e) {
                    map.setView(e.target.getLatLng(), zoom);
                }
                var circle = L.circle([data[index].longitude, data[index].latitude], {
                    color: 'blue',
                    fillColor: '#0061ff',
                    fillOpacity: 0.5,
                    radius: data[index].radius
                }).addTo(map);
                circle.bindPopup(String(data[index].radius)+'m');

                kosongan.push({lat : parseFloat(data[index].latitude), lng: parseFloat(data[index].longitude), rds: parseFloat(data[index].radius)});
            });
            console.log(kosongan, 'kosongan');
            console.log(polygons, 'poli');


            // set marker, add
            kosongan.map(({ lat, lng, rds }) => {
            const polygon = turf.circle([lat, lng], rds, options);

            // add cirkle polygon to map
            // L.geoJSON(polygon, { color: "blue", weight: 5 }).addTo(map);

            // add object to array
            polygons.push(polygon);
            });

            // get intersection
            const intersections = turf.intersect(...polygons);

            // style intersection
            const intersectionColors = {
                color: "yellow",
                weight: 3,
                opacity: 1,
                fillColor: "yellow",
                fillOpacity: 0.7,
            };
            console.log(intersections, 'intersection');

            // adding an intersection to the map
            // and styling to this element
            L.geoJSON(intersections, { style: intersectionColors }).addTo(map);
        });

        var sfirefoxIcon = L.icon({
            iconUrl: 'https://i.ibb.co/P6FdxzG/terminal.png',
            iconSize: [36, 45], // size of the icons
        });
        $.getJSON('terminal/terminaltitik', function(data){
            $.each(data, function(index){
                // console.log(data[index].radius)
                var marker = L.marker([data[index].longitude, data[index].latitude], {icon: sfirefoxIcon}).addTo(map);
                // markersLayer.addLayer(marker);
                marker.bindPopup(
                    "<p class='text-primary fw-bolder text-uppercase mb-2'>Detail Terminal</p>"+
                    "<div class='d-flex'>"+
                        "<img class='me-2 img-rd' src='../../../storage/gis/"+data[index].gambar+"' class='img-fluid' width='75px'>" +
                        "<table>"+
                            "<tbody>"+
                            "<tr>"+
                                "<td class='fw-bold'>Nama</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].nama +"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td class='fw-bold'>Keterangan</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].keterangan +"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td class='fw-bold'>Alamat</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].alamat +"</td>"+
                            "</tr>"+
                            "</tbody>"+
                        "</table>"+
                    "</div>"
                ).addTo(map);

            });
        });
        var ssfirefoxIcon = L.icon({
            iconUrl: 'https://i.ibb.co/VCpL9qp/aksesinternet.png',
            iconSize: [36, 45], // size of the icon
        });
        $.getJSON('aksesinternet/aksesinternettitik', function(data){
            $.each(data, function(index){
                // console.log(data[index].radius)
                var marker = L.marker([data[index].longitude, data[index].latitude], {icon: ssfirefoxIcon}).addTo(map);
                marker.bindPopup(
                    "<p class='text-primary fw-bolder text-uppercase mb-2'>Detail Akses Interet</p>"+
                    "<div class='d-flex'>"+
                        "<img class='me-2 img-rd' src='../../../storage/gis/"+data[index].gambar+"' class='img-fluid' width='75px'>" +
                        "<table>"+
                            "<tbody>"+
                            "<tr>"+
                                "<td class='fw-bold'>Nama</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].nama +"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td class='fw-bold'>Keterangan</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].keterangan +"</td>"+
                            "</tr>"+
                            "<tr>"+
                                "<td class='fw-bold'>Alamat</td>"+
                                "<td style='width:20px' class='text-center'> : </td>"+
                                "<td>"+ data[index].alamat +"</td>"+
                            "</tr>"+
                            "</tbody>"+
                        "</table>"+
                    "</div>"
                ).addTo(map);

            });
        });

        var controlSearch = new L.Control.Search({
            container: 'carimarker',
            position:'topright',
            propertyName: 'nama',
            layer: markersLayer,
            initial: false,
            zoom: 14,
            marker: false
        });
        map.addControl( controlSearch );

        const optionsLocate = {
            flyTo: true,
            keepCurrentZoomLevel: true,
            returnToPrevBounds: true,
            icon: 'leaflet-control-locate-location-arrow',
        };
        L.control.locate(optionsLocate).addTo(map);

    });

    // var polygon = L.polygon([
    //     [51.509, -0.08],
    //     [51.503, -0.06],
    //     [51.51, -0.047]
    // ]).addTo(map);

    // var popup = L.popup()
    //     .setLatLng([-1.241563, 116.848613])
    //     .setContent("I am a standalone popup.")
    //     .openOn(map);


