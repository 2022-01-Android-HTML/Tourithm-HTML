<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<!--

이미지 크롤링 테스트

-->

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
  ini_set("allow_url_fopen", 1);

  include "simple_html_dom.php";

// https://images.google.com/
  $data = file_get_html("https://www.google.com/search?q=%EA%B4%80%EA%B4%91%EC%A7%80&tbm=isch&sxsrf=ALiCzsbxqo5PBUiK_QRAABlqGNDYliAX-g%3A1652543620884&source=hp&biw=1029&bih=930&ei=hNB_YrSRNMac-Aad46z4BA&iflsig=AJiK0e8AAAAAYn_elPRljIAuIIFKE288avAS2JouXSPk&ved=0ahUKEwi04_zbrN_3AhVGDt4KHZ0xC08Q4dUDCAc&uact=5&oq=%EA%B4%80%EA%B4%91%EC%A7%80&gs_lcp=CgNpbWcQAzIECCMQJzIECCMQJzIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOggIABCABBCxA1AAWPkFYJMHaABwAHgAgAGCAYgBpgmSAQQwLjEwmAEAoAEBqgELZ3dzLXdpei1pbWc&sclient=img");

//  echo $data;

// 이미지 검색 결과 20개 나옴
$images = array();
foreach($data->find('img') as $element) //이미지 태그의 주소를 찾아 배열에 저장
  $images[] = $element->src;

reset($images);

foreach ($images as $out) //저장된 배열의 내용을 출력해주는 부분
  echo "<a href='$out' target='_blank'> $out </a><br><img src='$out'><br><br>\n";



include_once(G5_THEME_PATH.'/tail.php');
?>
