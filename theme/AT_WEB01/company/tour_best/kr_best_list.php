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
    <p class="wow fadeInDown" data-wow-delay="0.2s">투어리즘에 등재된 국내 인기 여행지 목록입니다.</p>
  </div>
</div>

<style>
.wrap_contView {
    margin-top: 40px;
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
    width: 120px;
    height: 60px;
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
  color: #000;
}

span {
  display: inline-block;
  margin-left: 8px;
  margin-top: 7px;
  font-size: 16px;
  color: #666;
  vertical-align: middle;
}

.area_msListPc {
    width: 60%;
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
  width: 55%;
  margin-left: 20%;
  box-sizing: border-box;
  display: block;
}

.listBn_msPc li {
    float: left;
    position: relative;
    width: 140px;
    height: 140px;
    margin-right: 20px;
    margin-top: 20px;
    box-sizing: border-box;
    display: list-item;
}

.area_dimTxt {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    color: #ffffff;
    padding: 56px 0;
    text-align: center;
    background: url(https://cdn.visitkorea.or.kr/resources/images/sub/bg_dim.png) 0 0 repeat;
}

.listBn_msPc li.list_more a {
    display: block;
    box-sizing: border-box;
    padding: 56px 0;
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

p {
  display: none;
}
</style>

<script>
function send_data(ths){
  var str = $(ths).text();
  var world1 = str.split('@');
  var value = world1[1];

  alert('값 : ' + value);
  location.href = "test.php?value=" + value;
}
</script>

<div class="tit_pos">
  <h2>인기</h2>
</div>

<div class="wrap_contView">
  <h3>지역</h3>
  <div class="area_msListPc">
    <ul class="clfix">
      <li onclick="send_data(this)"><a>서울</a></li>
			<li onclick="send_data(this)"><a>인천</a></li>
			<li onclick="send_data(this)"><a>대전</a></li>
			<li onclick="send_data(this)"><a>대구</a></li>
			<li onclick="send_data(this)"><a>광주</a></li>
		  <li onclick="send_data(this)"><a>부산</a></li>
			<li onclick="send_data(this)"><a>울산</a></li>
			<li onclick="send_data(this)"><a>세종</a></li>
			<li onclick="send_data(this)"><a>경기</a></li>
		</ul>
		<ul class="clfix">
			<li onclick="send_data(this)"><a>강원</a></li>
			<li onclick="send_data(this)"><a>충북</a></li>
			<li onclick="send_data(this)"><a>충남</a></li>
			<li onclick="send_data(this)"><a>경북</a></li>
			<li onclick="send_data(this)"><a>경남</a></li>
			<li onclick="send_data(this)"><a>전북</a></li>
			<li onclick="send_data(this)"><a>전남</a></li>
			<li onclick="send_data(this)"><a>제주</a></li>
			<li onclick="send_data(this)"><a>전체보기</a></li>
		</ul>
	</div>
  <!--
	<div class="area_msListM m_block"> mobile 버전
		<select name="areaselect" title="지역 선택" id="areaselect" onchange="saveAreaClickLog(this.value)">
		  <option value="">지역 선택</option>
			<option value="1">서울</option>
			<option value="2">인천</option>
			<option value="3">대전</option>
			<option value="4">대구</option>
			<option value="5">광주</option>
			<option value="6">부산</option>
			<option value="7">울산</option>
			<option value="8">세종</option>
			<option value="31">경기</option>
			<option value="32">강원</option>
			<option value="33">충북</option>
			<option value="34">충남</option>
			<option value="35">경북</option>
			<option value="36">경남</option>
			<option value="37">전북</option>
			<option value="38">전남</option>
			<option value="39">제주</option>
			<option value="All">전체보기</option>
    </select>
  </div>
  -->
</div>

<div class="wrap_contView">
  <h3 class="tit_atc">5월 SNS 인기 여행지 Top 11<span class="date">인스타그램 추천 여행지를 소개합니다.</span></h3>
  <div class="listBn_msPc">
    <ul class="clfix">
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=1e1b4c6a-0c58-4555-9227-c125a13fee15" alt="덕수궁">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>덕수궁<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=3ed2274f-fa68-478f-be5d-6ffd41cccc2b" alt="안성팜랜드">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>안성팜랜드<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=1cc4734b-206f-4386-ac67-b1d561d87bce" alt="오륙도 스카이워크">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>오륙도 스카이워크<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=2bdc152f-5986-4f88-a5fa-88345e933e26" alt="군위 화산산성 전망대">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>군위 화산산성 전망대<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=15812fdf-76ae-488c-b986-f84cbb2059c7" alt="설악산 국립공원(외설악)">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>설악산 국립공원(외설악)<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=e0e96ab4-dda5-4a78-8563-b16cceb9d617" alt="의암호">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>의암호<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
    </ul>
    <ul class="clfix">
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=cc393543-b473-4e48-ae12-d490536fcf3b" alt="농암종택">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>농암종택<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=84e06048-2803-4be8-ae61-5e658ff0ca61" alt="소노캄 거제 마리나베이 요트투어">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>소노캄 거제 마리나베이 요트투어<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=b62c97a6-5a43-412d-bd43-1b326ca6cca6" alt="경복궁">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>경복궁<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=593ec92b-d730-4103-a180-a912404bfc7a" alt="훈데르트바서파크">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>훈데르트바서파크<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li onclick="send_data(this)">
        <img src="https://cdn.visitkorea.or.kr/img/call?cmd=VIEW&amp;id=9c05eb29-7c9e-475d-821c-80b147df78ca" alt="진해보타닉뮤지엄">
        <a class="area_dimTxt">
          <div class="table_wrap">
            <div class="table">
              <div class="cell">
                <strong class="tit_photo"><p>@</p>진해보타닉뮤지엄<p>@</p></strong>
              </div>
            </div>
          </div>
        </a>
      </li>
      <li class="list_more">
        <a>더보기</a>
      </li>
    </ul>
  </div>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
