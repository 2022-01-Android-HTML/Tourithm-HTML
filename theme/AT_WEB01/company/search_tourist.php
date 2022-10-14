<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<style>
#map {
  height: 100%;
}

/*
 * Optional: Makes the sample page fill the window.
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>

<!DOCTYPE html>
<html>
  <head>
    <title>Basic Map Types</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
  </head>
  <body>
    <div id="map"></div>

    <!--
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>

<script>
let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

window.initMap = initMap;
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
