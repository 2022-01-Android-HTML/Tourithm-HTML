<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>
<script>
new WOW().init();
</script>

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png"><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <h3 class="wow fadeInDown">TOURLIST</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">투어리즘에 등재된 국내 여행지 코스입니다.</p>
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

<div class="mdlTxt">
    <h2 class="wow flipInX" data-wow-duration="2s"><?php echo $_GET["value"]; ?></h2>

</div>

<div id = result></div>

<!-- 여기 지도 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap" defer></script>
<div id="map"></div>

<script>

var MarkersArray = [];
var Coordinates= [];
var travelPathArray = [];
var value = '<? echo $value; ?>'; //여행지명

const labels = "ABCDEFGHIJKLMN";
let labelIndex = 0;

// 2차원 배열
    if(value == "대전 여행"){
    var locations = [
      ['만인산푸른학습원', 36.202145, 127.454599],
      ['무수천하마을', 36.280266, 127.401893],
      ['대전오월드', 36.287312, 127.400129],
      ['상소동 산림욕장', 36.231364, 127.471100]
    ];

    function initMap() {
    //지도 띄우기
      var map = new google.maps.Map(document.getElementById('map'),{
        zoom: 11,
        center: {lat: 36.287312, lng: 127.400129},
        mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();
        var i;

        // 배열 마커 넣는 for문
        for (i = 0; i < locations.length; i++) {
          var make_marker = new google.maps.LatLng(locations[i][1], locations[i][2]);
          var marker = new google.maps.Marker({
            id:i,
            label: labels[labelIndex++ % labels.length],
            position: make_marker,
            map: map
          });

          Coordinates.push(make_marker);
          MarkersArray.push(marker);

          // 마커 클릭시 이벤트 (infowindow)
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
            }
          })(marker, i));

        // 마커 클릭시 줌
          if(marker) {
            marker.addListener('click', function() {
              map.setZoom(17);
              map.setCenter(this.getPosition());
          });
        }

      } // for 문 종료
      //지도 동선그리기
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
}

else if(value == "대전 여행2"){
  var locations = [
        ['대청호', 36.401115, 127.510167],
        ['우암사적공원', 36.348167, 127.458973],
        ['솔로몬로파크', 36.378318, 127.399858],
        ['한밭수목원', 36.368630, 127.386270],
        ['유성온천지구', 36.355345, 127.344813]
  ];

  function initMap() {
  //지도 띄우기
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 12,
      center: {lat: 36.378318, lng: 127.399858},
      mapTypeId: google.maps.MapTypeId.ROADMAP
      });

      var infowindow = new google.maps.InfoWindow();
      var i;

      // 배열 마커 넣는 for문
      for (i = 0; i < locations.length; i++) {
        var make_marker = new google.maps.LatLng(locations[i][1], locations[i][2]);
        var marker = new google.maps.Marker({
          id:i,
          label: labels[labelIndex++ % labels.length],
          position: make_marker,
          map: map
        });

        Coordinates.push(make_marker);
        MarkersArray.push(marker);

        // 마커 클릭시 이벤트 (infowindow)
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));

      // 마커 클릭시 줌
        if(marker) {
          marker.addListener('click', function() {
            map.setZoom(17);
            map.setCenter(this.getPosition());
        });
      }

    } // for 문 종료
    //지도 동선그리기
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
}
</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
