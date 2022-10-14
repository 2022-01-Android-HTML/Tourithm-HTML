<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="ing_bnr_Wrap">
  <div class="bnrimg">
    <img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png">
    <br style="clear:both;">
    <br style="clear:both;">
  </div>
  <div class="bnrtxtwrap">
    <h3 class="wow fadeInDown">TOURLIST</h3>
    <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
    <p class="wow fadeInDown" data-wow-delay="0.2s">크롤링 테스트 페이지</p>
  </div>
</div>


<?
  // 여기부터 Custom
  ini_set("allow_url_fopen", 1);  // 건들지 말 것
  include "simple_html_dom.php";  // 건들지 말 것

  $data = file_get_html("https://travel.naver.com/overseas/US40128932/city/topPoi/pattr?type=null"); // 데이터 가져올 URL
  // NY = https://travel.naver.com/overseas/USNYC60763/city/topPoi/pattr?type=null
  // LV = https://travel.naver.com/overseas/USLAS45963/city/topPoi/pattr?type=null
  // LA = https://travel.naver.com/overseas/USLAX32655/city/topPoi/pattr?type=null
  // SC = https://travel.naver.com/overseas/USSFO60713/city/topPoi/pattr?type=null
  // HW = https://travel.naver.com/overseas/US40128932/city/topPoi/pattr?type=null
  //echo $data;

  // DB 접속 정보 - 변경 안해도 됨
  $DB['host'] = 'localhost';
  $DB['db'] = 'idox23';
  $DB['id'] = 'idox23';
  $DB['pw'] = 'minjeong23';

  $mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);  // 위에 적힌 내용을 토대로 DB Connecting
  if (mysqli_connect_error()) {
      exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
  }  // 연결 불가능할 경우 System Die

  unset($arr_result);
  $arr_result = $data->find('li.pc_item__1qWM2>div>div>a');  // CSS 선택.
  // 여기서는 li 태그 중 class가 pc__item__1qWM2인 것 아래의 div 아래의 div 아래의 a 태그를 가져옴
  // 클래스 선택은 '.' 하위 태그는 '>'
  if(count($arr_result) > 0){  // 결과가 없을 때까지 계속 반복
    foreach($arr_result as $e){  // 변수로 사용하기 쉽게 짧은 변수명으로 바꿔줌 as=(arr_result를 e라고 명명)
      // 반복하며 요소를 가져옴. '->'는 45line의 '>'랑 같은 역할
      // 45line의 a태그 하위 0번째(=첫 번째) 요소의 하위 0번째 요소의 src를 받아옴.
      $img = $e->children(0)->children(0)->src; // 이미지
      // 45line의 a태그 하위 0번째(=첫 번째) 요소의 하위 1번째(=두 번째) 요소의 plaintext(일반 문자열?)를 받아옴
      // 예제들 처럼 하위 태그 계속해서 가져올 수 있음. a->b->c->d->e 이런 식으로
      $ranking = $e->children(0)->children(1)->plaintext; // 순위
      $name = $e->children(1)->children(0)->plaintext; // 이름
      $info = $e->children(1)->children(1)->plaintext; // 소개
      $categori = $e->children(1)->children(2)->plaintext; // 타입

      // 출력문. 필히 DB 저장 빼고 echo만 해서 데이터 받아지는지 확인한 후 넣기
      // html 태그 섞어쓰고 싶으면 ''나 ""로 묶으면 됨.
      echo "<br><img src='$img'>";
      echo $ranking.'<br>';
      echo $name.'<br>';
      echo $info.'<br>';
      echo $categori.'<br>';

      // 49line foreach 반복 돌면서 변수에 저장해둔 요소로 quary 수행. 여기 전까지는 DB에 저장되는 건 없고 quary 수행돼야 DB 관련 작업 수행됨
      // INSERT INTO는 알다시피 데이터 넣는 구문인데, 실수할 수 있으니 컬럼명 명시해서 넣기.
      // 데이터 잘못 넣은 경우에는 HeidiSQL에서 전체 행 삭제하고 다시 넣어야됨 (중복삭제 구문 없기 때문에 이미 데이터 있어도 계속 들어감)
      $quary = "INSERT INTO us_hawaii(image, ranking, name, info, categori) VALUES('$img', '$ranking', '$name', '$info', '$categori')";
      // 위 쿼리문 수행하도록 명령
      $mysqli->query($quary);
    }
  } else {
    echo "<br/>";
  }

  /*********************************/
  /*        반드시 세션 종료       */
  /*********************************/
  $mysqli->close();  // ***** <주의> DB 쓰고 close 안하면 트래픽 초과로 DB 다운될 수 있음*****

  include_once(G5_THEME_PATH.'/tail.php');
?>
