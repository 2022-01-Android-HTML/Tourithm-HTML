<!-- <script>
  String url = request.getParameter("url");
  response.sendRedirect("kr_tour_list.php?url=" + url);
</script> -->

<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<script>
new WOW().init();
</script>

<style>
.swiper-container {
	/* width:100%; */
	/* height:400px; */
  /* margin-top: 10%; */
  position: relative;
  overflow: hidden;
  list-style: none;

  z-index: 1;
  padding-bottom: 30px;
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

.wrap_contView {
  positioin : relative;
  width : 1000px;
  margin-left: auto;
  margin-right: auto;
}

.mdlTxt { padding-bottom: 15px; }

.tour_addr {
  text-align: center;
  color: gray;
  padding-bottom: 30px;
}

h3 {
  width: 100%;
  padding: 31px 0 9px;
  margin-top: 0;
  font-size: 24px;
  border-bottom: 2px solid #333;
  font-weight: 800;
  letter-spacing: -1px;
  color: #333;
  display: inline-block;
}

.tour_info {
  color: #333;
  font-size: 17px;
  line-height: 1.7;
  letter-spacing: -1px;
  display: block;
  margin-block-start: 1em;
  margin-block-end: 0.3em;
}

#map{
  width: 1000px;
  height: 450px;
  margin:auto;
  margin-bottom: 50px;
  }

.cont_more {
  position: relative;
  height: 33px;
  box-sizing: border-box;
}

.btn_more {
  display: block;
  right: 5px;
  width: auto;
  font-weight: 700;
  background: #fff;
  border: 0;
  top: 0;
  z-index: 5;
  color: #333;
  font-size: 16px;
  text-align: right;
}

.inr_info_wrap {
  list-style-type: disc;
}

.inr_info {
  float: left;
  width: 50%;
  padding: 0 0 9px 0;
  display: table;
  font-size: 16px;
  line-height: 1.7;
  font-weight: 400;
  background: none !important;
}

strong {
  float: none;
  margin-right: 0;
  position: relative;
  display: table-cell;
  width: 190px;
  padding: 0 0 0 12px;
  font-weight: 700;
  color: #333;
}


ol.numbered {
  border-left: 3px solid #b3b3b3;
  counter-reset: numbered-list;
  margin-left: 30px;
  position: relative;
}
ol.numbered li {
  font-size: 16px;
  line-height: 1.2;
  margin-bottom: 30px;
  padding-left: 20px;
}
ol.numbered li:last-child {
  border-left: 3px solid white;
}
ol.numbered li:before {
  background-color: #b3b3b3;
  border: 3px solid white;
  border-radius: 50%;
  color: white;
  content: counter(numbered-list, decimal);
  counter-increment: numbered-list;
  display: block;
  font-weight: bold;
  width: 30px;
  height: 30px;
  margin-top: -0.5em;
  line-height: 30px;
  position: absolute;
  left: -16px;
  text-align: center;
}

ol.numbered li:hover {
  text-decoration: underline;
  text-underline-position: under;
  color: black;
}
.ex {
	margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 12px;
}

.ex p {
  color: gray;
  font-size: 15px;
}
</style>

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png"><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <h3 class="wow fadeInDown">TOURLIST</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">투어리즘에 등재된 국내 여행지 목록입니다.</p>
    </div>

</div>

<?php
$tour_name = $_GET["value"];
?>

<div class="mdlTxt">
    <h2 class="wow flipInX" data-wow-duration="2s"> <?php echo $tour_name ?> </h2>
</div>

<?php
$tour_name = $_GET["value"];
$tour_loc = $_GET["loc"];
  try {
    $dbHost = "localhost";      // 호스트 주소
    $dbName = "idox23";      // 데이타 베이스(DataBase) 이름
    $dbUser = "idox23";          // DB 아이디
    $dbPass = "minjeong23";        // DB 패스워드

    // PDO 연결하기
    $db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass); //mySQL conneting

  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }

  if ($tour_loc == "1") { $db_loc = "us_hawaii"; }
  else if ($tour_loc == "2") { $db_loc = "us_lasvegas"; }
  else if ($tour_loc == "3") { $db_loc = "us_losangeles"; }
  else if ($tour_loc == "4") { $db_loc = "us_newyork"; }
  else { $db_loc = "us_sanfrancisco"; }

  //데이터 로드
  $query = "SELECT * FROM " . $db_loc . " WHERE name='" . $tour_name . "'";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
?>

<div class="wrap_contView">
  <?php
    foreach ($result as $row) { //데이터 출력
  ?>
  <div class="tour_addr"> <?php echo $row['categori']; ?> </div>

  <!-- 관광지 정보 -->
  <h3 class="tour_info_title"> 여행지 소개 </h3>
  <div class="box">
    <div class="tour_info"> <?php echo $row['info']; ?> </div>
  </div>
  <div class="cont_more">
    <script text="javascript/text">
      $(document).ready(function(){

          $('.box').each(function(){
              //var content = $(this).children('.content');
              var content = $(this).find('.tour_info');

              var content_txt = content.text();
              var content_html = content.html();
              var content_txt_short = content_txt.substring(0,350)+"...";
              var btn_more = $('<a href="javascript:void(0)" class="btn_more">+ 더보기</a>');


              $(this).append(btn_more);

              if(content_txt.length >= 500){
                  content.html(content_txt_short)

              }else{
                  btn_more.hide()
              }

              btn_more.click(toggle_content);
              function toggle_content(){
                  if($(this).hasClass('short')){
                      // 접기 상태
                      $(this).html('+ 더보기');
                      content.html(content_txt_short)
                      $(this).removeClass('short');
                  }else{
                      // 더보기 상태
                      $(this).html('- 접기');
                      content.html(content_html);
                      $(this).addClass('short');

                  }
              }
          });
      });
    </script>
  </div>

  <!-- 지도 -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap" defer></script>
    <div id="map"></div>
  <script>
    function initMap() {
      // 위경도 db받아와서 넣음 될듯
      const myLatLng = {lat: <?php echo $row['lat']; ?>, lng:<?php echo $row['lng']; ?>}
      //const myLatLng = {lat: 37.5655638, lng:126.974894 }
        map = new google.maps.Map(document.getElementById("map"), {
        center: myLatLng,
        zoom: 17,
      });

      new google.maps.Marker({
      position: myLatLng,
      map,
    });
    }
    window.initMap = initMap;
  </script>

  <!-- 관광지 추천-->
  <h3 class="tour_info_title"> 가까운 거리의 관광지 추천 </h3>
	<div class="list">
	  <div class="ex">
	    <p>< 상세 정보를 확인하려면 관광지 이름을 클릭하세요. ></p>
	  </div>
	  <div class="container">
	    <ol class="numbered" id="numbered">
	    </ol>
	  </div>
	</div>

	<?
	$q2 = "SELECT *, (6371*acos(cos(radians(lat))*cos(radians(".$row['lat']."))*cos(radians(".$row['lng'].")-radians(lng))+sin(radians(lat))*sin(radians(".$row['lat'].")))) AS distance
	FROM ".$db_loc." ORDER BY distance";
	$stmt2 = $db->prepare($q2);
	$stmt2->execute();
	$re2 = $stmt2->fetchAll();
	$arr = array();
	foreach ($re2 as $row2) {
		array_push($arr, $row2['name']);
	}
	?>
	<script>
	var cnt=0;
	var result = [];
	<?foreach ($arr as $sugg) {?>
		result.push('<?echo $sugg;?>');
	<?}?>

	while(cnt < 5) {
		const li = document.createElement("li");
		li.setAttribute('id', "name"); // id 지정 0 1 2 3 4
		li.setAttribute('onclick', "send_data(this)");
		var textNode = document.createTextNode(result[cnt]);
		li.appendChild(textNode);
		document.getElementById('numbered').appendChild(li);
		cnt++;
	}
	function send_data(ths){
	  var str = $(ths).text();
	  location.href = "./ov_tour_info.php?loc=" + <? echo $tour_loc; ?> + "&value=" + str;
	}
	</script>

</div>

<?php }
  //$db->close();  // ***** <주의> DB 쓰고 close 안하면 트래픽 초과로 DB 다운될 수 있음*****
  include_once(G5_THEME_PATH.'/tail.php');
?>
