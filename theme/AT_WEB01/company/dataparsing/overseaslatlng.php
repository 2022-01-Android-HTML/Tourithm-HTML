<?php
include_once('../../../../common.php');
?>

<!--
해외 주소로 위도 경도 받아오기 XML 파싱
-->

<?
/*
$DB['host'] = 'localhost';
$DB['db'] = 'idox23';
$DB['id'] = 'idox23';
$DB['pw'] = 'minjeong23';

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);  // 위에 적힌 내용을 토대로 DB Connecting
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}  // 연결 불가능할 경우 System Die

$q = "SELECT * FROM us_hawaii";

$re = mysqli_query($conn, $q);
$arr = array();

foreach ($result as $row) {
  //$addr = $row['name'];
}
*/
$addr = '하와이 다이아몬드 헤드';
$url = 'https://maps.googleapis.com/maps/api/geocode/xml?address='.$addr.'&sensor=false&key=AIzaSyDasNfPvggk2b8tH9MNG98PMHjmdaIdVWY';
$ch = cURL_init();
cURL_setopt($ch, CURLOPT_URL, $url);
cURL_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = cURL_exec($ch);
cURL_close($ch);
$object = simplexml_load_string($response);

$lng = $url;
$lat = $object->locations;
echo 'lat : ', $lat, '</br>';
echo 'lng : ', $lng, '</br></br>';



// 반드시 세션 종료
$mysqli->close();  // ***** <주의> DB 쓰고 close 안하면 트래픽 초과로 DB 다운될 수 있음*****

?>
