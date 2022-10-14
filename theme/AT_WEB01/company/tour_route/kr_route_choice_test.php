<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>
<script>
new WOW().init();
</script>

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png"><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <h3 class="wow fadeInDown">TOURLIST</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">투어리즘에 등재된 국내 여행지 코스입니다.</p>
    </div>

</div>
<div class="mdlTxt">
    <h2 class="wow flipInX" data-wow-duration="2s">국내 여행지 코스</h2>
</div>

<style>
  /* 탭 전체 스타일 */
  .tabs {
    margin-top: 50px;
    padding-bottom: 40px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 1000px;
    margin: 0 auto;}

  /* 탭 스타일 */
  .tab_item {
    width: calc(100%/9);
    height: 50px;
    border-bottom: 3px solid #333333;
    background-color: #f8f8f8;
    line-height: 50px;
    font-size: 16px;
    text-align: center;
    color: #333333;
    display: block;
    float: left;
    text-align: center;
    font-weight: bold;
    transition: all 0.2s ease;
  }
  .tab_item:hover {
    opacity: 0.75;
  }

  /* 라디오 버튼 UI삭제*/
  input[name="tab_item"] {
    display: none;
  }

  /* 탭 컨텐츠 스타일 */
  .tab_content {
    display: none;
    clear: both;
    overflow: hidden;
    margin-left: 3%;
  }


  /* 선택 된 지역 콘텐츠를 표시 */
  #local1:checked ~ #local1_content,
  #local2:checked ~ #local2_content,
  #local3:checked ~ #local3_content,
  #local4:checked ~ #local4_content,
  #local5:checked ~ #local5_content,
  #local6:checked ~ #local6_content,
  #local7:checked ~ #local7_content,
  #local8:checked ~ #local8_content,
  #local9:checked ~ #local9_content,
  #local10:checked ~ #local10_content,
  #local11:checked ~ #local11_content,
  #local12:checked ~ #local12_content,
  #local13:checked ~ #local13_content,
  #local14:checked ~ #local14_content,
  #local15:checked ~ #local15_content,
  #local16:checked ~ #local16_content,
  #local17:checked ~ #local17_content,
  #local18:checked ~ #local18_content {
    display: block;
  }

  /* 선택된 탭 스타일 */
  .tabs input:checked + .tab_item {
    background-color: #333333;
    color: #fff;
  }


  .wrap_contView {margin-top: 40px; padding-bottom: 40px; display: table; width:100%; margin-left: 20%}

  .box_cosList{width: 90%;}
  .box_cosList .area_course{width: 35%; margin-right: 20px; margin-top: 20px}
  .box_cosList .area_course:nth-child(3n){margin-right: 0;}
  .box_cosList .area_course .course_des{overflow: hidden; position: relative; height: 125px; background: #358bd9;}
  .box_cosList .area_course .course_des > a{position:absolute;left:0;top:0;right:0;bottom:0;z-index:100;background:rgba(0,0,0,0.3);box-sizing: border-box; padding: 20px 20px;}
  .box_cosList .area_course .course_des strong{overflow:hidden;display:block;display:-webkit-box;height:47px;font-size: 20px; color: #fff; margin-bottom: 7px; font-weight:700; line-height: 1.2;text-overflow:ellipsis;-webkit-line-clamp:2;-webkit-box-orient:vertical;}
  .box_cosList .area_course .course_des ul li{color: #e4f0fa;font-size:12px;}
  .box_cosList .area_course > ul{border: 1px solid #e5e4e4; padding: 0 20px 16px 20px;}
  /*코스 이름 앞 세로 줄*/
  .box_cosList .area_course > ul li{background:url(https://cdn.visitkorea.or.kr/resources/images/sub/line_leftobj.png) 0 0 repeat-y; line-height: 20px;padding:10px 0;}
  .box_cosList .area_course > ul li:first-child{padding-top: 20px;}
  .box_cosList .area_course > ul li:last-child{background:url(https://cdn.visitkorea.or.kr/resources/images/sub/line_leftobj.png) 0 0 no-repeat;}
  /*코스 이름 앞 동그라미*/
  .box_cosList .area_course > ul li > span{display: block; margin-left: -5px; padding-left: 20px; background:url(https://cdn.visitkorea.or.kr/resources/images/sub/ico_leftobj.png) 0 50% no-repeat; color: #000; font-size: 16px;}
  .box_cosList .area_course .course_des .img_thumBg{width: 100%; height: 100%;}

</style>

<div class="tabs">
  <input id="local1" type="radio" name="tab_item" checked>
  <label class="tab_item" for="local1">서울</label>

  <input id="local2" type="radio" name="tab_item">
  <label class="tab_item" for="local2">인천</label>

  <input id="local3" type="radio" name="tab_item">
  <label class="tab_item" for="local3">대전</label>

  <input id="local4" type="radio" name="tab_item">
  <label class="tab_item" for="local4">대구</label>

  <input id="local5" type="radio" name="tab_item">
  <label class="tab_item" for="local5">광주</label>

  <input id="local6" type="radio" name="tab_item">
  <label class="tab_item" for="local6">부산</label>

  <input id="local7" type="radio" name="tab_item">
  <label class="tab_item" for="local7">울산</label>

  <input id="local8" type="radio" name="tab_item">
  <label class="tab_item" for="local8">강원</label>

  <input id="local9" type="radio" name="tab_item">
  <label class="tab_item" for="local9">충북</label>

  <input id="local10" type="radio" name="tab_item">
  <label class="tab_item" for="local10">충남</label>

  <input id="local11" type="radio" name="tab_item">
  <label class="tab_item" for="local11">경북</label>

  <input id="local12" type="radio" name="tab_item">
  <label class="tab_item" for="local12">경남</label>

  <input id="local13" type="radio" name="tab_item">
  <label class="tab_item" for="local13">전북</label>

  <input id="local14" type="radio" name="tab_item">
  <label class="tab_item" for="local14">전남</label>

  <input id="local15" type="radio" name="tab_item">
  <label class="tab_item" for="local15">제주</label>

  <input id="local16" type="radio" name="tab_item">
  <label class="tab_item" for="local16">세종</label>

  <input id="local17" type="radio" name="tab_item">
  <label class="tab_item" for="local17">경기</label>

  <input id="local18" type="radio" name="tab_item">
  <label class="tab_item" for="local18">전체보기</label>

  <div class="tab_content" id="local1_content">
    <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

      <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
        <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
          <a >
            <strong>안면도 여행</strong>
            <ul>
              <li>지역 : 충남 홍성군</li>
              <li>총거리 : 86.4km</li>
            </ul>
          </a>
          <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=83804651-01e0-4809-bde0-13bb26a33618" alt="안면도 여행" class="img_thumBg">
        </div>
        <ul>
          <li>
            <span>
              <a href="https://api.visitkorea.or.kr/search/searchDetail.do">궁리포구</a>
            </span>
          </li>
          <li>
            <span>
              <a href="https://api.visitkorea.or.kr/search/searchDetail.do">속동전망대</a>
            </span>
          </li>
          <li>
            <span>
              <a href="http://www.hongseong.go.kr/prog/tursmCn/tour/sub02_0202/view.do?cntNo=13#map-column-nav">남당항</a>
            </span>
          </li>
          <li>
            <span>
              <a href="https://www.hongseong.go.kr/tour/index.do">홍성방조제</a>
            </span>
          </li>
          <li>
            <span>
              <a href="http://www.brcn.go.kr/tour.do">보령방조제</a>
            </span>
          </li>
          <li>
            <span>
              <a href="http://www.brcn.go.kr/tour.do">보령 충청수영성</a>
            </span>
          </li>
          <li>
            <span>
              <a href="https://api.visitkorea.or.kr/search/searchDetail.do">대천항</a>
            </span>
          </li>
          <li>
            <span>
              <a href="http://www.anmyeonam.org/maha/index.html">안면암(태안)</a>
            </span>
          </li>
          <li>
            <span>
              <a href="http://www.taean.go.kr/tour/sub04_07_01_01.do">고남패총박물관</a>
            </span>
          </li>
          <li>
            <span>
              <a href="http://www.taean.go.kr/tour.do">꽃지해수욕장</a>
            </span>
          </li>
        </ul>
      </div>

      <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
        <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
          <a >
            <strong>마포 나만의 여행</strong>
            <ul>
              <li>지역 : 서울 마포구</li>
              <li>총거리 : 10.4km</li>
            </ul>
              <span id="fimg1" class="img">
                <img src="https://k.kakaocdn.net/dn/OAaxb/btqBAQvmd9N/091xN5C5gaKy5VYKmzK5y0/img_640x640.jpg" alt="강*환" onerror="this.style.visibility='hidden'">
              </span>
          </a>
          <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=764c1158-3749-4db8-911e-c39f9d1fde55" alt="마포 나만의 여행" class="img_thumBg">
        </div>
        <ul>
          <li>
            <span>
              <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=c04a287b-9f68-46c6-b2c4-03255e7333a6">경의선책거리</a>
            </span>
          </li>
          <li>
            <span>
              <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=3fd0af3b-4337-4ba0-8771-042b057d03ad">홍대 프리마켓</a>
            </span>
          </li>
          <li>
            <span>
              <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=7f14adc9-0b27-4db1-bd65-aa82d125875c">공덕동 족발 골목</a>
            </span>
          </li>
          <li>
            <span>
              <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=6a59bb86-f4d1-4e63-97e7-671479ca32a5">월드컵공원</a>
            </span>
          </li>
        </ul>
      </div>

      <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
          <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
            <a>
              <strong>청와대 앞 코스 돌아보기</strong>
              <ul>
                <li>지역 : 서울 종로구</li>
                <li>총거리 : 4.98km</li>
              </ul>
                <span id="fimg1" class="img">
                  <img src="http://photo.mapo.go.kr/photo" alt="강*환" onerror="this.style.visibility='hidden'">
                </span>
            </a>
          </div>
          <ul>
            <li>
              <span>
                <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=c04a287b-9f68-46c6-b2c4-03255e7333a6">광화문</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=3fd0af3b-4337-4ba0-8771-042b057d03ad">명성황후조난지</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=7f14adc9-0b27-4db1-bd65-aa82d125875c">청와대 앞길</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=6a59bb86-f4d1-4e63-97e7-671479ca32a5"> 국립민속박물관&국립민속박물관 어린이박물관</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=6a59bb86-f4d1-4e63-97e7-671479ca32a5">팔레 드 서울</a>
              </span>
            </li>
          </ul>
        </div>

    </div>
  </div>

    <div class="tab_content" id="local2_content">
        인천
    </div>
    <div class="tab_content" id="local3_content">
        대전
    </div>
    <div class="tab_content" id="local4_content">
        대구
    </div>
    <div class="tab_content" id="local5_content">
        광주
    </div>
    <div class="tab_content" id="local6_content">
        부산
    </div>
    <div class="tab_content" id="local7_content">
        울산
    </div>
    <div class="tab_content" id="local8_content">
        강원
    </div>
    <div class="tab_content" id="local9_content">
        충북
    </div>
    <div class="tab_content" id="local10_content">
        충남
    </div>
    <div class="tab_content" id="local11_content">
        경북
    </div>
    <div class="tab_content" id="local12_content">
        경남
    </div>
    <div class="tab_content" id="local13_content">
        전북
    </div>
    <div class="tab_content" id="local14_content">
        전남
    </div>
    <div class="tab_content" id="local15_content">
        제주
    </div>
    <div class="tab_content" id="local16_content">
        세종
    </div>
    <div class="tab_content" id="local17_content">
        경기
    </div>
    <div class="tab_content" id="local18_content">
        전체보기
    </div>

    <script>

    function send_data(ths){

      var str = $(ths).text();
      var world1 = str.split('strong');
      var value = world1[0];

    location.href = "./kr_route_info.php?value=" + value;

    }

    </script>

    <?php
    include_once(G5_THEME_PATH.'/tail.php');
    ?>
