<html lang="en">

<!--
    Christofora Diana Yuliawati - 1917051026
    Salsabilla Qurrota A'yuni - 1917051048
    TUGAS 5 PRAKTIKUM SIG.
    May 8, 2021
-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style>
        #mapid {
            height: 50%;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div id="mapid"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3453544912886!2d105.24070861536366!3d-5.36417585517882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c5f60802221d%3A0xac5d5819e12c9bcf!2sUniversity%20of%20Lampung!5e0!3m2!1sen!2sid!4v1620454398899!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</body>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
    var mymap = L.map('mapid').setView([-5.363914149795083, 105.24291875544506], 14);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    var marker = L.marker([-5.363914149795083, 105.24291875544506]).addTo(mymap);

    var circle = L.circle([-5.363914149795083, 105.24291875544506], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(mymap);

    var polygon = L.polygon([
        [-5.360045703694451, 105.24176903607162],[-5.360793475951933, 105.23919723554636],[-5.36480078668096, 105.23734345732474],
        [-5.367243972953914, 105.24273851722572],[-5.371979250941346, 105.23937100747204],[-5.37102000496441, 105.23845304917246],
        [-5.371586488991615, 105.23774751097528],[-5.372523074761455, 105.23719370142264],[-5.373603167853551, 105.23714059639705],
        [-5.373905291510247, 105.236913003408],[-5.374630387536564, 105.23678403406014],[-5.374690812166449, 105.23669299687342],
        [-5.37539324804899, 105.23645023104213],[-5.376065470876703, 105.23642747174543],[-5.376450676936096, 105.23617711942599],
        [-5.378625953330458, 105.23606332294256],[-5.3788449911476475, 105.23616194656152],[-5.378867650227684, 105.23628332947717],
        [-5.379116900052409, 105.23654126817291],[-5.379048922837608, 105.23686748475873],[-5.379177324236965, 105.23811924607631],
        [-5.379290619566849, 105.23873374708678],[-5.3790187107397065, 105.23969722397973],[-5.378663718476974, 105.24194280791917],
        [-5.378958286539401, 105.24254972249742],[-5.378996051665295, 105.24276972903203],[-5.380136557407436, 105.24329319302203],
        [-5.380196981490722, 105.24338423020876],[-5.3817604525852945, 105.24395321265108],[-5.382055019148266, 105.24458288652599],
        [-5.381790664541329, 105.24744297165427],[-5.3805746318958, 105.24735193446755],[-5.379879755006929, 105.24821678774153],
        [-5.379577634372919, 105.24822437417373],[-5.3789809456800315, 105.24844438070836],[-5.378943180553184, 105.24836092995385],
        [-5.378512657941631, 105.24863404151404],[-5.378308726071957, 105.24862645508182],[-5.377432573558135, 105.25058375459662],
        [-5.376941625477502, 105.24997684001838],[-5.376631950330676, 105.2493547525757],[-5.375861538243136, 105.24978717934569],
        [-5.375370588895585, 105.24830782506126],[-5.37396571626804, 105.24880094315606],[-5.373765792773913, 105.24834809913978],
        [-5.372526249545275, 105.2485465796018],[-5.370231857893019, 105.24702584029023],[-5.370537253985568, 105.2468814908633],
        [-5.367465321613401, 105.24582593567891],[-5.367267711398805, 105.24566354257361],[-5.365180025634186, 105.2468958257349],
        [-5.363646724875891, 105.2460764910543],[-5.36128256390787, 105.24301915877521]
    ]).addTo(mymap);

    marker.bindPopup("<b>Universitas Lampung</b><br>Jl. Prof. Dr. Ir. Sumantri Brojonegoro, RW.No: 1, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141").openPopup();
    circle.bindPopup("Universitas Lampung");
    polygon.bindPopup("Kecamatan Gedong Meneng");

    var popup = L.popup()
        .setLatLng([-5.367094423749874, 105.24491162660979])
        .setContent("Gd.Ilmu Komputer Universitas Lampung")
        .openOn(mymap);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }

    mymap.on('click', onMapClick);
</script>

</html>
