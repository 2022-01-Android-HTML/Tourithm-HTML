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
        <h3 class="wow fadeInDown">TOURCOURSE</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">투어리즘에 등재된 국내 여행지 코스입니다.</p>
    </div>

</div>

<style>
  #map{
     width: 1000px;
     height: 450px;
     margin:auto;
     margin-bottom: 50px;
   }
   .wrap_contView {
     positioin : relative;
     width : 1000px;
     margin-left: auto;
     margin-right: auto;
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
  .conttent1 h4 {
     width: 380px;
     padding: 31px 0 9px;
     margin-top: 100px;
     font-size: 24px;
     font-weight: 800;
     letter-spacing: -1px;
     color: #333
     text-align:center;
     margin-left: 600px;
   }
  .conttent1 h2{
       margin-left: 600px;
     }
   .cont_more {
     position: relative;
     height: 33px;
     box-sizing: border-box;
   }
   .image{
     float: left;
   }
   .box{
    clear: left;
   }

</style>

  <div class="mdlTxt">
      <h2 class="wow flipInX" data-wow-duration="2s"><?php echo $_GET["value"]; ?></h2>
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
    $query = "SELECT kr_tour.name, firstimage, addr1, overview FROM kr_tour, kr_route WHERE (kr_tour.name = kr_route.name || kr_tour.name = kr_route.name2 || kr_tour.name = kr_route.name3
      || kr_tour.name = kr_route.name4 || kr_tour.name = kr_route.name5 || kr_tour.name = kr_route.name6 || kr_tour.name = kr_route.name7 || kr_tour.name = kr_route.name8)
      && kr_route.routename = '" . $tour_name . "'";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
  ?>

<div class="wrap_contView">

  <!-- 여기 지도 -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap" defer></script>
  <div id="map"></div>

  <h3>코스 설명</h3>
    <?php
      foreach ($result as $row) { //데이터 출력
    ?>
    <br>
<div style="border:2px dashed; padding:10px; border-top-style: none; border-bottom-style: dotted; border-left-style: none; border-right-style: none;">
    <div class="image">
      <img src="<?php echo $row['firstimage']; ?>" width="500px"></img>
      <br>
    </div>
    <div class="conttent1">
      <h4>" <?php echo $row['name']; ?>  "</h4>
      <h2><?php echo $row['addr1']; ?></h2>
    </div>
    <div class="box">
      <div class="tour_info"><?php echo $row['overview']; ?> </div>
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

</div>
  <?php
    }
    //if($result->)
  ?>
  <div id="lv-container" data-id="city" data-uid="MTAyMC81NjU1MC8zMzAxMw==">
    <br><br><br><br><br><br>
     <script type="text/javascript">
     (function(d, s) {
         var j, e = d.getElementsByTagName(s)[0];

         if (typeof LivereTower === 'function') { return; }

         j = d.createElement(s);
         j.src = 'https://cdn-city.livere.com/js/embed.dist.js';
         j.async = true;

         e.parentNode.insertBefore(j, e);
     })(document, 'script');
     </script>
  </div>
</div>
<script> // 코스 위 경
  var MarkersArray = [];
  var Coordinates= [];
  var travelPathArray = [];
  var value = '<? echo $value; ?>'; //여행지명

  const labels = "ABCDEFGHIJKLMN";
  let labelIndex = 0;

      // 서울1
  if(value == "종로구 코스"){
      var locations = [
        ['경희궁', 37.570443, 126.968508],
        ['세종대왕 동상', 37.572176, 126.976838],
        ['인사동', 37.575431, 126.983376],
        ['쌈지길', 37.574317, 126.984892],
        ['종묘', 37.573190, 126.994900]
      ];
      initMap();
  }
  else if(value == "강남구 코스"){
    var locations = [
    ['신사동 가로수길', 37.521532, 127.022754],
    ['도산공원', 37.521463, 127.033812],
    ['압구정 로데오거리', 37.526877, 127.038897],
    ['청담패션거리', 37.525907, 127.045763]
    ];
      initMap();
  }
  else if(value == "성동구 코스"){
    var locations = [
    ['서울숲', 37.543055, 127.041777],
    ['마로니에공원', 37.580242, 127.002724],
    ['63스퀘어', 37.519867, 126.940329],
    ['여의도공원', 37.525780, 126.920264]
    ];
      initMap();
  }

  else if(value == "강화도 힐링 코스"){
    var locations = [
      ['보문사(강화)', 37.688342, 126.320969],
      ['석모도 미네랄 온천', 37.685431, 126.312767],
      ['민머루해변', 37.651600, 126.332805],
      ['볼음도(저어새 생태마을)', 37.670756, 126.191907]
    ];
      initMap();
  }
  else if(value == "강화도 유적지 코스"){
    var locations = [
      ['강화도', 37.746502, 126.487744],
      ['고려궁지', 37.750885 ,126.485436],
      ['고려산', 37.740730, 126.435271],
      ['강화 고인돌 유적 [유네스코 세계문화유산]', 37.773434, 126.437473],
      ['강화도제적봉 평화전망대', 37.826325, 126.432966]
    ];
      initMap();
  }
  else if(value == "인천 테마파크 코스"){
    var locations = [
      ['월미도', 37.475405, 126.597583],
      ['월미공원', 37.476519, 126.603863],
      ['인천 차이나타운', 37.473850, 126.619162],
      ['자유공원(인천)', 37.475295, 126.622276],
      ['연안부두', 37.454924, 126.600978]
    ];
      initMap();
  }

  else if(value == "체험/관광지 코스"){
    var locations = [
      ['만인산푸른학습원', 36.202145, 127.454599],
      ['무수천하마을', 36.280266, 127.401893],
      ['대전오월드', 36.287312, 127.400129],
      ['상소동 산림욕장', 36.231364, 127.471100]
    ];
      initMap();
  }
  else if(value == "피크닉 코스"){
    var locations = [
      ['우암사적공원', 36.348167, 127.458973],
      ['유성온천지구', 36.355345, 127.344813],
      ['한밭수목원', 36.368630, 127.386270],
      ['솔로몬로파크', 36.378318, 127.399858]
    ];
      initMap();
  }

  else if(value == "힐링 코스"){
    var locations = [
      ['대구시민안전테마파크', 35.989153, 128.691923],
      ['팔공산온천관광호텔(온천)', 35.990972, 128.692240],
      ['팔공산자연공원(동화사지구)', 35.989939, 128.696162],
      ['동화사(대구)', 35.990356, 128.703489]
    ];
      initMap();
  }
  else if(value == "산책로가 너무 이쁜 코스"){
    var locations = [
      ['대구 달성공원', 35.873403, 128.575920],
      ['대구 오토바이골목', 35.872270, 128.583814],
      ['경상감영공원', 35.872053, 128.592307],
      ['대구 계산동성당', 35.867976, 128.587769],
      ['대구향교', 35.859752, 128.595991],
      ['봉산문화거리', 35.861804, 128.598029]
    ];
      initMap();
  }

  else if(value == "그날의 기록 코스"){
    var locations = [
      ['광주 예술의 거리', 35.149808, 126.918649],
      ['충장로', 35.148825, 126.915141],
      ['사직공원(광주)', 35.141356, 126.912175],
      ['5·18 기념공원', 35.155751, 126.858568],
      ['5·18 자유공원', 35.148868, 126.839959]
    ];
      initMap();
  }

  else if(value == "건강 코스"){
    var locations = [
      ['스포원파크', 35.289162, 129.107070],
      ['허심청', 35.221135, 129.082682],
      ['금강공원', 35.219011, 129.076233]
    ];
      initMap();
  }
  else if(value == "부산은 바다! 코스"){
    var locations = [
      ['광안리해수욕장', 35.153791, 129.118492],
      ['광안리해변 테마거리', 35.155166, 129.122136],
      ['신세계 센텀시티', 35.168787, 129.129741],
      ['부산 티파니21 크루즈 유람선', 35.156891, 129.150081],
      ['해운대 동백섬', 35.153991, 129.152181],
      ['청사포', 35.160444, 129.192219]
    ];
      initMap();
  }

  else if(value == "산속 휴양림 코스"){
    var locations = [
      ['간월산 자연휴양림', 35.567104, 129.056053],
      ['작천정계곡(작괘천)', 35.550396, 129.102388],
      ['자수정 동굴나라', 35.542683, 129.090417],
      ['국립 신불산폭포자연휴양림', 35.525995, 129.023232]
    ];
      initMap();
  }
  else if(value == "야경맛집 코스"){
    var locations = [
      ['간절곶 등대', 35.358967, 129.360574],
      ['진하해수욕장', 35.382728, 129.345200],
      ['발리온천', 35.405971, 129.293112],
      ['대운산', 35.390167, 129.236187]
    ];
      initMap();
  }
  else if(value == "바다 포토존 코스"){
    var locations = [
      ['대왕암공원', 35.490403, 129.435278],
      ['일산해수욕장(울산)', 35.494928, 129.430200],
      ['울기등대', 35.492476, 129.443827]
    ];
      initMap();
  }

  else if(value == "바다 외곽 전역 코스"){
    var locations = [
      ['속초해수욕장', 38.190576, 128.601994],
      ['천곡황금박쥐동굴', 37.517403, 129.109794],
      ['환선굴 (대이리 동굴지대)', 37.326409, 129.021252],
      ['태백산 국립공원', 37.131114, 128.962071]
    ];
      initMap();
  }
  else if(value == "동해바다 드라이브 코스"){
    var locations = [
      ['추암 촛대바위', 37.479014, 129.158618],
      ['정동진해변', 37.691448, 129.032659],
      ['오대산국립공원', 37.717128, 128.601497],
      ['낙산 해수욕장', 38.117754, 128.633629],
      ['설악산 케이블카', 38.173054, 128.489071],
      ['델피노호텔&리조트 오션플레이', 38.212135, 128.493756],
      ['김일성 별장', 38.472540, 128.443169],
      ['설악산국립공원(남설악)', 38.180985, 128.301902]
    ];
      initMap();
  }
  else if(value == "강원도 시외 전역 코스"){
    var locations = [
     ['척산온천지구', 38.187003, 128.543688],
     ['학사평 콩꽃마을 순두부촌', 38.206031, 128.523456],
     ['용소계곡', 37.867638, 128.129496],
     ['소노벨 비발디파크 오션월드', 37.652391, 127.687354],
     ['병방치 스카이워크', 37.362378, 128.635472],
     ['바다열차', 37.468382, 129.166318]
    ];
      initMap();
  }

  else if(value == "여름철 계곡 여행 코스"){
    var locations = [
      ['덕동계곡', 37.172135, 127.987846],
      ['탁사정', 37.166674, 128.106225],
      ['제천 의림지와 제림', 37.174158, 128.208099],
      ['능강계곡, 얼음골', 36.986724, 128.197077]
    ];
      initMap();
  }
  else if(value == "단양 휴양림 코스"){
    var locations = [
      ['단양 천동동굴', 36.972944, 128.418727],
      ['단양 다리안관광지', 36.964834, 128.420803],
      ['다리안계곡', 36.963559, 128.420219],
      ['단양 적성', 36.945112, 128.321709],
      ['소선암자연휴양림', 36.918576, 128.309544],
      ['선암계곡(하선암)', 36.907977, 128.309406]
    ];
      initMap();
  }

  else if(value == "휴양림(절) 코스"){
    var locations = [
      ['서산 용현리 마애여래삼존상', 36.773473, 126.605193],
      ['국립 용현자연휴양림', 36.751928, 126.607652],
      ['개심사(서산)', 36.746906, 126.590148],
      ['가야산(서산)', 36.703986, 126.609106],
      ['서산 해미읍성', 36.713609, 126.550381],
      ['부석사(서산)', 36.703528, 126.412446]
    ];
      initMap();
  }
  else if(value == "백제 유적지 코스"){
    var locations = [
      ['서동공원과 궁남지', 36.269750, 126.912326],
      ['부여 정림사지 오층석탑 [유네스코 세계유산]', 36.279732, 126.913262],
      ['관북리유적과 부소산성 [유네스코 세계유산]', 36.285531, 126.913365],
      ['낙화암', 36.286262, 126.915467],
      ['백제문화단지', 36.306582, 126.906776]
    ];
      initMap();
  }
  else if(value == "유네스코 유적지 코스"){
    var locations = [
      ['공주 공산성 [유네스코 세계유산]', 36.462998, 127.126808],
      ['공주 무령왕릉과 왕릉원[유네스코 세계유산]', 36.462284, 127.114278],
      ['계룡산국립공원', 36.356873, 127.232462],
      ['갑사계곡', 36.369179, 127.182211]
    ];
      initMap();
  }

  else if(value == "시원한 여름 코스"){
    var locations = [
      ['하옥계곡', 36.312777, 129.252548],
      ['보경사 12폭포 (상생폭포)', 36.257553, 129.308622],
      ['경상북도수목원', 36.219751, 129.257125],
      ['월포해수욕장', 36.202327, 129.371052],
      ['화진해수욕장', 36.251814, 129.373892]
    ];
      initMap();
  }
  else if(value == "문화유산 관광 코스"){
    var locations = [
      ['경주 불국사 [유네스코 세계문화유산]', 35.789273, 129.331848],
      ['경주 석굴암 [유네스코 세계문화유산]', 35.795198, 129.350176],
      ['경주국립공원', 35.843691, 129.289658],
      ['경주 보문관광단지', 35.843711, 129.286980],
      ['보문호', 35.844327, 129.276681],
      ['경주월드 어뮤즈먼트', 35.836387, 129.282173]
    ];
      initMap();
  }
  else if(value == "역사 유적지 코스"){
    var locations = [
      ['경주 김유신묘', 35.845331, 129.192389],
      ['천마총(대릉원)', 35.838688, 129.210498],
      ['경주역사유적지구[유네스코 세계문화유산]', 35.838566, 129.212293],
      ['경주 첨성대', 35.834375, 129.218564],
      ['경주 포석정지', 35.807311, 129.212863]
    ];
      initMap();
  }

  else if(value == "바다 휴양지 코스"){
    var locations = [
      ['거제자연휴양림', 34.784176, 128.629645],
      ['학동흑진주몽돌해변', 34.773327, 128.640250],
      ['거제도 해금강', 34.741637, 128.659624],
      ['신선대 전망대', 34.737362, 128.664893],
      ['해금강유람선', 34.737840, 128.673214]
    ];
      initMap();
  }
  else if(value == "섬 코스"){
    var locations = [
    ['욕지도 (유동어촌체험마을)', 34.620015, 128.242983],
    ['매물도', 34.638936, 128.570143],
    ['소매물도', 34.625887, 128.549820],
    ['비진도해수욕장', 34.721294, 128.459917],
    ['미륵산(통영)', 34.821999, 128.415518],
    ['남망산 조각공원', 34.841297, 128.429455]
    ];
        initMap();
  }
  else if(value == "산-바다 힐링 코스"){
    var locations = [
      ['금왕사', 34.778879, 127.969263],
      ['금산 보리암(남해)', 34.751885, 127.982757],
      ['상주은모래비치', 34.722216, 127.987469],
      ['남해 금산 봉수대', 34.713773, 128.005070],
      ['송정 솔바람해변', 34.721397, 128.024366],
      ['남해 항도어촌체험마을', 34.742512, 128.045983],
      ['국립 남해편백자연휴양림', 34.752144, 128.020154]
    ];
        initMap();
  }

  else if(value == "한옥마을 인근 탐방 코스"){
    var locations = [
      ['전주향교', 35.812173, 127.157236],
      ['전주전동성당', 35.813309, 127.149217],
      ['경기전', 35.815206, 127.149864 ],
      ['전북 전주 한옥마을 [슬로시티]', 35.818333, 127.153678],
      ['한국도로공사수목원', 35.871123, 127.053799],
      ['덕진공원', 35.847516, 127.121869]
    ];
        initMap();
  }
  else if(value == "국립 자연휴양림 힐링 코스"){
    var locations = [
      ['국립 덕유산자연휴양림', 35.908143, 127.814803],
      ['덕유산국립공원(본소,적상분소)', 35.900721, 127.775120],
      ['무주리조트 관광곤도라', 35.891849, 127.742982],
      ['향적봉(덕유산)', 35.860378, 127.746321],
      ['칠연계곡', 35.837805, 127.700057],
      ['적상산', 35.942512, 127.691963 ],
      ['무주머루와인동굴', 35.964965, 127.697537]
    ];
        initMap();
  }
  else if(value == "불교 역사 탐방 코스"){
    var locations = [
      ['익산향교', 35.997017, 127.058782],
      ['서동공원', 36.001178, 127.057440],
      ['익산 미륵사지 [유네스코 세계유산]', 36.012595, 127.030831],
      ['익산 미륵사지 당간지주', 36.011790, 127.030364],
      ['익산제석사지', 35.973550, 127.069340],
      ['망모당', 35.968765, 127.094293]
    ];
        initMap();
  }

  else if(value == "여수밤바다 코스"){
    var locations = [
      ['송호해수욕장', 34.314348, 126.519046],
      ['갈두마을(땅끝마을)', 34.299805, 126.528585],
      ['땅끝관광지', 34.298017, 126.526649],
      ['사구미해변', 34.320879, 126.579163],
    ];
        initMap();
  }
  else if(value == "대나무테마 코스"){
    var locations = [
      ['담양 금성산성', 35.377887, 127.035636],
      ['대나무골 테마공원', 35.337178, 127.048577],
      ['담양 메타세쿼이아길', 35.323854, 127.004151],
      ['죽녹원', 35.327800, 126.985575],
      ['죽화경', 35.252591, 126.960954]
    ];
        initMap();
  }
  else if(value == "땅끝마을 코스"){
    var locations = [
      ['만성리 검은모래해변', 34.777153, 127.744791],
      ['돌산공원', 34.730597, 127.741523],
      ['방죽포해변', 34.630620, 127.792733],
      ['향일암(여수)', 34.591633, 127.804005],
      ['금오도', 34.522593, 127.749484]
    ];
        initMap();
  }

  else if(value == "서귀포 관광명소 코스"){
    var locations = [
      ['한라산 백록담', 33.344476, 126.536439],
      ['휴애리자연생활공원', 33.308517, 126.634432],
      ['천지연폭포 (제주도 국가지질공원)', 33.244534, 126.559473],
      ['외돌개(제주)', 33.240262, 126.546216],
      ['주상절리대(대포동지삿개)', 33.238002, 126.426118],
      ['용머리해안', 33.232259, 126.314522],
      ['마라도(마라해양도립공원)', 33.118635, 126.267434]
    ];
        initMap();
  }
  else if(value == "한라산 인근 코스"){
    var locations = [
      ['한라산 (제주도 국가지질공원)', 33.392731, 126.494872],
      ['한라수목원', 33.469769, 126.492149],
      ['에코랜드테마파크', 33.456487, 126.667062],
      ['거문오름 [세계자연유산]', 33.456916, 126.714733],
      ['만장굴 (제주도 국가지질공원)', 33.528048, 126.770679]
    ];
        initMap();
  }

  else if(value == "여가 코스"){
    var locations = [
      ['금강자연휴양림(금강수목원,산림박물관)', 36.435445, 127.230577],
      ['베어트리파크', 36.672065, 127.209206]
    ];
        initMap();
  }

  else if(value == "용인 인근 코스"){
    var locations = [
      ['경희천문대', 37.241885, 127.078677],
      ['보정동카페거리', 37.321227, 127.110133],
      ['한택식물원', 37.094061, 127.409767],
      ['캐리비안베이', 37.293379, 127.201339]
    ];
        initMap();
  }
  else if(value == "전망대 코스"){
    var locations = [
      ['제3땅굴', 37.916553, 126.699195],
      ['도라전망대', 37.908887, 126.704786],
      ['판문점', 37.892098, 126.744805],
      ['파주 임진각(평화누리공원)', 37.889593, 126.740200],
      ['헤이리 예술마을', 37.788065, 126.699312],
      ['오두산 통일전망대',  37.773230, 126.677270],
      ['파주 출판도시', 37.708344, 126.686680]
    ];
        initMap();
  }
  else if(value == "플라워 코스"){
    var locations = [
      ['신북리조트 스프링폴', 37.974253, 127.104348],
      ['포천 허브아일랜드', 37.965877, 127.131165],
      ['왕방산', 37.916236, 127.164255],
      ['국립 운악산자연휴양림', 37.884451, 127.302788],
      ['청계저수지', 37.943084, 127.343707],
      ['일동제일유황온천', 37.967683, 127.328700],
      ['국망봉자연휴양림(포천)', 38.028891, 127.396220],
      ['백운계곡 (한탄강 국가지질공원)', 38.072620, 127.410306]
    ];
        initMap();
  }

</script>

<script> //지도
  function initMap() {
  //지도 띄우기
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 13,
      center: {lat: locations[0][1], lng: locations[0][2]},
      mapTypeId: google.maps.MapTypeId.ROADMAP
      });

      var infowindow = new google.maps.InfoWindow();
      var i;

      // 배열 마커 넣는 for문
      for (i = 0; i < locations.length; i++) {
        var make_marker = new google.maps.LatLng(locations[i][1], locations[i][2]);
        var marker = new google.maps.Marker({
          id:i,
          label: labels[labelIndex++ % labels.length],
          position: make_marker,
          map: map
        });

        Coordinates.push(make_marker);
        MarkersArray.push(marker);

        // 마커 클릭시 이벤트 (infowindow)
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));

      // 마커 클릭시 줌
        if(marker) {
          marker.addListener('click', function() {
            map.setZoom(17);
            map.setCenter(this.getPosition());
        });
      }

    } // for 문 종료
    //지도 동선그리기
    for (i in travelPathArray){
      travelPathArray[i].setMap(null);
    }
    var flightPath = new google.maps.Polyline({
      path: Coordinates,
      strokeColor: "#FF0000",
      strokeOpacity: 0.3,
      strokeWeight: 2
    });

    flightPath.setMap(map);
    travelPathArray.push(flightPath);
  }
</script>

<div class="wrap_contView">
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
