<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

  <script>
    new WOW().init();
  </script>

<div class="bannerWrap">
    <img src="<?php echo G5_THEME_IMG_URL ?>/main/banner1.png">
    <div>
        <!-- <img class="wow fadeInDown" data-wow-delay="0s" src="<?php echo G5_THEME_IMG_URL ?>/main/banner_logo.png"> -->
        <h2 class="wow fadeInDown" data-wow-delay="0.3s">[ Tourithm ]</h2>
        <p class="wow fadeInDown" data-wow-delay="0.6s">투어리즘에서 제공하는 맞춤형 여행 서비스를 통해</p>
        <p class="wow fadeInDown" data-wow-delay="0.8s">여행자님의 취향을 저격할 여행을 떠나보세요!</p>
        <!-- <div class="square_bracket1 wow fadeInLeft" data-wow-delay="0.1s"></div>
        <div class="square_bracket2 wow fadeInRight" data-wow-delay="0.1s"></div> -->
    </div>
</div>


<style>
.wrap_contView {
    padding-bottom: 40px;
    display: table;
    width: 100%;
}

.area_msListPc li a {
    display: block;
    box-sizing: border-box;
    font-size: 20px;
    color: #444;
    border: 1px solid #ccc;
    text-align: center;
    padding: 20px 0px;
    width: 200px;
    height: 200px;
    position: relative;
}

.area_msListPc li a:hover {
  text-decoration: underline;
  text-underline-position: under;
}

.area_msListPc li {
  float: left;
}

.wrap_contView h3 {
  margin-left: 20%;
  font-size: 22px;
  color: #ffffff;
}

.area_msListPc {
  width: 100%;
  margin-top: 20px;
  margin-left: 20%;
}

.tit_pos h2 {
  width: 60%;
  font-weight: 800;
  color: #333;
  font-size: 36px;
  margin-top: 20px;
  margin-left: 20%;
  padding: 26px 0 25px 15px;
  border-bottom: 2px solid black;
}

.listBn_msPc {
  width: 90%;
  margin-left: 13%;
  box-sizing: border-box;
  display: block;
}

.listBn_msPc li {
  float: left;
  position: relative;
  width: 200px;
  height: 200px;
  margin-right: 20px;
  margin-top: 20px;
  box-sizing: border-box;
  display: list-item;
}

.clfix img {
  width: 200px;
  height: 200px;
}

.area_dimTxt {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  color: #ffffff;
  text-align: center;
	display: flex; /* 내용을 중앙정렬 하기위해 flex 사용 */
	align-items: center; /* 위아래 기준 중앙정렬 */
	justify-content: center; /* 좌우 기준 중앙정렬 */
  background: url(https://cdn.visitkorea.or.kr/resources/images/sub/bg_dim.png) 0 0 repeat;
}

.listBn_msPc li.list_more a {
  display: block;
  box-sizing: border-box;
  padding: 45% 0;
  color: #ffffff;
  text-align: center;
  background: url(https://cdn.visitkorea.or.kr/resources/images/sub/bg_dim.png) 0 0 repeat;
}

.area_dimTxt:hover {
  text-decoration: underline;
  text-underline-position: under;
}

.listBn_msPc li.list_more a:hover {
  text-decoration: underline;
  text-underline-position: under;
}

.wrap_contView p {
  display: none;
}
</style>

<script>
function send_data(ths){
  var str = $(ths).text();
  var world1 = str.split('@');
  var id = $(ths).attr('id');
  if(id == '12') { // tour 관광지
    location.href = "/theme/AT_WEB01/company/tour_list/kr_tour/kr_tour_info.php?value=" + world1[1];
  }
  if(id == '28') { // camp 레포츠
    location.href = "/theme/AT_WEB01/company/tour_list/kr_camp/kr_camp_info.php?value=" + world1[1];
  }
  if(id == '32') { // acc 숙박
    location.href = "/theme/AT_WEB01/company/tour_list/kr_hotel/kr_hotel_info.php?value=" + world1[1];
  }
  if(id == '39') { // food 음식점
    location.href = "/theme/AT_WEB01/company/tour_list/kr_food/kr_food_info.php?value=" + world1[1];
  }
}
</script>

<div class="consertWrap">
    <div class="inner">
        <div class="main_title">
            <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>TOURITHM</span>BEST</h2>
            <p class="wow fadeInDown" data-wow-delay="0.4s">투어리즘 인기 관광지 Top 12</p>
        </div>

        <div class="wrap_contView">
          <div class="listBn_msPc">
            <ul class="clfix">
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/29/2482729_image2_1.jpg" alt="제부도">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>제부도<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/47/2615547_image2_1.bmp" alt="휴애리자연생활공원">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>휴애리자연생활공원<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/10/1921410_image2_1.jpg" alt="김해 롯데워터파크">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>김해 롯데워터파크<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/66/2512766_image2_1.jpg" alt="을왕리해수욕장">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>을왕리해수욕장<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/96/2548096_image2_1.jpg" alt="하늘물빛정원">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>하늘물빛정원<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/09/2674909_image2_1.jpg" alt="석모도">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>석모도<p>@</p></strong>
                </a>
              </li>
            </ul>
            <ul class="clfix">
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/94/530594_image2_1.jpg" alt="해운대온천센터">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>해운대온천센터<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/12/1991512_image2_1.jpg" alt="국립 남해편백자연휴양림">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>국립 남해편백자연휴양림<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/18/2612518_image2_1.jpg" alt="죽녹원">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>죽녹원<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/66/582766_image2_1.jpg" alt="국립 운문산 자연 휴양">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>국립 운문산자연휴양림<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/71/1577671_image2_1.jpg" alt="월미도">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>월미도<p>@</p></strong>
                </a>
              </li>
              <li id='12' onclick="send_data(this)">
                <img src="http://tong.visitkorea.or.kr/cms/resource/77/219377_image2_1.jpg" alt="국립 유명산자연휴양림">
                <a class="area_dimTxt">
                  <strong class="tit_photo"><p>@</p>국립 유명산자연휴양림<p>@</p></strong>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </div>
</div>

<div class="portfolioWrap">
  <div class="inner">
      <div class="main_title">
          <h2 class="wow fadeInDown" data-wow-delay="0.3s"><span>TOURITHM</span>BEST</h2>
          <p class="wow fadeInDown" data-wow-delay="0.4s">투어리즘 인기 여행지 Top 12</p>
      </div>

      <div class="wrap_contView">
        <div class="listBn_msPc">
          <ul class="clfix">
            <li id='28' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/25/2044125_image2_1.jpg" alt="대청호 로하스 캠핑장">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>대청호 로하스 캠핑장<p>@</p></strong>
              </a>
            </li>
            <li id='28' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/96/1578996_image2_1.jpg" alt="함허동천야영장">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>함허동천야영장<p>@</p></strong>
              </a>
            </li>
            <li id='28' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/49/1868049_image2_1.jpg" alt="그랜드하얏트 서울 아이스링크">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>그랜드하얏트 서울 아이스링크<p>@</p></strong>
              </a>
            </li>
            <li id='28' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/12/1281312_image2_1.jpg" alt="예당저수지(예당관광지)">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>예당저수지(예당관광지)<p>@</p></strong>
              </a>
            </li>
            <li id='39' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/51/1870451_image2_1.jpg" alt="이성당">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>이성당<p>@</p></strong>
              </a>
            </li>
            <li id='39' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/30/401330_image2_1.jpg" alt="죽림원">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>죽림원<p>@</p></strong>
              </a>
            </li>
          </ul>
          <ul class="clfix">
            <li id='39' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/47/1973247_image2_1.jpg" alt="덕인갈비">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>덕인갈비<p>@</p></strong>
              </a>
            </li>
            <li id='39' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/85/1789585_image2_1.jpg" alt="대복복집">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>대복복집<p>@</p></strong>
              </a>
            </li>
            <li id='32' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/46/2628546_image2_1.jpg" alt="하이랜드호텔">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>하이랜드호텔<p>@</p></strong>
              </a>
            </li>
            <li id='32' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/62/1530262_image2_1.jpg" alt="숲속의 요정">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>숲속의 요정<p>@</p></strong>
              </a>
            </li>
            <li id='32' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/43/2704143_image2_1.jpg" alt="아라누리펜션">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>아라누리펜션<p>@</p></strong>
              </a>
            </li>
            <li id='32' onclick="send_data(this)">
              <img src="http://tong.visitkorea.or.kr/cms/resource/74/2626274_image2_1.jpg" alt="하회 북촌댁">
              <a class="area_dimTxt">
                <strong class="tit_photo"><p>@</p>하회 북촌댁<p>@</p></strong>
              </a>
            </li>
          </ul>
        </div>
      </div>
  </div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
