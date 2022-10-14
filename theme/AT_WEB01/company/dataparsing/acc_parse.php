<?php
include_once('../../../../common.php');
?>

<!--
숙박 column << 테이블 이름
공통정보
- 개요 : overview
소개정보
- 문의 및 안내 : infocenter
- 규모 : scalelodging
- 수용 가능 인원 : accomcountlodging
- 객실 수 : roomcount
- 조리 가능 : chkcooking
- 체크인 : checkintime
- 체크아웃 : checkouttime
- 예약안내 홈페이지 : reservationurl
- 픽업서비스 : pickup
- 식음료장 : foodplace
- 주차시설 : parkinglodging
추가이미지
- 이미지경로 : originimgurl
룸이미지
- 이미지 : roomimg1
- 객실명 : roomtitle
- 객실크기 : roomsize1
- 객실수 : roomcount
- 기준인원 : roombasecount
- 최대인원 : roommaxcount
- 객실소개 : roomintro
- 목욕시설 : roombathfacility
- 에어컨 : roomaircondition
- TV : roomtv
- PC : roompc
- 케이블설치 : roomcable
- 인터넷 : roominternet
- 냉장고 : roomrefrigerator
- 세면도구 : roomtoiletries
- 소파 : roomsofa
- 드라이기 : roomhairdryer
-->

<?
// 국내 숙박 데이터 테스트 12개
$id_arr = array();

$url = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/areaBasedList?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=32&areaCode=&sigunguCode=&cat1=&cat2=&cat3=&listYN=Y&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&arrange=P&numOfRows=824&pageNo=2';
$ch = cURL_init();
cURL_setopt($ch, CURLOPT_URL, $url);
cURL_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = cURL_exec($ch);
cURL_close($ch);
$object = simplexml_load_string($response);
$i = 824;

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


  // 공통 정보 1개
  $url1 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailCommon?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=32&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&defaultYN=Y&firstImageYN=Y&areacodeYN=Y&catcodeYN=Y&addrinfoYN=Y&mapinfoYN=Y&overviewYN=Y&transGuideYN=Y';
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

  // 소개 정보 10
  $url2 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailIntro?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=32&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&introYN=Y';
  $ch2 = cURL_init();
  cURL_setopt($ch2, CURLOPT_URL, $url2);
  cURL_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
  $response2 = cURL_exec($ch2);
  cURL_close($ch2);
  $object2 = simplexml_load_string($response2);

  $infocenteracc = $object2->body->items->item->infocenterlodging;
  $scalelodgingacc = $object2->body->items->item->scalelodging;
  $accomcountlodgingacc = $object2->body->items->item->accomcountlodging;
  $roomcount = $object2->body->items->item->roomcount;
  $chkcooking = $object2->body->items->item->chkcooking;
  $checkintime = $object2->body->items->item->checkintime;
  $checkouttime = $object2->body->items->item->checkouttime;
  $reservationurlacc = $object2->body->items->item->reservationurl;
  $pickup = $object2->body->items->item->pickup;
  $foodplace = $object2->body->items->item->foodplace;
  $parkinglodgingacc = $object2->body->items->item->parkinglodging;


  if(strlen($infocenteracc)==0) {
    $infocenteracc = "none";
  }
  if(strlen($scalelodgingacc)==0) {
    $scalelodgingacc = "none";
  }
  if(strlen($accomcountlodgingacc)==0) {
    $accomcountlodgingacc = "none";
  }
  if(strlen($roomcount)==0) {
    $roomcount = "none";
  }
  if(strlen($chkcooking)==0) {
    $chkcooking = "none";
  }
  if(strlen($checkintime)==0) {
    $checkintime = "none";
  }
  if(strlen($checkouttime)==0) {
    $checkouttime = "none";
  }
  if(strlen($reservationurlacc)==0) {
    $reservationurlacc = "none";
  }
  if(strlen($pickup)==0) {
    $pickup = "none";
  }
  if(strlen($foodplace)==0) {
    $foodplace = "none";
  }
  if(strlen($parkinglodgingacc)==0) {
    $parkinglodgingacc = "none";
  }

  echo '문의 및 안내 : ', $infocenteracc, '</br>';
  echo '규모 : ', $scalelodgingacc, '</br>';
  echo '수용 가능 인원 : ', $accomcountlodgingacc, '</br>';
  echo '객실 수 : ', $roomcount, '</br>';
  echo '조리 가능 : ', $chkcooking, '</br>';
  echo '체크인 : ', $checkintime, '</br>';
  echo '체크아웃 : ', $checkouttime, '</br>';
  echo '예약안내 홈페이지 : ', $reservationurlacc, '</br>';
  echo '픽업서비스 : ', $pickup, '</br>';
  echo '식음료장 : ', $foodplace, '</br>';
  echo '주차시설 : ', $parkinglodgingacc, '</br>';

  // 추가 이미지 1개
  $img_arr = array();
  $imgurl_add = "";
  $url3 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailImage?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=32&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&contentId='.$id.'&imageYN=Y';
  $ch3 = cURL_init();
  cURL_setopt($ch3, CURLOPT_URL, $url3);
  cURL_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
  $response3 = cURL_exec($ch3);
  cURL_close($ch3);
  $object3 = simplexml_load_string($response3);

  foreach ($object3->body->items->children() as $item) {
    $imgurl = $item->originimgurl;
    $imgurl_add = $imgurl_add.'@'.$imgurl;
  }
  if(strlen($imgurl_add)==0){
    $imgurl_add = $imgurl_add.'@'.$img;
  }


  echo '추가 이미지경로 : ', $imgurl_add,'</br>';

  // 룸 이미지 17개
  $url4 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailInfo?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=32&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&listYN=Y';
  $ch4 = cURL_init();
  cURL_setopt($ch4, CURLOPT_URL, $url4);
  cURL_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
  $response4 = cURL_exec($ch4);
  cURL_close($ch4);
  $object4 = simplexml_load_string($response4);

  $roomimg1 = $object4->body->items->item->roomimg1;
  $roomtitle = $object4->body->items->item->roomtitle;
  $roomsize1 = $object4->body->items->item->roomsize1;
  $roomcount_acc = $object4->body->items->item->roomcount;
  $roombasecount = $object4->body->items->item->roombasecount;
  $roommaxcount = $object4->body->items->item->roommaxcount;
  $roomintro = $object4->body->items->item->roomintro;
  $roombathfacility = $object4->body->items->item->roombathfacility;
  $roomaircondition = $object4->body->items->item->roomaircondition;
  $roomtv = $object4->body->items->item->roomtv;
  $roompc = $object4->body->items->item->roompc;
  $roomcable = $object4->body->items->item->roomcable;
  $roominternet = $object4->body->items->item->roominternet;
  $roomrefrigerator = $object4->body->items->item->roomrefrigerator;
  $roomtoiletries = $object4->body->items->item->roomtoiletries;
  $roomsofa = $object4->body->items->item->roomsofa;
  $roomhairdryer = $object4->body->items->item->roomhairdryer;

  if(empty($roomimg1)){
    $roomimg1 = "none";
  }
  if(empty($roomtitle)){
    $roomtitle = "none";
  }
  if(empty($roomsize1)){
    $roomsize1 = "none";
  }
  if(empty($roomcount_acc)){
    $roomcount_acc = "none";
  }
  if(empty($roombasecount)){
    $roombasecount = "none";
  }
  if(empty($roommaxcount)){
    $roommaxcount = "none";
  }
  if(empty($roomintro)){
    $roomintro = "none";
  }
  if(empty($roombathfacility)){
    $roombathfacility = "none";
  }
  if(empty($roomaircondition)){
    $roomaircondition = "none";
  }
  if(empty($roomtv)){
    $roomtv = "none";
  }
  if(empty($roompc)){
    $roompc = "none";
  }
  if(empty($roomcable)){
    $roomcable = "none";
  }
  if(empty($roominternet)){
    $roominternet = "none";
  }
  if(empty($roomrefrigerator)){
    $roomrefrigerator = "none";
  }
  if(empty($roomtoiletries)){
    $roomtoiletries = "none";
  }
  if(empty($roomsofa)){
    $roomsofa = "none";
  }
  if(empty($roomhairdryer)){
    $roomhairdryer = "none";
  }

  echo '룸 이미지경로 : ', $roomimg1, '</br>';
  echo '</br> 객실명 : ', $roomtitle, '</br>';
  echo '객실크기 : ', $roomsize1, '</br>';
  echo '객실수 : ', $roomcount_acc, '</br>';
  echo '기준인원 : ', $roombasecount, '</br>';
  echo '최대인원 : ', $roommaxcount, '</br>';
  echo '객실소개 : ', $roomintro, '</br>';
  echo '목욕시설 : ', $roombathfacility, '</br>';
  echo '에어컨 : ', $roomaircondition, '</br>';
  echo 'TV : ', $roomtv, '</br>';
  echo 'PC : ', $roompc, '</br>';
  echo '케이블설치 : ', $roomcable, '</br>';
  echo '인터넷 : ', $roominternet, '</br>';
  echo '냉장고 : ', $roomrefrigerator, '</br>';
  echo '세면도구 : ', $roomtoiletries, '</br>';
  echo '소파 : ', $roomsofa, '</br>';
  echo '드라이기 : ', $roomhairdryer, '</br>';

  echo '</br>----------------------------------------------------------------------</br>';

/*
  // DB에 데이터 넣기 (최초 1회)
  $quary = "INSERT INTO kr_hotel(name, ranking, addr1, zipcode, areacode, cat1,
                                  cat2, cat3, contentid, firstimage, lat,
                                  lng, overview, infocenter, scalelodging, accomcountlodging,
                                  roomcount, chkcooking, checkintime, checkouttime, reservationurl,
                                  pickup, foodplace, parkinglodging, originimgurl, roomimg1,
                                  roomtitle, roomsize1, roomcount_acc, roombasecount, roommaxcount,
                                  roomintro, roombathfacility, roomaircondition, roomtv, roompc,
                                  roomcable, roominternet, roomrefrigerator, roomtoiletries, roomsofa,
                                  roomhairdryer)
                          VALUES('$name', '$i', '$addr', '$zipcode', '$areacode', '$cat1',
                                 '$cat2', '$cat3', '$id', '$img', '$lat',
                                 '$lng', '$info', '$infocenteracc', '$scalelodgingacc', '$accomcountlodgingacc',
                                 '$roomcount', '$chkcooking', '$checkintime', '$checkouttime', '$reservationurlacc',
                                 '$pickup', '$foodplace', '$parkinglodgingacc', '$imgurl_add', '$roomimg1',
                                 '$roomtitle', '$roomsize1', '$roomcount_acc', '$roombasecount', '$roommaxcount',
                                 '$roomintro', '$roombathfacility', '$roomaircondition', '$roomtv', '$roompc',
                                 '$roomcable', '$roominternet', '$roomrefrigerator', '$roomtoiletries', '$roomsofa',
                                 '$roomhairdryer')";


  $quary = "UPDATE kr_hotel SET zipcode = '$zipcode', overview = '$info', scalelodging = '$scalelodgingacc', reservationurl = '$reservationurlacc', originimgurl = '$imgurl_add', roomintro = '$roomintro' WHERE name = '$name'";
//  $quary = "UPDATE kr_hotel SET firstimage = '$img' WHERE name = '$name'";
*/
$quary = "UPDATE kr_hotel SET name = '$name' WHERE contentid = '$id'";
  $mysqli->query($quary);


}

// 반드시 세션 종료
$mysqli->close();  // ***** <주의> DB 쓰고 close 안하면 트래픽 초과로 DB 다운될 수 있음*****

?>
