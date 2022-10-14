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
        <h3 class="wow fadeInDown">TOURROUTE</h3>
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
    background-color: #ffffff;
    box-shadow: 0 0 10px rgb(0 0 0 / 20%);
    width: 1000px;
    margin: 0 auto;
    margin-bottom: 100px;
}

  /* 탭 스타일 */
  .tab_item {
    width: calc(100%/9);
    height: 50px;
    border-bottom: 1px solid #333333;
    background-color: #f8f8f8;
    line-height: 50px;
    font-size: 16px;
    text-align: center;
    color: #333333;
    display: block;
    float: left;
    text-align: center;
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
  #local18:checked ~ #local18_content{
    display: block;
  }

  /* 선택된 탭 스타일 */
  .tabs input:checked + .tab_item {
    background-color: #333333;
    color: #fff;
  }

  .wrap_contView {
    positioin : relative;
    width : 1000px;
    margin-left: auto;
    margin-right: auto;
  }

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
  .box_cosList .area_course .course_des:hover img, .box_cosList .area_course .course_des:focus img{ /* a태그에 마우스를 올렸을 때 */transform: scale(1.2);}
  .box_cosList .area_course .course_des img{ transition: 0.3s; }
.course_des p {
  display: none;
}
</style>

<div class="wrap_contView">
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
    <label class="tab_item" for="local18">Best</label>

    <div class="tab_content" id="local1_content">
      <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

        <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
          <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
            <a>
              <strong><p>@</p>종로구 코스<p>@</p></strong>
              <ul>
                <li>지역 : 서울 종로구</li>
                <li>총거리 : 9.5km</li>
              </ul>
            </a>
            <img src="http://tong.visitkorea.or.kr/cms/resource/31/1568231_image2_1.jpg" class="img_thumBg">
          </div>
          <ul>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%ED%9D%AC%EA%B6%81">경희궁</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%B8%EC%A2%85%EB%8C%80%EC%99%95%20%EB%8F%99%EC%83%81">세종대왕 동상</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9D%B8%EC%82%AC%EB%8F%99">인사동</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%8C%88%EC%A7%80%EA%B8%B8">쌈지길</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B6%81%EC%95%85%EC%8A%A4%EC%B9%B4%EC%9D%B4%20%ED%8C%94%EA%B0%81%EC%A0%95">북악스카이 팔각정</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A2%85%EB%AC%98%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EB%AC%B8%ED%99%94%EC%9C%A0%EC%82%B0]">종묘 [유네스코 세계문화유산]</a>
              </span>
            </li>

          </ul>
        </div>

        <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
          <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
            <a >
              <strong><p>@</p>강남구 코스<p>@</p></strong>
              <ul>
                <li>지역 : 서울 강남구</li>
                <li>총거리 : 3.3km</li>
              </ul>
            </a>
            <img src="http://tong.visitkorea.or.kr/cms/resource/42/2658442_image2_1.jpg" class="img_thumBg">
          </div>
          <ul>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%8B%A0%EC%82%AC%EB%8F%99%20%EA%B0%80%EB%A1%9C%EC%88%98%EA%B8%B8">신사동 가로수길</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8F%84%EC%82%B0%EA%B3%B5%EC%9B%90">도산공원</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%95%95%EA%B5%AC%EC%A0%95%20%EB%A1%9C%EB%8D%B0%EC%98%A4%EA%B1%B0%EB%A6%AC">압구정 로데오거리</a>
              </span>
            </li>
            <li>
              <span>
                <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B2%AD%EB%8B%B4%ED%8C%A8%EC%85%98%EA%B1%B0%EB%A6%AC">청담패션거리</a>
              </span>
            </li>
          </ul>
        </div>

        <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>성동구 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 서울 성동구</li>
                  <li>총거리 : 25.4km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/00/2611300_image2_1.bmp" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%9C%EC%9A%B8%EC%88%B2">서울숲</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%A7%88%EB%A1%9C%EB%8B%88%EC%97%90%EA%B3%B5%EC%9B%90">마로니에공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=63%EC%8A%A4%ED%80%98%EC%96%B4">63스퀘어</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%97%AC%EC%9D%98%EB%8F%84%EA%B3%B5%EC%9B%90">여의도공원</a>
                </span>
              </li>
            </ul>
          </div>

      </div>
    </div>

      <div class="tab_content" id="local2_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>강화도 힐링 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 인천 강화군</li>
                  <li>총거리 : 43.3km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/48/1990048_image2_1.jpg"  class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour/kr_tour_info.php?value=%EB%B3%B4%EB%AC%B8%EC%82%AC(%EA%B0%95%ED%99%94)">보문사(강화)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour/kr_tour_info.php?value=%EC%84%9D%EB%AA%A8%EB%8F%84%20%EB%AF%B8%EB%84%A4%EB%9E%84%20%EC%98%A8%EC%B2%9C">석모도 미네랄 온천</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour/kr_tour_info.php?value=%EB%AF%BC%EB%A8%B8%EB%A3%A8%ED%95%B4%EB%B3%80">민머루해변</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour/kr_tour_info.php?value=%EB%B3%BC%EC%9D%8C%EB%8F%84(%EC%A0%80%EC%96%B4%EC%83%88%20%EC%83%9D%ED%83%9C%EB%A7%88%EC%9D%84)">볼음도(저어새 생태마을)</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>강화도 유적지 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 인천 강화군</li>
                  <li>총거리 : 31.7km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/73/1924973_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EA%B0%95%ED%99%94%EB%8F%84">강화도</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EA%B3%A0%EB%A0%A4%EA%B6%81%EC%A7%80">고려궁지</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EA%B3%A0%EB%A0%A4%EC%82%B0">고려산</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EA%B0%95%ED%99%94%20%EA%B3%A0%EC%9D%B8%EB%8F%8C%20%EC%9C%A0%EC%A0%81%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EB%AC%B8%ED%99%94%EC%9C%A0%EC%82%B0]">강화 고인돌 유적 [유네스코 세계문화유산]</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EA%B0%95%ED%99%94%EB%8F%84%EC%A0%9C%EC%A0%81%EB%B4%89%20%ED%8F%89%ED%99%94%EC%A0%84%EB%A7%9D%EB%8C%80">강화도제적봉 평화전망대</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>인천 테마파크 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 인천 중구</li>
                    <li>총거리 : 10.4km</li>
                  </ul>
                </a>
               <img src="http://tong.visitkorea.or.kr/cms/resource/71/1577671_image2_1.jpg" class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%9B%94%EB%AF%B8%EB%8F%84">월미도</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%9B%94%EB%AF%B8%EA%B3%B5%EC%9B%90">월미공원</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%9D%B8%EC%B2%9C%20%EC%B0%A8%EC%9D%B4%EB%82%98%ED%83%80%EC%9A%B4">인천 차이나타운</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%9E%90%EC%9C%A0%EA%B3%B5%EC%9B%90(%EC%9D%B8%EC%B2%9C)">자유공원(인천)</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%97%B0%EC%95%88%EB%B6%80%EB%91%90">연안부두</a>
                  </span>
                </li>
              </ul>
            </div>
        </div>
      </div>

      <div class="tab_content" id="local3_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>체험/관광지 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 대전 중구, 동구</li>
                  <li>총거리 : 54.4km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/02/1585602_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%A7%8C%EC%9D%B8%EC%82%B0%ED%91%B8%EB%A5%B8%ED%95%99%EC%8A%B5%EC%9B%90">만인산푸른학습원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%AC%B4%EC%88%98%EC%B2%9C%ED%95%98%EB%A7%88%EC%9D%84">무수천하마을</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EC%A0%84%EC%98%A4%EC%9B%94%EB%93%9C">대전오월드</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%83%81%EC%86%8C%EB%8F%99%20%EC%82%B0%EB%A6%BC%EC%9A%95%EC%9E%A5">상소동 산림욕장</a>
                </span>
              </li>

            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>피크닉 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 대전 동구, 유성구</li>
                  <li>총거리 : 21.5km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/46/2675746_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9A%B0%EC%95%94%EC%82%AC%EC%A0%81%EA%B3%B5%EC%9B%90">우암사적공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9C%A0%EC%84%B1%EC%98%A8%EC%B2%9C%EC%A7%80%EA%B5%AC">유성온천지구</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%9C%EB%B0%AD%EC%88%98%EB%AA%A9%EC%9B%90">한밭수목원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%86%94%EB%A1%9C%EB%AA%AC%EB%A1%9C%ED%8C%8C%ED%81%AC">솔로몬로파크</a>
                </span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="tab_content" id="local4_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>힐링 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 대구 동구</li>
                  <li>총거리 : 1.9km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/53/2715753_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EA%B5%AC%EC%8B%9C%EB%AF%BC%EC%95%88%EC%A0%84%ED%85%8C%EB%A7%88%ED%8C%8C%ED%81%AC">대구시민안전테마파크</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%8C%94%EA%B3%B5%EC%82%B0%EC%98%A8%EC%B2%9C%EA%B4%80%EA%B4%91%ED%98%B8%ED%85%94(%EC%98%A8%EC%B2%9C)">팔공산온천관광호텔(온천)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%8C%94%EA%B3%B5%EC%82%B0%EC%9E%90%EC%97%B0%EA%B3%B5%EC%9B%90(%EB%8F%99%ED%99%94%EC%82%AC%EC%A7%80%EA%B5%AC)">팔공산자연공원(동화사지구)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8F%99%ED%99%94%EC%82%AC(%EB%8C%80%EA%B5%AC)">동화사(대구)</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>산책로가 너무 이쁜 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 대구 중구</li>
                  <li>총거리 : 6.4km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/94/1026094_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EA%B5%AC%20%EB%8B%AC%EC%84%B1%EA%B3%B5%EC%9B%90">대구 달성공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EA%B5%AC%20%EC%98%A4%ED%86%A0%EB%B0%94%EC%9D%B4%EA%B3%A8%EB%AA%A9">대구 오토바이골목</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour/kr_tour_info.php?value=%EA%B2%BD%EC%83%81%EA%B0%90%EC%98%81%EA%B3%B5%EC%9B%90">경삼감영공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EA%B5%AC%20%EA%B3%84%EC%82%B0%EB%8F%99%EC%84%B1%EB%8B%B9">대구 계산동성당</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EA%B5%AC%ED%96%A5%EA%B5%90">대구향교</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B4%89%EC%82%B0%EB%AC%B8%ED%99%94%EA%B1%B0%EB%A6%AC">봉산문화거리</a>
                </span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="tab_content" id="local5_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>그날의 기록 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 광주 서구</li>
                  <li>총거리 : 12km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/60/2364360_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B4%91%EC%A3%BC%20%EC%98%88%EC%88%A0%EC%9D%98%20%EA%B1%B0%EB%A6%AC">광주 예술의 거리</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B6%A9%EC%9E%A5%EB%A1%9C">충장로</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%82%AC%EC%A7%81%EA%B3%B5%EC%9B%90(%EA%B4%91%EC%A3%BC)">사직공원(광주)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=5%C2%B718%20%EA%B8%B0%EB%85%90%EA%B3%B5%EC%9B%90">5·18 기념공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=5%C2%B718%20%EC%9E%90%EC%9C%A0%EA%B3%B5%EC%9B%90">5·18 자유공원</a>
                </span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="tab_content" id="local6_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>건강 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 부산 동래구</li>
                  <li>총거리 : 11km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/85/2721885_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%8A%A4%ED%8F%AC%EC%9B%90%ED%8C%8C%ED%81%AC">스포원파크</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%97%88%EC%8B%AC%EC%B2%AD">허심청</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B8%88%EA%B0%95%EA%B3%B5%EC%9B%90">금강공원</a>
                </span>
              </li>

            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>부산은 바다! 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 부산 광안리/해운대 </li>
                  <li>총거리 : 12.3km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/75/2648975_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B4%91%EC%95%88%EB%A6%AC%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">광안리해수욕장</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B4%91%EC%95%88%EB%A6%AC%ED%95%B4%EB%B3%80%20%ED%85%8C%EB%A7%88%EA%B1%B0%EB%A6%AC">광안리해변 테마거리</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%8B%A0%EC%84%B8%EA%B3%84%20%EC%84%BC%ED%85%80%EC%8B%9C%ED%8B%B0">신세계 센텀시티</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B6%80%EC%82%B0%20%ED%8B%B0%ED%8C%8C%EB%8B%8821%20%ED%81%AC%EB%A3%A8%EC%A6%88%20%EC%9C%A0%EB%9E%8C%EC%84%A0">부산 티파니21 크루즈 유람선</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%B4%EC%9A%B4%EB%8C%80%20%EB%8F%99%EB%B0%B1%EC%84%AC">해운대 동백섬</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B2%AD%EC%82%AC%ED%8F%AC">청사포</a>
                </span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="tab_content" id="local7_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>바다 포토존 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 울산 동구</li>
                  <li>총거리 : 3.4km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/75/2712575_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EC%99%95%EC%95%94%EA%B3%B5%EC%9B%90">대왕암공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9D%BC%EC%82%B0%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5(%EC%9A%B8%EC%82%B0)">일산해수욕장(울산)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9A%B8%EA%B8%B0%EB%93%B1%EB%8C%80">울기등대</a>
                </span>
              </li>

            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>산속 휴양림 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 울산 울주군</li>
                  <li>총거리 : 32.9km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/99/609199_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B0%84%EC%9B%94%EC%82%B0%20%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC">간월산 자연휴양림</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9E%91%EC%B2%9C%EC%A0%95%EA%B3%84%EA%B3%A1(%EC%9E%91%EA%B4%98%EC%B2%9C)">작천정계곡(작괘천)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9E%90%EC%88%98%EC%A0%95%20%EB%8F%99%EA%B5%B4%EB%82%98%EB%9D%BC">자수정 동굴나라</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B5%AD%EB%A6%BD%20%EC%8B%A0%EB%B6%88%EC%82%B0%ED%8F%AD%ED%8F%AC%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC">국립 신불산폭포자연휴양림</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>야경맛집 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 울산 울주군</li>
                  <li>총거리 : 28.1km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/94/2648694_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B0%84%EC%A0%88%EA%B3%B6%20%EB%93%B1%EB%8C%80">간절곶 등대</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A7%84%ED%95%98%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">진하해수욕장</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B0%9C%EB%A6%AC%EC%98%A8%EC%B2%9C">발리온천</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EC%9A%B4%EC%82%B0">대운산</a>
                </span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="tab_content" id="local8_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>바다 외곽 전역 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 강원도</li>
                  <li>총거리 : 86.4km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/60/2665260_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%86%8D%EC%B4%88%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">속초해수욕장</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B2%9C%EA%B3%A1%ED%99%A9%EA%B8%88%EB%B0%95%EC%A5%90%EB%8F%99%EA%B5%B4">천곡황금박쥐동굴</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%99%98%EC%84%A0%EA%B5%B4%20(%EB%8C%80%EC%9D%B4%EB%A6%AC%20%EB%8F%99%EA%B5%B4%EC%A7%80%EB%8C%80)">환선굴 (대이리 동굴지대)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%83%9C%EB%B0%B1%EC%82%B0%20%EA%B5%AD%EB%A6%BD%EA%B3%B5%EC%9B%90">태백산 국립공원</a>
                </span>
              </li>

            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>동해바다 드라이브 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 강원도 동해/강릉</li>
                  <li>총거리 : 10.4km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/34/2654534_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B6%94%EC%95%94%20%EC%B4%9B%EB%8C%80%EB%B0%94%EC%9C%84">추암 촛대바위</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A0%95%EB%8F%99%EC%A7%84%ED%95%B4%EB%B3%80">정동진해변</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%98%A4%EB%8C%80%EC%82%B0%EA%B5%AD%EB%A6%BD%EA%B3%B5%EC%9B%90">오대산국립공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%82%99%EC%82%B0%20%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">낙산 해수욕장</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%A4%EC%95%85%EC%82%B0%20%EC%BC%80%EC%9D%B4%EB%B8%94%EC%B9%B4">설악산 케이블카</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8D%B8%ED%94%BC%EB%85%B8%ED%98%B8%ED%85%94&%EB%A6%AC%EC%A1%B0%ED%8A%B8%20%EC%98%A4%EC%85%98%ED%94%8C%EB%A0%88%EC%9D%B4">델피노호텔&리조트 오션플레이</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B9%80%EC%9D%BC%EC%84%B1%20%EB%B3%84%EC%9E%A5">김일성 별장</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%A4%EC%95%85%EC%82%B0%EA%B5%AD%EB%A6%BD%EA%B3%B5%EC%9B%90(%EB%82%A8%EC%84%A4%EC%95%85)">설악산국립공원(남설악)</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>강원도 시외 전역 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 강원도</li>
                    <li>총거리 : 4.98km</li>
                  </ul>
                </a>
                <img src="http://tong.visitkorea.or.kr/cms/resource/55/1950455_image2_1.jpg" class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B2%99%EC%82%B0%EC%98%A8%EC%B2%9C%EC%A7%80%EA%B5%AC">척산온천지구</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%99%EC%82%AC%ED%8F%89%20%EC%BD%A9%EA%BD%83%EB%A7%88%EC%9D%84%20%EC%88%9C%EB%91%90%EB%B6%80%EC%B4%8C">학사평 콩꽃마을 순두부촌</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9A%A9%EC%86%8C%EA%B3%84%EA%B3%A1">용소계곡</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%86%8C%EB%85%B8%EB%B2%A8%20%EB%B9%84%EB%B0%9C%EB%94%94%ED%8C%8C%ED%81%AC%20%EC%98%A4%EC%85%98%EC%9B%94%EB%93%9C">소노벨 비발디파크 오션월드</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B3%91%EB%B0%A9%EC%B9%98%20%EC%8A%A4%EC%B9%B4%EC%9D%B4%EC%9B%8C%ED%81%AC">병방치 스카이워크</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B0%94%EB%8B%A4%EC%97%B4%EC%B0%A8">바다열차</a>
                  </span>
                </li>
              </ul>
            </div>

        </div>
      </div>

      <div class="tab_content" id="local9_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>여름철 계곡 여행 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 충청북도 제천시</li>
                  <li>총거리 : 65.3km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/35/176535_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8D%95%EB%8F%99%EA%B3%84%EA%B3%A1">덕동계곡</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%83%81%EC%82%AC%EC%A0%95">탁사정</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A0%9C%EC%B2%9C%20%EC%9D%98%EB%A6%BC%EC%A7%80%EC%99%80%20%EC%A0%9C%EB%A6%BC">제천 의림지와 제림</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8A%A5%EA%B0%95%EA%B3%84%EA%B3%A1,%20%EC%96%BC%EC%9D%8C%EA%B3%A8">능강계곡, 얼음골</a>
                </span>
              </li>

            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>단양 휴양림 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 충청북도 단양군</li>
                  <li>총거리 : 32.1km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/97/2366297_image2_1.jpg"  class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8B%A8%EC%96%91%20%EC%B2%9C%EB%8F%99%EB%8F%99%EA%B5%B4">단양 천동동굴</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8B%A8%EC%96%91%20%EB%8B%A4%EB%A6%AC%EC%95%88%EA%B4%80%EA%B4%91%EC%A7%80">단양 다리안관광지</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8B%A4%EB%A6%AC%EC%95%88%EA%B3%84%EA%B3%A1">다리안계곡</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8B%A8%EC%96%91%20%EC%A0%81%EC%84%B1">단양 적성</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%86%8C%EC%84%A0%EC%95%94%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC">소선암자연휴양림</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%A0%EC%95%94%EA%B3%84%EA%B3%A1(%ED%95%98%EC%84%A0%EC%95%94)">선암계곡(하선암)</a>
                </span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="tab_content" id="local10_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>휴양림(절) 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 충청남도 서산시</li>
                  <li>총거리 : 89.5km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/55/1954555_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%9C%EC%82%B0%20%EC%9A%A9%ED%98%84%EB%A6%AC%20%EB%A7%88%EC%95%A0%EC%97%AC%EB%9E%98%EC%82%BC%EC%A1%B4%EC%83%81">서산 용현리 마애여래삼존상</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B5%AD%EB%A6%BD%20%EC%9A%A9%ED%98%84%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC">국립 용현자연휴양림</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B0%9C%EC%8B%AC%EC%82%AC(%EC%84%9C%EC%82%B0)">개심사(서산)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B0%80%EC%95%BC%EC%82%B0(%EC%84%9C%EC%82%B0)">가야산(서산)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%9C%EC%82%B0%20%ED%95%B4%EB%AF%B8%EC%9D%8D%EC%84%B1">서산 해미읍성</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B6%80%EC%84%9D%EC%82%AC(%EC%84%9C%EC%82%B0)">부석사(서산)</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>백제 유적지 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 충청남도 부여군</li>
                  <li>총거리 : 5.2km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/40/2366340_image2_1.jpg"  class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%9C%EB%8F%99%EA%B3%B5%EC%9B%90%EA%B3%BC%20%EA%B6%81%EB%82%A8%EC%A7%80">서동공원과 궁남지</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B6%80%EC%97%AC%20%EC%A0%95%EB%A6%BC%EC%82%AC%EC%A7%80%20%EC%98%A4%EC%B8%B5%EC%84%9D%ED%83%91%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EC%9C%A0%EC%82%B0]">부여 정림사지 오층석탑 [유네스코 세계유산]</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B4%80%EB%B6%81%EB%A6%AC%EC%9C%A0%EC%A0%81%EA%B3%BC%20%EB%B6%80%EC%86%8C%EC%82%B0%EC%84%B1%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EC%9C%A0%EC%82%B0]">관북리유적과 부소산성 [유네스코 세계유산]</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%82%99%ED%99%94%EC%95%94">낙화암</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B0%B1%EC%A0%9C%EB%AC%B8%ED%99%94%EB%8B%A8%EC%A7%80">백제문화단지</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>유네스코 유적지 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 충청남도 공주시</li>
                    <li>총거리 : 29.8km</li>
                  </ul>
                </a>
               <img src="http://tong.visitkorea.or.kr/cms/resource/75/2678675_image2_1.jpg"  class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B3%B5%EC%A3%BC%20%EA%B3%B5%EC%82%B0%EC%84%B1%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EC%9C%A0%EC%82%B0]">공주 공산성 [유네스코 세계유산]</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B3%B5%EC%A3%BC%20%EB%AC%B4%EB%A0%B9%EC%99%95%EB%A6%89%EA%B3%BC%20%EC%99%95%EB%A6%89%EC%9B%90[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EC%9C%A0%EC%82%B0]">공주 무령왕릉과 왕릉원[유네스코 세계유산]</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B3%84%EB%A3%A1%EC%82%B0%EA%B5%AD%EB%A6%BD%EA%B3%B5%EC%9B%90">계룡산국립공원</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B0%91%EC%82%AC%EA%B3%84%EA%B3%A1">갑사계곡</a>
                  </span>
                </li>
              </ul>
            </div>

        </div>
      </div>

      <div class="tab_content" id="local11_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>시원한 여름 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 경상북도 포항시</li>
                  <li>총거리 : 55.3km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/21/2671621_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%98%EC%98%A5%EA%B3%84%EA%B3%A1">하옥계곡</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B3%B4%EA%B2%BD%EC%82%AC%2012%ED%8F%AD%ED%8F%AC%20(%EC%83%81%EC%83%9D%ED%8F%AD%ED%8F%AC)">보경사 12폭포 (상생폭포)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%83%81%EB%B6%81%EB%8F%84%EC%88%98%EB%AA%A9%EC%9B%90">경상북도수목원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9B%94%ED%8F%AC%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">월포해수욕장</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%99%94%EC%A7%84%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">화진해수욕장</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>문화유산 관광 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 경상북도 경주시</li>
                  <li>총거리 : 58.3km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/37/2712637_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%EB%B6%88%EA%B5%AD%EC%82%AC%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EB%AC%B8%ED%99%94%EC%9C%A0%EC%82%B0]">경주 불국사 [유네스코 세계문화유산]</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%EC%84%9D%EA%B5%B4%EC%95%94%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EB%AC%B8%ED%99%94%EC%9C%A0%EC%82%B0]">경주 석굴암 [유네스코 세계문화유산]</a>
                </span>
              </li>

              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%EA%B5%AD%EB%A6%BD%EA%B3%B5%EC%9B%90">경주국립공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%EB%B3%B4%EB%AC%B8%EA%B4%80%EA%B4%91%EB%8B%A8%EC%A7%80">경주 보문관광단지</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B3%B4%EB%AC%B8%ED%98%B8">보문호</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>역사 유적지 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 경상북도 경주시</li>
                    <li>총거리 : 11km</li>
                  </ul>
                </a>
                <img src="http://tong.visitkorea.or.kr/cms/resource/66/179566_image2_1.jpg" class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%EA%B9%80%EC%9C%A0%EC%8B%A0%EB%AC%98">경주 김유신묘</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B2%9C%EB%A7%88%EC%B4%9D(%EB%8C%80%EB%A6%89%EC%9B%90)">천마총(대릉원)</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%EC%97%AD%EC%82%AC%EC%9C%A0%EC%A0%81%EC%A7%80%EA%B5%AC[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EB%AC%B8%ED%99%94%EC%9C%A0%EC%82%B0]">경주역사유적지구[유네스코 세계문화유산]</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%EC%B2%A8%EC%84%B1%EB%8C%80">경주 첨성대</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%ED%8F%AC%EC%84%9D%EC%A0%95%EC%A7%80">경주 포석정지</a>
                  </span>
                </li>

              </ul>
            </div>

        </div>
      </div>

      <div class="tab_content" id="local12_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>바다 휴양지 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 경상남도 거제시</li>
                  <li>총거리 : 86.4km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/76/2367576_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B1%B0%EC%A0%9C%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC">거제자연휴양림</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%99%EB%8F%99%ED%9D%91%EC%A7%84%EC%A3%BC%EB%AA%BD%EB%8F%8C%ED%95%B4%EB%B3%80">학동흑진주몽돌해변</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B1%B0%EC%A0%9C%EB%8F%84%20%ED%95%B4%EA%B8%88%EA%B0%95">거제도 해금강</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%8B%A0%EC%84%A0%EB%8C%80%20%EC%A0%84%EB%A7%9D%EB%8C%80">신선대 전망대</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%B4%EA%B8%88%EA%B0%95%EC%9C%A0%EB%9E%8C%EC%84%A0">해금강유람선</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>섬 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 경상남도 통영시</li>
                  <li>총거리 : 10.4km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/30/2363530_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9A%95%EC%A7%80%EB%8F%84%20(%EC%9C%A0%EB%8F%99%EC%96%B4%EC%B4%8C%EC%B2%B4%ED%97%98%EB%A7%88%EC%9D%84)">욕지도 (유동어촌체험마을)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%A7%A4%EB%AC%BC%EB%8F%84">매물도</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%86%8C%EB%A7%A4%EB%AC%BC%EB%8F%84">소매물도</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B9%84%EC%A7%84%EB%8F%84%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">비진도해수욕장</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%AF%B8%EB%A5%B5%EC%82%B0(%ED%86%B5%EC%98%81)">미륵산(통영)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%82%A8%EB%A7%9D%EC%82%B0%20%EC%A1%B0%EA%B0%81%EA%B3%B5%EC%9B%90">남망산 조각공원</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>산-바다 힐링 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 경상남도 남해군</li>
                    <li>총거리 : 4.98km</li>
                  </ul>
                </a>
                <img src="http://tong.visitkorea.or.kr/cms/resource/81/1292681_image2_1.jpg" class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B8%88%EC%99%95%EC%82%AC">금왕사</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B8%88%EC%82%B0%20%EB%B3%B4%EB%A6%AC%EC%95%94(%EB%82%A8%ED%95%B4)">금산 보리암(남해)</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%83%81%EC%A3%BC%EC%9D%80%EB%AA%A8%EB%9E%98%EB%B9%84%EC%B9%98">상주은모래비치</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%82%A8%ED%95%B4%20%EA%B8%88%EC%82%B0%20%EB%B4%89%EC%88%98%EB%8C%80">남해 금산 봉수대</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%86%A1%EC%A0%95%20%EC%86%94%EB%B0%94%EB%9E%8C%ED%95%B4%EB%B3%80">송정 솔바람해변</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%82%A8%ED%95%B4%20%ED%95%AD%EB%8F%84%EC%96%B4%EC%B4%8C%EC%B2%B4%ED%97%98%EB%A7%88%EC%9D%84">남해 항도어촌체험마을</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B5%AD%EB%A6%BD%20%EB%82%A8%ED%95%B4%ED%8E%B8%EB%B0%B1%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC">국립 남해편백자연휴양림</a>
                  </span>
                </li>
              </ul>
            </div>

        </div>
      </div>

      <div class="tab_content" id="local13_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>한옥마을 인근 탐방 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 전라북도 전주시</li>
                  <li>총거리 : 22.5km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/67/2654567_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A0%84%EC%A3%BC%ED%96%A5%EA%B5%90">전주향교</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A0%84%EC%A3%BC%EC%A0%84%EB%8F%99%EC%84%B1%EB%8B%B9">전주전동성당</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EA%B8%B0%EC%A0%84">경기전</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A0%84%EB%B6%81%20%EC%A0%84%EC%A3%BC%20%ED%95%9C%EC%98%A5%EB%A7%88%EC%9D%84%20[%EC%8A%AC%EB%A1%9C%EC%8B%9C%ED%8B%B0]">전북 전주 한옥마을 [슬로시티]</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%9C%EA%B5%AD%EB%8F%84%EB%A1%9C%EA%B3%B5%EC%82%AC%EC%88%98%EB%AA%A9%EC%9B%90">한국도로공사수목원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8D%95%EC%A7%84%EA%B3%B5%EC%9B%90">덕진공원</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>국립 자연휴양림 힐링 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 전라북도 무주군</li>
                  <li>총거리 : 58.1km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/98/1196798_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B5%AD%EB%A6%BD%20%EB%8D%95%EC%9C%A0%EC%82%B0%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC">국립 덕유산자연휴양림</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8D%95%EC%9C%A0%EC%82%B0%EA%B5%AD%EB%A6%BD%EA%B3%B5%EC%9B%90(%EB%B3%B8%EC%86%8C,%EC%A0%81%EC%83%81%EB%B6%84%EC%86%8C)">덕유산국립공원(본소,적상분소)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%AC%B4%EC%A3%BC%EB%A6%AC%EC%A1%B0%ED%8A%B8%20%EA%B4%80%EA%B4%91%EA%B3%A4%EB%8F%84%EB%9D%BC">무주리조트 관광곤도라</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%96%A5%EC%A0%81%EB%B4%89(%EB%8D%95%EC%9C%A0%EC%82%B0)">향적봉(덕유산)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B9%A0%EC%97%B0%EA%B3%84%EA%B3%A1">칠연계곡</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A0%81%EC%83%81%EC%82%B0">적상산</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%AC%B4%EC%A3%BC%EB%A8%B8%EB%A3%A8%EC%99%80%EC%9D%B8%EB%8F%99%EA%B5%B4">무주머루와인동굴</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>불교 역사 탐방 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 전라북도 익산시</li>
                    <li>총거리 : 17.1km</li>
                  </ul>
                </a>
                <img src="http://tong.visitkorea.or.kr/cms/resource/91/2514991_image2_1.jpg" class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9D%B5%EC%82%B0%ED%96%A5%EA%B5%90">익산향교</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%84%9C%EB%8F%99%EA%B3%B5%EC%9B%90">서동공원</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9D%B5%EC%82%B0%20%EB%AF%B8%EB%A5%B5%EC%82%AC%EC%A7%80%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EC%9C%A0%EC%82%B0]">익산 미륵사지 [유네스코 세계유산]</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9D%B5%EC%82%B0%20%EB%AF%B8%EB%A5%B5%EC%82%AC%EC%A7%80%20%EB%8B%B9%EA%B0%84%EC%A7%80%EC%A3%BC">익산 미륵사지 당간지주</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9D%B5%EC%82%B0%EC%A0%9C%EC%84%9D%EC%82%AC%EC%A7%80">익산제석사지</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%A7%9D%EB%AA%A8%EB%8B%B9">망모당</a>
                  </span>
                </li>
              </ul>
            </div>

        </div>
      </div>

      <div class="tab_content" id="local14_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>여수밤바다 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 전라남도 여수시</li>
                  <li>총거리 : 31.6km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/82/1607882_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%A7%8C%EC%84%B1%EB%A6%AC%20%EA%B2%80%EC%9D%80%EB%AA%A8%EB%9E%98%ED%95%B4%EB%B3%80">만성리 검은모래해변</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8F%8C%EC%82%B0%EA%B3%B5%EC%9B%90">돌산공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B0%A9%EC%A3%BD%ED%8F%AC%ED%95%B4%EB%B3%80">방죽포해변</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%96%A5%EC%9D%BC%EC%95%94(%EC%97%AC%EC%88%98)">향일암(여수)</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>대나무테마 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 전라남도 담양군</li>
                  <li>총거리 : 26.7km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/02/2612602_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8B%B4%EC%96%91%20%EA%B8%88%EC%84%B1%EC%82%B0%EC%84%B1">담양 금성산성</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8C%80%EB%82%98%EB%AC%B4%EA%B3%A8%20%ED%85%8C%EB%A7%88%EA%B3%B5%EC%9B%90">대나무골 테마공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8B%B4%EC%96%91%20%EB%A9%94%ED%83%80%EC%84%B8%EC%BF%BC%EC%9D%B4%EC%95%84%EA%B8%B8">담양 메타세쿼이아길</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A3%BD%EB%85%B9%EC%9B%90">죽녹원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A3%BD%ED%99%94%EA%B2%BD">죽화경</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>땅끝마을 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 전라남도 해남군</li>
                    <li>총거리 : 10.9km</li>
                  </ul>
                </a>
               <img src="http://tong.visitkorea.or.kr/cms/resource/92/981992_image2_1.jpg" class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%86%A1%ED%98%B8%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">송호해수욕장</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B0%88%EB%91%90%EB%A7%88%EC%9D%84(%EB%95%85%EB%81%9D%EB%A7%88%EC%9D%84)">갈두마을(땅끝마을)</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%95%85%EB%81%9D%EA%B4%80%EA%B4%91%EC%A7%80">땅끝관광지</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%82%AC%EA%B5%AC%EB%AF%B8%ED%95%B4%EB%B3%80">사구미해변</a>
                  </span>
                </li>
              </ul>
            </div>

        </div>
      </div>

      <div class="tab_content" id="local15_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>서귀포 관광명소 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 제주도 서귀포시</li>
                  <li>총거리 : 78.3km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/99/1632499_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%9C%EB%9D%BC%EC%82%B0%20%EB%B0%B1%EB%A1%9D%EB%8B%B4">한라산 백록담</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%9C%B4%EC%95%A0%EB%A6%AC%EC%9E%90%EC%97%B0%EC%83%9D%ED%99%9C%EA%B3%B5%EC%9B%90">휴애리자연생활공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B2%9C%EC%A7%80%EC%97%B0%ED%8F%AD%ED%8F%AC%20(%EC%A0%9C%EC%A3%BC%EB%8F%84%20%EA%B5%AD%EA%B0%80%EC%A7%80%EC%A7%88%EA%B3%B5%EC%9B%90)">천지연폭포 (제주도 국가지질공원)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%99%B8%EB%8F%8C%EA%B0%9C(%EC%A0%9C%EC%A3%BC)">외돌개(제주)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A3%BC%EC%83%81%EC%A0%88%EB%A6%AC%EB%8C%80(%EB%8C%80%ED%8F%AC%EB%8F%99%EC%A7%80%EC%82%BF%EA%B0%9C)">주상절리대(대포동지삿개)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9A%A9%EB%A8%B8%EB%A6%AC%ED%95%B4%EC%95%88">용머리해안</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%A7%88%EB%9D%BC%EB%8F%84(%EB%A7%88%EB%9D%BC%ED%95%B4%EC%96%91%EB%8F%84%EB%A6%BD%EA%B3%B5%EC%9B%90)">마라도(마라해양도립공원)</a>
                </span>
              </li>

            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>한라산 인근 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 제주도 제주시</li>
                  <li>총거리 : 61.7km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/25/2675025_image2_1.JPG" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%9C%EB%9D%BC%EC%82%B0%20(%EC%A0%9C%EC%A3%BC%EB%8F%84%20%EA%B5%AD%EA%B0%80%EC%A7%80%EC%A7%88%EA%B3%B5%EC%9B%90)">한라산 (제주도 국가지질공원)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%9C%EB%9D%BC%EC%88%98%EB%AA%A9%EC%9B%90">한라수목원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%97%90%EC%BD%94%EB%9E%9C%EB%93%9C%ED%85%8C%EB%A7%88%ED%8C%8C%ED%81%AC">에코랜드테마파크</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B1%B0%EB%AC%B8%EC%98%A4%EB%A6%84%20[%EC%84%B8%EA%B3%84%EC%9E%90%EC%97%B0%EC%9C%A0%EC%82%B0]">거문오름 [세계자연유산]</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%A7%8C%EC%9E%A5%EA%B5%B4%20(%EC%A0%9C%EC%A3%BC%EB%8F%84%20%EA%B5%AD%EA%B0%80%EC%A7%80%EC%A7%88%EA%B3%B5%EC%9B%90)">만장굴 (제주도 국가지질공원)</a>
                </span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="tab_content" id="local16_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>여가 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 세종시 전동면, 금난면 </li>
                  <li>총거리 : 37.5km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/17/1598617_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B8%88%EA%B0%95%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC(%EA%B8%88%EA%B0%95%EC%88%98%EB%AA%A9%EC%9B%90,%EC%82%B0%EB%A6%BC%EB%B0%95%EB%AC%BC%EA%B4%80)">금강자연휴양림(금강수목원,산림박물관)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B2%A0%EC%96%B4%ED%8A%B8%EB%A6%AC%ED%8C%8C%ED%81%AC">베어트리파크</a>
                </span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      <div class="tab_content" id="local17_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px; height:auto">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a>
                <strong><p>@</p>용인 인근 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 경기도 용인시</li>
                  <li>총거리 : 116.5km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/68/1939868_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%ED%9D%AC%EC%B2%9C%EB%AC%B8%EB%8C%80">경희천문대</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B3%B4%EC%A0%95%EB%8F%99%EC%B9%B4%ED%8E%98%EA%B1%B0%EB%A6%AC">보정동카페거리</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%9C%ED%83%9D%EC%8B%9D%EB%AC%BC%EC%9B%90">한택식물원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%BA%90%EB%A6%AC%EB%B9%84%EC%95%88%EB%B2%A0%EC%9D%B4">캐리비안베이</a>
                </span>
              </li>

            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>전망대 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 경기도 파주시</li>
                  <li>총거리 : 66km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/15/2706515_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%A0%9C3%EB%95%85%EA%B5%B4">제3땅굴</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%8F%84%EB%9D%BC%EC%A0%84%EB%A7%9D%EB%8C%80">도라전망대</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%8C%90%EB%AC%B8%EC%A0%90">판문점</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%8C%8C%EC%A3%BC%20%EC%9E%84%EC%A7%84%EA%B0%81(%ED%8F%89%ED%99%94%EB%88%84%EB%A6%AC%EA%B3%B5%EC%9B%90)">파주 임진각(평화누리공원)</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%97%A4%EC%9D%B4%EB%A6%AC%20%EC%98%88%EC%88%A0%EB%A7%88%EC%9D%84">헤이리 예술마을</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%98%A4%EB%91%90%EC%82%B0%20%ED%86%B5%EC%9D%BC%EC%A0%84%EB%A7%9D%EB%8C%80">오두산 통일전망대</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%8C%8C%EC%A3%BC%20%EC%B6%9C%ED%8C%90%EB%8F%84%EC%8B%9C">파주 출판도시</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>플라워 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 경기도 포천시</li>
                    <li>총거리 : 84.8km</li>
                  </ul>
                </a>
                <img src="http://tong.visitkorea.or.kr/cms/resource/71/2366971_image2_1.jpg" class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%8B%A0%EB%B6%81%EB%A6%AC%EC%A1%B0%ED%8A%B8%20%EC%8A%A4%ED%94%84%EB%A7%81%ED%8F%B4">신북리조트 스프링폴</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%8F%AC%EC%B2%9C%20%ED%97%88%EB%B8%8C%EC%95%84%EC%9D%BC%EB%9E%9C%EB%93%9C">포천 허브아일랜드</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%99%95%EB%B0%A9%EC%82%B0">왕방산</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B5%AD%EB%A6%BD%20%EC%9A%B4%EC%95%85%EC%82%B0%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC">국립 운악산자연휴양림</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B2%AD%EA%B3%84%EC%A0%80%EC%88%98%EC%A7%80">청계저수지</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%9D%BC%EB%8F%99%EC%A0%9C%EC%9D%BC%EC%9C%A0%ED%99%A9%EC%98%A8%EC%B2%9C">일동제일유황온천</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B5%AD%EB%A7%9D%EB%B4%89%EC%9E%90%EC%97%B0%ED%9C%B4%EC%96%91%EB%A6%BC(%ED%8F%AC%EC%B2%9C)">국망봉자연휴양림(포천)</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B0%B1%EC%9A%B4%EA%B3%84%EA%B3%A1%20(%ED%95%9C%ED%83%84%EA%B0%95%20%EA%B5%AD%EA%B0%80%EC%A7%80%EC%A7%88%EA%B3%B5%EC%9B%90)">백운계곡 (한탄강 국가지질공원)</a>
                  </span>
                </li>

              </ul>
            </div>

        </div>
      </div>

      <div class="tab_content" id="local18_content">
        <div id="snscourseDiv"class="box_cosList grid userName" style="position: relative; height: 600px;">

          <div class="area_course grid-item" style="position: absolute; left: 0px; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>부산은 바다! 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 부산 광안리/해운대 </li>
                  <li>총거리 : 12.3km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/75/2648975_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B4%91%EC%95%88%EB%A6%AC%ED%95%B4%EC%88%98%EC%9A%95%EC%9E%A5">광안리해수욕장</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B4%91%EC%95%88%EB%A6%AC%ED%95%B4%EB%B3%80%20%ED%85%8C%EB%A7%88%EA%B1%B0%EB%A6%AC">광안리해변 테마거리</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%8B%A0%EC%84%B8%EA%B3%84%20%EC%84%BC%ED%85%80%EC%8B%9C%ED%8B%B0">신세계 센텀시티</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B6%80%EC%82%B0%20%ED%8B%B0%ED%8C%8C%EB%8B%8821%20%ED%81%AC%EB%A3%A8%EC%A6%88%20%EC%9C%A0%EB%9E%8C%EC%84%A0">부산 티파니21 크루즈 유람선</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%ED%95%B4%EC%9A%B4%EB%8C%80%20%EB%8F%99%EB%B0%B1%EC%84%AC">해운대 동백섬</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EC%B2%AD%EC%82%AC%ED%8F%AC">청사포</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 38%; top: 0px;">
            <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
              <a >
                <strong><p>@</p>문화유산 관광 코스<p>@</p></strong>
                <ul>
                  <li>지역 : 경상북도 경주시</li>
                  <li>총거리 : 58.3km</li>
                </ul>
              </a>
              <img src="http://tong.visitkorea.or.kr/cms/resource/37/2712637_image2_1.jpg" class="img_thumBg">
            </div>
            <ul>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%EB%B6%88%EA%B5%AD%EC%82%AC%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EB%AC%B8%ED%99%94%EC%9C%A0%EC%82%B0]">경주 불국사 [유네스코 세계문화유산]</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%EC%84%9D%EA%B5%B4%EC%95%94%20[%EC%9C%A0%EB%84%A4%EC%8A%A4%EC%BD%94%20%EC%84%B8%EA%B3%84%EB%AC%B8%ED%99%94%EC%9C%A0%EC%82%B0]">경주 석굴암 [유네스코 세계문화유산]</a>
                </span>
              </li>

              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%EA%B5%AD%EB%A6%BD%EA%B3%B5%EC%9B%90">경주국립공원</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EA%B2%BD%EC%A3%BC%20%EB%B3%B4%EB%AC%B8%EA%B4%80%EA%B4%91%EB%8B%A8%EC%A7%80">경주 보문관광단지</a>
                </span>
              </li>
              <li>
                <span>
                  <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=%EB%B3%B4%EB%AC%B8%ED%98%B8">보문호</a>
                </span>
              </li>
            </ul>
          </div>

          <div class="area_course grid-item" style="position: absolute; left: 75%; top: 0px;">
              <div class="course_des" onclick="send_data(this)" value="<?echo $row['strong'];?>">
                <a>
                  <strong><p>@</p>인천 테마파크 코스<p>@</p></strong>
                  <ul>
                    <li>지역 : 인천 중구</li>
                    <li>총거리 : 10.4km</li>
                  </ul>
                </a>
               <img src="http://tong.visitkorea.or.kr/cms/resource/71/1577671_image2_1.jpg" class="img_thumBg">
              </div>
              <ul>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%9B%94%EB%AF%B8%EB%8F%84">월미도</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%9B%94%EB%AF%B8%EA%B3%B5%EC%9B%90">월미공원</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%9D%B8%EC%B2%9C%20%EC%B0%A8%EC%9D%B4%EB%82%98%ED%83%80%EC%9A%B4">인천 차이나타운</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%9E%90%EC%9C%A0%EA%B3%B5%EC%9B%90(%EC%9D%B8%EC%B2%9C)">자유공원(인천)</a>
                  </span>
                </li>
                <li>
                  <span>
                    <a href="https://idox23.cafe24.com/theme/AT_WEB01/company/kr_tour_info.php?value=%EC%97%B0%EC%95%88%EB%B6%80%EB%91%90">연안부두</a>
                  </span>
                </li>
              </ul>
            </div>

        </div>
      </div>
  </div>
</div>

    <script>
      function send_data(ths){

        var str = $(ths).text();
        var world1 = str.split('@');
        var value = world1[1];

      location.href = "./kr_route_list.php?value=" + value;
      }
      function send_data2(ths){

        var str = $(ths).text();
        var world1 = str.split('@');
        var value = world1[1];

      location.href = "./kr_route_list.php?value=" + value;
      }
    </script>

    <?php
    include_once(G5_THEME_PATH.'/tail.php');
    ?>
