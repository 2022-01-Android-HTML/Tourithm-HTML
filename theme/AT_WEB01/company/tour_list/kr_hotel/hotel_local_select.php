<style>
  /* 탭 전체 스타일 */
  .tabs {
    margin-top: 50px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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

  #all {
    font-weight: bold;
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
    padding: 40px 40px 0;
    clear: both;
    overflow: hidden;
  }

  /* 선택된 탭 스타일 */
  .tabs input:checked + .tab_item {
    background-color: #333333;
    color: #fff;
  }
</style>
<!-- https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_list.php/ -->
<div class="tabs">

  <input id="local_all" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list.php?pg=1';">
  <label class="tab_item" for="local_all" id="all">ALL</label>

  <input id="local1" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=1';">
  <label class="tab_item" for="local1">서울</label>

  <input id="local2" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=2';">
  <label class="tab_item" for="local2">인천</label>

  <input id="local3" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=3';">
  <label class="tab_item" for="local3">대전</label>

  <input id="local4" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=4';">
  <label class="tab_item" for="local4">대구</label>

  <input id="local5" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=5';">
  <label class="tab_item" for="local5">광주</label>

  <input id="local6" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=6';">
  <label class="tab_item" for="local6">부산</label>

  <input id="local7" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=7';">
  <label class="tab_item" for="local7">울산</label>

  <input id="local32" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=32';">
  <label class="tab_item" for="local32">강원</label>

  <input id="local33" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=33';">
  <label class="tab_item" for="local33">충북</label>

  <input id="local34" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=34';">
  <label class="tab_item" for="local34">충남</label>

  <input id="local35" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=35';">
  <label class="tab_item" for="local35">경북</label>

  <input id="local36" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=36';">
  <label class="tab_item" for="local36">경남</label>

  <input id="local37" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=37';">
  <label class="tab_item" for="local37">전북</label>

  <input id="local38" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=38';">
  <label class="tab_item" for="local38">전남</label>

  <input id="local39" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=39';">
  <label class="tab_item" for="local39">제주</label>

  <input id="local8" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=8';">
  <label class="tab_item" for="local8">세종</label>

  <input id="local31" type="radio" name="tab_item" OnClick="location.href='./kr_hotel_list_local.php?loc=31';">
  <label class="tab_item" for="local31">경기</label>

</div>
