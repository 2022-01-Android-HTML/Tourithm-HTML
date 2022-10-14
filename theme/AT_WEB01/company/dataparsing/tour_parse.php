<?php
include_once('../../../../common.php');
?>

<!--
관광지 테이블
-->

<?
// 국내 관광지 데이터 테스트 12개
$id_arr = array();

$url = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/areaBasedList?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=12&areaCode=&sigunguCode=&cat1=&cat2=&cat3=&listYN=Y&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&arrange=P&numOfRows=960&pageNo=2';
$ch = cURL_init();
cURL_setopt($ch, CURLOPT_URL, $url);
cURL_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = cURL_exec($ch);
cURL_close($ch);
$object = simplexml_load_string($response);
$i = 960;

// 여기부터 Custom
// DB 접속 정보 - 변경 안해도 됨
$DB['host'] = 'localhost';
$DB['db'] = 'idox23';
$DB['id'] = 'idox23';
$DB['pw'] = 'minjeong23';

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);  // 위에 적힌 내용을 토대로 DB Connecting
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}  // 연결 불가능할 경우 System Die


foreach ($object->body->items->children() as $item) {
  $i++;
  echo 'ranking : ', $i, '</br>';
  // 관광지 이름, 아이디, 주소, 위도, 경도, 이미지경로
  $name = $item->title;
  $id = $item->contentid;
  $areacode = $item->areacode;
  $addr = $item->addr1;
  $lat = $item->mapx;
  $lng = $item->mapy;
  $cat1 = $item->cat1;
  $cat2 = $item->cat2;
  $cat3 = $item->cat3;
  $img = $item->firstimage;

  echo '이름 : ', $name, '</br>';
  echo '고유번호 : ', $id, '</br>';
  array_push($id_arr, $id);
  echo '주소 : ', $addr, '</br>';
  echo '위도 : ', $lat, '</br>';
  echo '경도 : ', $lng, '</br>';
  echo '지역코드 : ', $areacode, '</br>';
  echo '카테고리 1 : ', $cat1, '</br>';
  echo '카테고리 2 : ', $cat2, '</br>';
  echo '카테고리 3 : ', $cat3, '</br>';
  echo '썸네일 : ', $img, '</br></br>';

  // 공통 정보
  $url1 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailCommon?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=12&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&defaultYN=Y&firstImageYN=Y&areacodeYN=Y&catcodeYN=Y&addrinfoYN=Y&mapinfoYN=Y&overviewYN=Y&transGuideYN=Y';
  $ch1 = cURL_init();
  cURL_setopt($ch1, CURLOPT_URL, $url1);
  cURL_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
  $response1 = cURL_exec($ch1);
  cURL_close($ch1);
  $object1 = simplexml_load_string($response1);

  $info = $object1->body->items->item->overview;
  $zipcode = $object1->body->items->item->zipcode;
  echo '개요 : ', $info, '</br>';
  echo '우편번호 : ', $zipcode, '</br></br>';

  // 소개 정보
  $url2 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailIntro?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=12&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&introYN=Y';
  $ch2 = cURL_init();
  cURL_setopt($ch2, CURLOPT_URL, $url2);
  cURL_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
  $response2 = cURL_exec($ch2);
  cURL_close($ch2);
  $object2 = simplexml_load_string($response2);

  $infocenter = $object2->body->items->item->infocenter;
  $restdate = $object2->body->items->item->restdate;
  $usetime = $object2->body->items->item->usetime;
  $chkpet = $object2->body->items->item->chkpet;

  if(strlen($infocenter)==0) {
    $infocenter = "none";
  }
  if(strlen($restdate)==0) {
    $restdate = "none";
  }
  if(strlen($usetime)==0) {
    $usetime = "none";
  }
  if(strlen($chkpet)==0) {
    $chkpet = "none";
  }

  echo '문의 및 안내 : ', $infocenter, '</br>';
  echo '휴무일 : ', $restdate, '</br>';
  echo '이용시간 : ', $usetime, '</br>';
  echo '애완동물 : ', $chkpet, '</br></br>';

  // 반복 정보
  $url3 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailInfo?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=12&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&listYN=Y';
  $ch3 = cURL_init();
  cURL_setopt($ch3, CURLOPT_URL, $url3);
  cURL_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
  $response3 = cURL_exec($ch3);
  cURL_close($ch3);
  $object3 = simplexml_load_string($response3);

  $info_arr = array();
  $info_arr2 = array();
  $fee = "";
  $bath = "";
  $parkfee = "";

  foreach ($object3->body->items->children() as $item) {
    $infoname1 = $item->infoname;
    if ($infoname1 == "입장료") {
      $infotext1 = $item->infotext;
      $fee = $fee.$infotext1;
    }
    else if ($infoname1 == "화장실") {
      $infotext2 = $item->infotext;
      $bath = $bath.$infotext2;
    }
    else if ($infoname1 == "주차요금") {
      $infotext3 = $item->infotext;
      $parkfee = $parkfee.$infotext3;
    }
  }

  if(empty($fee)){
    $fee = "none";
  }
  if(empty($bath)){
    $bath = "none";
  }
  if(empty($parkfee)){
    $parkfee = "none";
  }
  echo '이용요금 : ', $fee, '</br>';
  echo '화장실 : ', $bath, '</br>';
  echo '주차요금 : ', $parkfee, '</br></br>';

  // 추가 이미지
  $img_arr = array();
  $imgurl_add = "";
  $url4 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailImage?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=12&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&contentId='.$id.'&imageYN=Y';
  $ch4 = cURL_init();
  cURL_setopt($ch4, CURLOPT_URL, $url4);
  cURL_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
  $response4 = cURL_exec($ch4);
  cURL_close($ch4);
  $object4 = simplexml_load_string($response4);

  foreach ($object4->body->items->children() as $item) {
    $imgurl = $item->originimgurl;
    $imgurl_add = $imgurl_add.'@'.$imgurl;
  }
  if(strlen($imgurl_add)==0){
    $imgurl_add = $imgurl_add.'@'.$img;
  }

  echo '이미지경로 : ', $imgurl_add;
  echo '</br>----------------------------------------------------------------------</br>';
/*
  // DB에 데이터 넣기 (최초 1회)
  $quary = "INSERT INTO kr_tour(name, ranking, addr1, zipcode, areacode, cat1, cat2, cat3, contentid, firstimage,
                                lat, lng, overview, infocenter, restdate, usetime,
                                chkpet, fee, bath, parkfee, originimgurl)
            VALUES('$name', '$i', '$addr', '$zipcode', '$areacode', '$cat1', '$cat2', '$cat3', '$id', '$img',
                                '$lat', '$lng', '$info', '$infocenter', '$restdate', '$usetime',
                                '$chkpet', '$fee', '$bath', '$parkfee', '$imgurl_add')";

  $mysqli->query($quary);
*/
}

// 반드시 세션 종료
$mysqli->close();  // ***** <주의> DB 쓰고 close 안하면 트래픽 초과로 DB 다운될 수 있음*****

?>
