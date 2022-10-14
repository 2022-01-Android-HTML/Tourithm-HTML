<?php
include_once('../../../../common.php');
?>

<?

// 국내 관광지 데이터 100개 - 이름, 아이디, 주소, 위도, 경도, 이미지경로
$url = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/areaBasedList?ServiceKey=XSio3dSgHiYVaYwQLFud%2Bun3%2B%2Frs2m6X2fjxz5Zu4xhbffDGtaJNViHXK8K%2B2b5Qra8uLwTfmAqh56kdjrpZxg%3D%3D&contentTypeId=12&areaCode=&sigunguCode=&cat1=&cat2=&cat3=&listYN=Y&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&arrange=P&numOfRows=10&pageNo=1';

$ch = cURL_init();
cURL_setopt($ch, CURLOPT_URL, $url);
cURL_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = cURL_exec($ch);
cURL_close($ch);
$object = simplexml_load_string($response);


$id_arr = array();
foreach ($object->body->items->children() as $item) { // 관광지 이름, 아이디, 주소, 위도, 경도, 이미지경로
  // code...
  $name = $item->title;
  $id = $item->contentid;
  $addr = $item->addr1;
  $lat = $item->mapx;
  $lng = $item->mapy;
  $img = $item->firstimage;

  echo $name;
  echo '</br>';
  echo $id;
  echo '</br>';
  array_push($id_arr, $id);
  echo $addr;
  echo '</br>';
  echo $lat;
  echo $lng;
  echo '</br>';
  echo $img;
  echo '</br></br>';
}


foreach($id_arr as $id) { // 관광지 설명
  $url2 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailCommon?ServiceKey=XSio3dSgHiYVaYwQLFud%2Bun3%2B%2Frs2m6X2fjxz5Zu4xhbffDGtaJNViHXK8K%2B2b5Qra8uLwTfmAqh56kdjrpZxg%3D%3D&contentTypeId=12&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&defaultYN=Y&firstImageYN=Y&areacodeYN=Y&catcodeYN=Y&addrinfoYN=Y&mapinfoYN=Y&overviewYN=Y&transGuideYN=Y';
  $ch2 = cURL_init();
  cURL_setopt($ch2, CURLOPT_URL, $url2);
  cURL_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
  $response2 = cURL_exec($ch2);
  cURL_close($ch2);
  $object2 = simplexml_load_string($response2);

  $info = $object2->body->items->item->overview;

  echo $info;
  echo '</br></br>';
}

$img_arr = array();
foreach($id_arr as $id) { // 관광지 추가 이미지
  $url = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailImage?ServiceKey=XSio3dSgHiYVaYwQLFud%2Bun3%2B%2Frs2m6X2fjxz5Zu4xhbffDGtaJNViHXK8K%2B2b5Qra8uLwTfmAqh56kdjrpZxg%3D%3D&contentTypeId=12&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&contentId='.$id.'&imageYN=Y';
  $ch = cURL_init();
  cURL_setopt($ch, CURLOPT_URL, $url);
  cURL_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = cURL_exec($ch);
  cURL_close($ch);
  $object = simplexml_load_string($response);

  foreach ($object->body->items->children() as $item) {
    $img = $item->originimgurl;
    array_push($img_arr, $img);
  }
}

foreach ($img_arr as $imgv) {
  echo $imgv;
  echo '</br>';
}
?>
