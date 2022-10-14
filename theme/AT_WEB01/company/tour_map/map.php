<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png"><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <h3 class="wow fadeInDown">TOURMAP</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">지도 띄우기</p>
    </div>
</div>

<style>
  #map{
    width: 1000px;
    height: 450px;
    margin:auto;
    margin-bottom: 50px;
    }

</style>

<div>
  <div class="mdlTxt">
      <h2 class="wow flipInX" data-wow-duration="2s">구글 지도</h2>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap" defer></script>

<!--
  <script>
    const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let labelIndex = 0;
    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: { lat:35.14310, lng:129.03416 },
        zoom: 14,
      });

      google.maps.event.addListener(map, "click", (event) => {
          addMarker(event.latLng, map);
      });
      addMarker(bangalore, map);
    }
    function addMarker(location, map) {
    // Add the marker at the clicked location, and add the next-available label
    // from the array of alphabetical characters.
      new google.maps.Marker({
        position: location,
        label: labels[labelIndex++ % labels.length],
        map: map,
      });
    }
    window.initMap = initMap;
    </script>
-->
<script >

// 마크, 동선을 그리고 난 후 해당 위치를 array에 저장
var MarkersArray = [];
var Coordinates= [];
var travelPathArray = [];
var map;

// 마커
const labels = "12345";
let labelIndex = 0;

// 마커 위치 배열
var location = [
  [37.5546788, 126.9706069],
  [37.5668260, 126.9786567],
  [37.5660373, 126.9821930],
  [37.5655638, 126.374894],
  [37.566330, 126.968153]
];

// 지도 띄우기
function initialize() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat:35.14310, lng:129.03416 },
    zoom: 15,
  });
  window.initialize = initialize;

  google.maps.event.addListener(map, 'click', function(event) { 
    var marker = new google.maps.Marker({ 
    position: event.latLng, 
    label: labels[labelIndex++ % labels.length],
    map: map,
    title: '위치마커'
  });

    attachMessage(marker, event.latLng);
    //선을 그리기 위해 좌표를 넣는다.
    Coordinates.push( event.latLng );
    //마커 담기
    MarkersArray.push(marker);

    //array에 담은 위도,경도 데이타를 가지고 동선 그리기
    flightPath();
  });
}

//해당 위치에 주소를 가져오고, 마크를 클릭시 infowindow에 주소를 표시
function attachMessage(marker, latlng) {
  geocoder = new google.maps.Geocoder();
  geocoder.geocode({'latLng': latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[0]) {
        var address_nm = results[0].formatted_address;
        var infowindow = new google.maps.InfoWindow(
             { content: address_nm,
        size: new google.maps.Size(50,50)
             });
         google.maps.event.addListener(marker, 'click', function() {
           infowindow.open(map,marker);
         });
      }
    } else{
    alert('주소 가져오기 오류!');
    }
  });
}

//지도에 동선그리기
function flightPath(){
  for (i in travelPathArray){
    travelPathArray[i].setMap(null);
  }

  var flightPath = new google.maps.Polyline({
    path: Coordinates,
    strokeColor: "#FF0000",
    strokeOpacity: 0.3,
    strokeWeight: 2
  });
  flightPath.setMap(map);
  travelPathArray.push(flightPath);
}


</script>


  <div id="map"></div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
