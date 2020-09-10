
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Map</title>
    <link rel="stylesheet" href="style.css">
    <script src="test.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2927MI8tG23Ug_lYfB5R5kMJkO05AB-k&callback=initMap&libraries=&v=weekly" defer></script>
</head>
<body>
<div id="right-panel">
    <div id="inputs">
        <dl>
            <dt>Départ</dt>
            <dt>Adresse</dt>
            <div id="output"></div>
            <dd id="start-value">-</dd>
            <dt>Arrivée</dt>
            <dd id="end-value">-</dd>
        </dl>
        <hr>
        <dl>
            <dt>Distance</dt>
            <dd id="distance-value">-</dd>
            <dt>Durée</dt>
            <dd id="time-value">-</dd>
        </dl>
    </div>
</div>
    <div id="map"></div>
</body>
</html>