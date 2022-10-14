<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<style>
.swiper-container {
	width:700px;
	height:400px;
  margin-top: 10%;
  position: relative;
  overflow: hidden;
  list-style: none;
  padding: 0;
  z-index: 1;
}

.swiper-slide {
	text-align:center;
	display:flex; /* 내용을 중앙정렬 하기위해 flex 사용 */
	align-items:center; /* 위아래 기준 중앙정렬 */
	justify-content:center; /* 좌우 기준 중앙정렬 */
}

.swiper-slide img {
  width: 100%;
  height: 100%;
}
</style>


<div class="ing_bnr_Wrap">
  <div class="bnrimg">
    <img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png">
    <br style="clear:both;">
    <br style="clear:both;">
  </div>
  <div class="bnrtxtwrap">
    <h3 class="wow fadeInDown">TOURLIST</h3>
    <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
    <p class="wow fadeInDown" data-wow-delay="0.2s">투어리즘에 등재된 국내 인기 여행지 목록입니다.</p>
  </div>
</div>

<?
  $value = urldecode($_GET["value"]);
	$revalue = preg_replace("/\s+/", "", $value);


  ini_set("allow_url_fopen", 1);
  include "simple_html_dom.php";

  //https://www.shutterstock.com/ko << 고화질 유료 사이트
  $url = 'https://www.google.com/search?q='.$revalue.'&tbm=isch&sxsrf=ALiCzsbxqo5PBUiK_QRAABlqGNDYliAXg%3A1652543620884&source=hp&biw=1029&bih=930&ei=hNB_YrSRNMacAad46z4BA&iflsig=AJiK0e8AAAAAYn_elPRljIAuIIFKE288avAS2JouXSPk&ved=0ahUKEwi04_zbrN_3AhVGDt4KHZ0xC08Q4dUDCAc&uact=5&oq=%EA%B4%80%EA%B4%91%EC%A7%80&gs_lcp=CgNpbWcQAzIECCMQJzIECCMQJzIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOggIABCABBCxA1AAWPkFYJMHaABwAHgAgAGCAYgBpgmSAQQwLjEwmAEAoAEBqgELZ3dzLXdpei1pbWc&sclient=img';

  // https://images.google.com/
  $data = file_get_html($url);
  //  echo $data;

  // 이미지 검색 결과 20개 나옴
  $images = array();
  //이미지 태그의 주소를 찾아 배열에 저장
  foreach($data->find('img') as $element)
    $images[] = $element->src;
  reset($images);

// TourAPI 가이드 - 사진 url
//	http://tong.visitkorea.or.kr/cms/resource/61/2780561_image2_1.png
?>


<div class="swiper-container">
	<div class="swiper-wrapper">
    <?foreach ($images as $key => $out) {
      if ($key < 1) continue; ?>
    <div class="swiper-slide"><img data-src="<?echo $out;?>" class="swiper-lazy"></div>
    <?}?>
	</div>

	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>

	<div class="swiper-pagination"></div>
</div>

<script>
new Swiper('.swiper-container', {
	// 동적로딩 설정
	lazy : {
		loadPrevNext : true // 이전, 다음 이미지는 미리 로딩
	},
	// 페이징 설정
	pagination : {
		el : '.swiper-pagination',
		clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
	},
	// 네비게이션 설정
	navigation : {
		nextEl : '.swiper-button-next', // 다음 버튼 클래스명
		prevEl : '.swiper-button-prev', // 이번 버튼 클래스명
	},
});
</script>
