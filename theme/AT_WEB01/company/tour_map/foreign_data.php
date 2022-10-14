<?php
include_once('../../../../common.php');
?>

<!--
해외 주소로 위도 경도 받아오기 XML 파싱
-->

<?
$conn = mysqli_connect(
  'localhost',
  'idox23',
  'minjeong23',
  'idox23');

if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}  // 연결 불가능할 경우 System Die

$q = "SELECT * FROM us_lasvegas";

$re = mysqli_query($conn, $q);

foreach($re as $row) {

  $tmpString = $row['name'];
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

  echo 'name : ', $tmpString, '</br>';
  echo 'lat : ', $lat, '</br>';
  echo 'lng : ', $lng, '</br></br>';

  // DB에 데이터 넣기 (최초 1회)
//  $quary = "UPDATE us_losangeles SET lat = '$lat', lng = '$lng' WHERE name = '$tmpString'";

//  $re2 = mysqli_query($conn, $quary);

}

// 반드시 세션 종료
$mysqli->close();  // ***** <주의> DB 쓰고 close 안하면 트래픽 초과로 DB 다운될 수 있음*****

?>
