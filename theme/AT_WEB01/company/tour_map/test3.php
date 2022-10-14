<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png"><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <h3 class="wow fadeInDown">TOURLIST</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">길찾기</p>
    </div>

</div>
<style>
  #direct_map{
     width: 1300px;
     height: 700px;
     margin:auto;
     margin-bottom: 50px;
   }

</style>


<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=96ad9fe7a31fb4accdba0b90f63c475a&libraries=services"></script>


<script>
let st_lat = 37.535669;
let st_lng = 126.972564;

var desti_re = "";
let de_lat = 37.448404;
let de_lng = 126.954099;

//getAddr(de_lat,de_lng);

function getAddr(lat,lng){
    let geocoder = new kakao.maps.services.Geocoder();

    let coord = new kakao.maps.LatLng(lat, lng);
    let callback = function(result, status) {
        if (status === kakao.maps.services.Status.OK) {
          console.log(result[0].road_address.address_name);
          desti_re = result[0].address.address_name;
        }
        document.getElementById('result1').innerText = desti_re;
    }
    var resu = geocoder.coord2Address(coord.getLng(), coord.getLat(), callback);
}

var start1 = getAddr(st_lat,st_lng);
var end1 = getAddr(de_lat,de_lng);

var result_src = "https://map.kakao.com/?sName="+start1+"&eName="+end1;

//document.getElementById('result1').innerHTML = result_src;

//location.href = "https://map.kakao.com/?sName="+start_re+"&eName="+desti_re;
//var result_src = "https://map.kakao.com/?sName="+start_re+"&eName="+desti_re;
//document.getElementById("direct_map").src="https://map.kakao.com/?sName=";
//document.getElementById('result3').innerHTML = start_re;


</script>

<html>
<body>
  <div id='result1'></div>
  <div id="result2"></div>
  <div id='result3'></div>
  <br>

  <p align="middle">

  <iframe id="direct_map"
      width="300"
      height="200">
  </iframe>
</p>

</body>
</html>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
