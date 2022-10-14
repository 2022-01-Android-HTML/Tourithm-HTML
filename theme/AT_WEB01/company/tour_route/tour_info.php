<?php
include_once('../../../../common.php');
?>

<!--
공통 column << 테이블 이름
랭킹 : ranking
주소 : addr1
지역코드 : areacode
카테고리1 : cat1
카테고리2 : cat2
카테고리3 : cat3
고유번호 : contentid
썸네일 : firstimage
위도 : mapx
경도 : mapy
이름 : title

관광지 column << 테이블 이름
공통정보
- 개요 : overview << 칼럼 이름
소개정보
- 문의 및 안내 : infocenter
- 휴무일 : restdate
- 이용시간 : usetime
- 주차시설 : parking
- 애완동물 : chkpet
반복정보
- 입장료 : infotext
- 화장실 : infotext
- 주차요금 : infotext
추가이미지
- 이미지경로 : originimgurl
-->

<?
  $data = file_get_html("http://api.visitkorea.or.kr/openapi/service/rest/KorService/areaBasedList?ServiceKey=wC%2FYwPcQnnikfrW2k58QO6lNbCL3Ek6gcQm51Uj87ZKU0yzNhTaYM%2FSAAs5VAdfwvTU8I4gMg5U0GU9cX%2BLg%2FA%3D%3D&contentTypeId=12&areaCode=&sigunguCode=&cat1=&cat2=&cat3=&listYN=Y&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&arrange=B&numOfRows=12&pageNo=1"); // 데이터 가져올 URL

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
    // 랭킹, 주소, 지역코드, 카테1, 카테2, 카테3, 고유번호, 썸네일, 위도, 경도, 이름

    $addr = $item->addr1;
    $areacode = $item->areacode;
    $cat1 = $item->cat1;
    $cat2 = $item->cat2;
    $cat3 = $item->cat3;
    $id = $item->contentid;
    $img1 = $item->firstimage;
    $lat = $item->mapx;
    $lng = $item->mapy;
    $name = $item->title;

    echo '주소 : ', $addr, '</br>';
    echo '지역코드 : ', $areacode, '</br>';
    echo '카테고리 1 : ', $cat1, '</br>';
    echo '카테고리 2 : ', $cat2, '</br>';
    echo '카테고리 3 : ', $cat3, '</br>';
    echo '고유번호 : ', $id, '</br>';
    echo '썸네일 : ', $img, '</br></br>';
    array_push($id_arr, $id);
    echo '위도 : ', $lat, '</br>';
    echo '경도 : ', $lng, '</br>';
    echo '이름 : ', $name, '</br>';
    echo '썸네일 : ', $img, '</br></br>';

    // 공통 정보 1개
    $url1 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailCommon?ServiceKey=XSio3dSgHiYVaYwQLFud%2Bun3%2B%2Frs2m6X2fjxz5Zu4xhbffDGtaJNViHXK8K%2B2b5Qra8uLwTfmAqh56kdjrpZxg%3D%3D&contentTypeId=12&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&defaultYN=Y&firstImageYN=Y&areacodeYN=Y&catcodeYN=Y&addrinfoYN=Y&mapinfoYN=Y&overviewYN=Y&transGuideYN=Y';
    $ch1 = cURL_init();
    cURL_setopt($ch1, CURLOPT_URL, $url1);
    cURL_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    $response1 = cURL_exec($ch1);
    cURL_close($ch1);
    $object1 = simplexml_load_string($response1);

    $info = $object1->body->items->item->overview;

    echo '개요 : ', $info, '</br>';

    // 소개 정보 - 문의 및 안내, 휴뮤일, 이용시간, 주차시설, 애완동물
    $url2 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailIntro?ServiceKey=XSio3dSgHiYVaYwQLFud%2Bun3%2B%2Frs2m6X2fjxz5Zu4xhbffDGtaJNViHXK8K%2B2b5Qra8uLwTfmAqh56kdjrpZxg%3D%3D&contentTypeId=12&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&introYN=Y';
    $ch2 = cURL_init();
    cURL_setopt($ch2, CURLOPT_URL, $url2);
    cURL_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    $response2 = cURL_exec($ch2);
    cURL_close($ch2);
    $object2 = simplexml_load_string($response2);

    $infocenter = $object2->body->items->item->infocenter;
    $restdate = $object2->body->items->item->restdate;
    $usetime = $object2->body->items->item->usetime;
    $parking = $object2->body->items->item->parking;
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
    if(strlen($parking)==0) {
      $parking = "none";
    }
    if(strlen($chkpet)==0) {
      $chkpet = "none";
    }

    echo '문의 및 안내 : ', $infocenter, '</br>';
    echo '휴무일 : ', $restdate, '</br>';
    echo '이용시간 : ', $usetime, '</br>';
    echo '주차시설 : ', $parking, '</br>';
    echo '애완동물 : ', $chkpet, '</br>';

    //반복정보
    $url3 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailInfo?ServiceKey=XSio3dSgHiYVaYwQLFud%2Bun3%2B%2Frs2m6X2fjxz5Zu4xhbffDGtaJNViHXK8K%2B2b5Qra8uLwTfmAqh56kdjrpZxg%3D%3D&contentTypeId=12&contentId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&listYN=Y';
    $ch3 = cURL_init();
    cURL_setopt($ch3, CURLOPT_URL, $url3);
    cURL_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
    $response3 = cURL_exec($ch3);
    cURL_close($ch3);
    $object3 = simplexml_load_string($response3);

    $info_arr = array();
    $info_arr2 = array();
    $info_arr3 = array();
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
    if(empty($facility)){
      $bath = "none";
    }
    if(empty($parkfee)){
      $parkfee = "none";
    }
    echo '입장료 : ', $fee, '</br>';
    echo '화장실 : ', $bath, '</br>';
    echo '주차요금 : ', $parkfee, '</br></br>';

    // 추가 이미지
    $img_arr = array();
    $imgurl_add = "";
    $url4 = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/detailImage?ServiceKey=XSio3dSgHiYVaYwQLFud%2Bun3%2B%2Frs2m6X2fjxz5Zu4xhbffDGtaJNViHXK8K%2B2b5Qra8uLwTfmAqh56kdjrpZxg%3D%3D&contentTypeId='.$id.'&MobileOS=ETC&MobileApp=TourAPI3.0_Guide&contentId=128767&imageYN=Y';
    $ch4 = cURL_init();
    cURL_setopt($ch4, CURLOPT_URL, $url4);
    cURL_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
    $response4 = cURL_exec($ch4);
    cURL_close($ch4);
    $object4 = simplexml_load_string($response4);

    foreach ($object4->body->items->children() as $item) {
      $imgurl = $item->originimgurl;
      $imgurl_add = $imgurl_add.$imgurl.'@';
    }

    echo '이미지경로 : ', $imgurl_add;
    echo '</br>----------------------------------------------------------------------</br>';
  }

  // 반드시 세션 종료
  $mysqli->close();  // ***** <주의> DB 쓰고 close 안하면 트래픽 초과로 DB 다운될 수 있음*****

?>
