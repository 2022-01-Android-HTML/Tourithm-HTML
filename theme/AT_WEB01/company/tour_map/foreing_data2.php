<?php
include_once('../../../../common.php');
?>

<!--
해외 주소로 위도 경도 받아오기 XML 파싱
-->

<?

$tmpString = "피어 39";
$outString = preg_replace("/\s+/", "", $tmpString);


  $url = 'https://maps.googleapis.com/maps/api/geocode/xml?address='.$outString.'&sensor=false&key=AIzaSyDasNfPvggk2b8tH9MNG98PMHjmdaIdVWY';
  $ch = cURL_init();
  cURL_setopt($ch, CURLOPT_URL, $url);
  cURL_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = cURL_exec($ch);
  cURL_close($ch);
  $object = simplexml_load_string($response);

  $lat = $object->result->geometry->location->lat; // 위
  $lng = $object->result->geometry->location->lng; // 경

  if(strlen($lat)==0) {
    $lat = "1.111";
  }
  if(strlen($lng)==0) {
    $lng = "1.111";
  }

  echo 'lat : ', $lat, '</br>';
  echo 'lng : ', $lng, '</br>';
  echo 'url : ', $url, '</br></br>';

?>
