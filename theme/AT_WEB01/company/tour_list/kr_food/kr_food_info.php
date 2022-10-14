<!-- <script>
  String url = request.getParameter("url");
  response.sendRedirect("kr_tour_list.php?url=" + url);
</script> -->

<?php
include_once('../../../../../common.php');
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
  max-width: 100%;
  height: auto;
  display: block;
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

.inr_wrap {
  margin-bottom: 50px;
  margin-block-start: 1.5em;
}

.corona_info {
  position: absolute;
  left: 40%;
  font-size: 16px;
  line-height: 1.7;
  display: inline-block;
}

.pie-chart {
  position: relative;
  width: 240px;
  height: 240px;
  border-radius: 50%;
  transition: 0.3s;
  left: 5%;
	margin-top: 20px;
	margin-left: 30px;
	margin-right: 20px;
}
span.chart_top{
  display : block;
  position: absolute;
  top:30%; left:50%;
  text-align:center;
  font-size: 20px;
  /* color: #4f9ff3; */
  transform: translate(-50%, -50%);
}
span.chart_mid{
  /* 양호 #edf6ff/#4f9ff3 , 보통 #e6f9f7/#00bda0 주의 #fef7e7/#eb9d00 경계 #ffecee/#f13d5a */
  display : block;
  position: absolute;
  top:50%; left:50%;
  width:230px; height:230px;
  border-radius: 50%;
  text-align:center; line-height: 230px;
  font-size:60px;
  /* color: #4f9ff3; */
  /* background: #edf6ff; */
  transform: translate(-50%, -50%);
}
span.chart_btm{
  display : block;
  position: absolute;
  top:70%; left:50%;
  text-align:center;
  font-size: 13px;
  /* color: #4f9ff3; */
  transform: translate(-50%, -50%);
}
.chart_wrap {
	display: flex;
	width: 100%;
}
#chart_info {
	width: 33%;
	text-align: center;
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
        <p class="wow fadeInDown" data-wow-delay="0.2s">투어리즘에 등재된 국내 식당 정보입니다.</p>
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

  //데이터 로드
  $query = "SELECT * FROM kr_food WHERE name='" . $tour_name . "'";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
?>

<div class="wrap_contView">
  <?php
    foreach ($result as $row) { //데이터 출력
  ?>
  <div class="tour_addr"> <?php echo $row['addr1']; ?> </div>

  <!-- 사진 배너 영역 -->
  <div class="swiper-container">
  	<div class="swiper-wrapper">
  		<?// keys : 분류, keyss : 이름 valuess : 추가이미지
				$img = explode("@", $row['originimgurl']);
				foreach ($img as $index => $url) {
					if($index < 1) {
						continue;
					} ?>
					<div class="swiper-slide">
            <img src="<?echo $url;?>" class="swiper-lazy">
          </div>
			<?}?>
  	</div>

  	<div class="swiper-button-next"></div>
  	<div class="swiper-button-prev"></div>
  	<div class="swiper-pagination"></div>
  </div>

  <!-- 관광지 정보 -->
  <h3 class="tour_info_title"> 여행지 소개 </h3>
  <div class="box">
    <div class="tour_info"> <?php echo $row['overview']; ?> </div>
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
    function initMap(){
      // 위경도 db받아와서 넣음 될듯
      const myLatLng = {lat: <?php echo $row['lat']; ?>, lng:<?php echo $row['lng']; ?>}

        map = new google.maps.Map(document.getElementById("map"), {
        center: myLatLng,
        zoom: 17,
      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map
      });
    }
    google.maps.event.addDomListener(window, "load", initMap);

  </script>
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

  <h3 class="tour_info_title"> 상세정보 </h3>
  <div class="inr_wrap">
    <ul class="inr_info_wrap">
      <li class="inr_info">
        <strong>■ 예약 문의 : </strong>
        <span class="info_text"> <?php echo $row['reservationfood']; ?> </span>
      </li>
      <li class="inr_info">
        <strong>■ 주차 가능 여부 : </strong>
        <span class="info_text"> <?php echo $row['parkingfood']; ?> </span>
      </li>
      <li class="inr_info">
        <strong>■ 이용시간 : </strong>
        <span class="info_text"> <?php echo $row['opentimefood']; ?> </span>
      </li>
      <li class="inr_info">
        <strong>■ 휴무일 : </strong>
        <span class="info_text"> <?php echo $row['restdatefood']; ?> </span>
      </li>
      <li class="inr_info">
        <strong>■ 대표 메뉴 : </strong>
        <span class="info_text"> <?php echo $row['firstmenu']; ?> </span>
      </li>
      <li class="inr_info">
        <strong>■ 전체 메뉴 : </strong>
        <span class="info_text"> <?php echo $row['treatmenu']; ?> </span>
      </li>
    </ul>
  </div>

  <h3 class="tour_info_title"> 코로나-19 현황 </h3>


  <!-- JSON EXAMPLE
  {
    "code": "0000",
    "data": [
      {
        "zipCd": "47330",
        "hh": "06",
        "flowDensityPercentile": 30.020000457763672,
        "taxiDensityPercentile": 25.549999237060547,
        "congestionPercentile": 8.539999961853027,
        "contactDensityPercentile": 29.950000762939453,
        "x": 1139775.7834120002,
        "y": 1685400.727858,
        "dt": "20220602"
      }
    ]
  }-->

  <div class="inr_wrap">
    <div class="corona_info">
      <?
      $curl = curl_init();

      curl_setopt_array($curl, [
        CURLOPT_URL => "https://apis.openapi.sk.com/safecaster/v1/search/safetyindex/zip/all/current?zipCd=" . $row["zipcode"],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
          "Accept: application/json",
          "appKey: l7xx56bdf8604e1149e5a1778fda0d9b5875"
        ],
      ]);

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        //echo $response;
        $arr_response = json_decode($response, true);
        //echo $arr_response["code"] . '<br>';

        foreach($arr_response["data"] as $arr2){
          $corona = round($arr2["contactDensityPercentile"]);
					$taxi = round($arr2["taxiDensityPercentile"]);
					$people = round($arr2["flowDensityPercentile"]);
          //echo "택시 이용지수: " . round($arr2["taxiDensityPercentile"], 2) . '<br>'; // 택시 이용지수 값
          //echo "유동인구 절대지수: " . round($arr2["flowDensityPercentile"], 2) . '<br>'; // 유동인구 절대지수 값
          //echo "유동인구 변동지수: " . round($arr2["congestionPercentile"], 2) . '<br>'; // 유동인구 변동지수 값
          $dthh = substr($arr2["dt"], 4, 2) . "월 " . substr($arr2["dt"], 6, 2) . "일 " . $arr2["hh"] . "시";
        }

        if($corona <= 50) { // 양호(B)
          $c_val = "양호";
        } else if($corona > 50 && $corona <=70) { // 보통(G)
          $c_val = "보통";
        } else if($corona > 70 && $corona <=90) { // 주의(Y)
          $c_val = "주의";
        } else { // 경계(R)
          $c_val = "경계";
        }

        if($taxi <= 50) { // 양호(B)
          $t_val = "양호";
        } else if($taxi > 50 && $taxi <=70) { // 보통(G)
          $t_val = "보통";
        } else if($taxi > 70 && $taxi <=90) { // 주의(Y)
          $t_val = "주의";
        } else { // 경계(R)
          $t_val = "경계";
        }

				if($people <= 50) { // 양호(B)
          $p_val = "양호";
        } else if($people > 50 && $people <=70) { // 보통(G)
          $p_val = "보통";
        } else if($people > 70 && $people <=90) { // 주의(Y)
          $p_val = "주의";
        } else { // 경계(R)
          $p_val = "경계";
        }
      }
      ?>
    </div>

    <div class="chart_wrap">
	    <div class="pie-chart pie-chart1">
	      <span class="chart_mid"> <? echo $corona; ?> </span>
	      <span class="chart_btm"> <? echo $dthh; ?> <p>코로나 안전지수</p> </span>
	      <span class="chart_top"> <? echo $c_val; ?> </span>
	    </div>

			<div class="pie-chart pie-chart2">
	      <span class="chart_mid"> <? echo $taxi; ?> </span>
	      <span class="chart_btm"> <? echo $dthh; ?> <p>택시 이용자수</p> </span>
	      <span class="chart_top"> <? echo $t_val; ?> </span>
	    </div>

			<div class="pie-chart pie-chart3">
	      <span class="chart_mid"> <? echo $people; ?> </span>
	      <span class="chart_btm"> <? echo $dthh; ?> <p>유동인구 절대지수</p> </span>
	      <span class="chart_top"> <? echo $p_val; ?> </span>
	    </div>
		</div>

    <script>
      $(window).ready(function(){
      /* 양호 #edf6ff/#4f9ff3 , 보통 #e6f9f7/#00bda0 주의 #fef7e7/#eb9d00 경계 #ffecee/#f13d5a */
        if (<? echo $corona; ?> <= 50) {
          draw(<? echo $corona; ?>, '.pie-chart1', '#4f9ff3', '#edf6ff', '#4f9ff3');
        } else if(<? echo $corona; ?> > 50 && <? echo $corona; ?> <=70) {
          draw(<? echo $corona; ?>, '.pie-chart1', '#00bda0', '#e6f9f7', '#00bda0');
        } else if(<? echo $corona; ?> > 70 && <? echo $corona; ?> <=90) {
          draw(<? echo $corona; ?>, '.pie-chart1', '#eb9d00', '#fef7e7', '#eb9d00');
        } else {
          draw(<? echo $corona; ?>, '.pie-chart1', '#f13d5a', '#ffecee', '#f13d5a');
        }

        if (<? echo $taxi; ?> <= 50) {
          draw(<? echo $taxi; ?>, '.pie-chart2', '#4f9ff3', '#edf6ff', '#4f9ff3');
        } else if(<? echo $taxi; ?> > 50 && <? echo $taxi; ?> <= 70) {
          draw(<? echo $taxi; ?>, '.pie-chart2', '#00bda0', '#e6f9f7', '#00bda0');
        } else if(<? echo $taxi; ?> > 70 && <? echo $taxi; ?> <= 90) {
          draw(<? echo $taxi; ?>, '.pie-chart2', '#eb9d00', '#fef7e7', '#eb9d00');
        } else {
          draw(<? echo $taxi; ?>, '.pie-chart2', '#f13d5a', '#ffecee', '#f13d5a');
        }

				if (<? echo $people; ?> <= 50) {
          draw(<? echo $people; ?>, '.pie-chart3', '#4f9ff3', '#edf6ff', '#4f9ff3');
        } else if(<? echo $people; ?> > 50 && <? echo $people; ?> <= 70) {
          draw(<? echo $people; ?>, '.pie-chart3', '#00bda0', '#e6f9f7', '#00bda0');
        } else if(<? echo $people; ?> > 70 && <? echo $people; ?> <= 90) {
          draw(<? echo $people; ?>, '.pie-chart3', '#eb9d00', '#fef7e7', '#eb9d00');
        } else {
          draw(<? echo $people; ?>, '.pie-chart3', '#f13d5a', '#ffecee', '#f13d5a');
        }
      });

      function draw(max, classname, colorname, colorlow, colorhigh){
         var i=1;
          var func1 = setInterval(function(){
            if(i<max){
                color1(i, classname, colorname);
                i++;
            } else{
              clearInterval(func1);
            }
          },10);
          color2(colorlow, colorhigh);
      }

      function color1(i, classname, colorname){
         $(classname).css({
            "background":"conic-gradient("+colorname+" 0% "+i+"%, #ffffff "+i+"% 100%)"
         });
      }

      function color2(colorlow, colorhigh){
        $('.chart_top').css({
           "color" : colorhigh
        });
        $('.chart_mid').css({
           "color" : colorhigh,
           "background" : colorlow
        });
        $('.chart_btm').css({
           "color" : colorhigh
        });
      }
    </script>
  </div>

<?php }
  //$db->close();  // ***** <주의> DB 쓰고 close 안하면 트래픽 초과로 DB 다운될 수 있음*****
  include_once(G5_THEME_PATH.'/tail.php');
?>
