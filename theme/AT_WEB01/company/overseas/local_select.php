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
    width: calc(100%/5);
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

  <input id="local1" type="radio" name="tab_item" OnClick="location.href='./ov_tour_list.php?loc=1';">
  <label class="tab_item" for="local1" id="all">하와이</label>

  <input id="local2" type="radio" name="tab_item" OnClick="location.href='./ov_tour_list.php?loc=2';">
  <label class="tab_item" for="local2">라스베가스</label>

  <input id="local3" type="radio" name="tab_item" OnClick="location.href='./ov_tour_list.php?loc=3';">
  <label class="tab_item" for="local3">로스앤젤레스</label>

  <input id="local4" type="radio" name="tab_item" OnClick="location.href='./ov_tour_list.php?loc=4';">
  <label class="tab_item" for="local4">뉴욕</label>

  <input id="local5" type="radio" name="tab_item" OnClick="location.href='./ov_tour_list.php?loc=5';">
  <label class="tab_item" for="local5">샌프란시스코</label>

</div>
