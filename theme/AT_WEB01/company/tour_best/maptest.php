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
    <p class="wow fadeInDown" data-wow-delay="0.2s">국내 사용자 맞춤형 추천</p>
  </div>
</div>

<style>
table {
  width = 85%;
  height = 200;
  border-collapse: collapse;
  margin-top: 2%;
  border: 0.5px solid #999999;
}
p {
  padding-left: 5px;
}
th {
  border-right: 2px solid #999999;
  border-bottom: 1px solid gray;
}
tr {
  width = 100%;
  border-bottom: 1px solid gray;
}
select {
  width: 200px;
  border: 1px solid #999;
}

.container {
  padding-left: 40px;
}

ol.numbered {
  border-left: 3px solid #b3b3b3;
  counter-reset: numbered-list;
  margin-left: 10px;
  position: relative;
}
ol.numbered li {
  font-size: 16px;
  line-height: 1.2;
  margin-bottom: 30px;
  padding-left: 30px;
}
ol.numbered li:last-child {
  border-left: 3px solid white;
  margin-left: -3px;
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
  left: -19.5px;
  text-align: center;
}

#map{
     width: 1000px;
     height: 450px;
     margin:auto;
     margin-bottom: 50px;
}
</style>

<?
$conn = mysqli_connect(
  'localhost',
  'idox23',
  'minjeong23',
  'idox23');

if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}  // 연결 불가능할 경우 System Die

$name_area = array();
$name_lat = array();
$name_rank = array();
$name_dis = array();

$q = "SELECT *, (6371*acos(cos(radians(37))*cos(radians(lat))*cos(radians(lng)-radians(127))+sin(radians(37))*sin(radians(lat)))) AS distance
  FROM kr_tour
  ORDER BY distance";

$re = mysqli_query($conn, $q);

while ($row = mysqli_fetch_array($re)) {
  $name_area[$row['name']] = $row['areacode'];
  $name_lat[$row['name']] = $row['lat'].'/'.$row['lng'];
  $name_rank[$row['name']] = $row['ranking'];
  $name_dis[$row['name']] = $row['distance'];
}
//print_r($name_rank);
mysqli_close($conn);
?>

  <table class="custom" width="65%" height="200" align="center">
    <tr>
      <th width="160px">분류</th>
      <td><p><label><input type="radio" name="type" id="allCheck" value="all" checked> 전체</p></label></td>
      <td><p><label><input type="radio" name="type" class="check_all_list" value="12"> 관광지</p></label></td>
      <td><p><label><input type="radio" name="type" class="check_all_list" value="28"> 레포츠</p></label></td>
      <td><p><label><input type="radio" name="type" class="check_all_list" value="32"> 숙박</p></label></td>
      <td><p><label><input type="radio" name="type" class="check_all_list" value="39"> 음식점</p></label></td>
    </tr>

    <tr>
      <th rowspan="2">지역</th>
      <td><p><label><input type="radio" name="area" id="allCheck" value="all" checked> 전체</p></label></td>
      <td><p><label><input type="radio" name="area" class="check_all_list" value="1"> 서울</p></label></td>
      <td><p><label><input type="radio" name="area" class="check_all_list" value="2"> 인천</p></label></td>
      <td><p><label><input type="radio" name="area" class="check_all_list" value="3"> 대전</p></label></td>
      <td><p><label><input type="radio" name="area" class="check_all_list" value="4"> 대구</p></label></td>
      <td><p><label><input type="radio" name="area" class="check_all_list" value="5"> 광주</p></label></td>
      <td><p><label><input type="radio" name="area" class="check_all_list" value="6"> 부산</p></label></td>
      <td><p><label><input type="radio" name="area" class="check_all_list" value="7"> 울산</p></label></td>
      <td><p><label><input type="radio" name="area" class="check_all_list" value="8"> 세종</p></label></td>
    </tr>
    <tr>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="31"> 경기도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="32"> 강원도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="33"> 충청북도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="34"> 충청남도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="35"> 경상북도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="36"> 경상남도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="37"> 전라북도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="38"> 전라남도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" class="check_all_list" value="39"> 제주도</p></label></td>
    </tr>

    <tr>
      <th>거리</th>
      <td><p><label><input type="radio" name="time" value="100" checked> 100km</p></label></td>
      <td><p><label><input type="radio" name="time" value="200"> 200km</p></label></td>
      <td><p><label><input type="radio" name="time" value="300"> 300km</p></label></td>
    </tr>

    <tr>
      <th>방문할 관광지 수</th>
      <td colspan="9" width="200px">
        <select name="count" class="select" id="cnt" onchange="handleOnChange(this)">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </td>
    </tr>
  </table>
  <p><button onclick='getCheckboxValue()'>검색</button> <input type="reset" value="Reset"></p></br>

<div id='result'></div>

<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap"></script>

<div class="container">
  <ol class="numbered" id="numbered">
  </ol>
</div>



<script>
var locations= [];
var i = 1;
let cmb = '1'; // 콤보박스 value 초기화
let distance = '100';
let ty = 'none';
let ar = 'none';

// 검색 버튼 클릭 시
function getCheckboxValue()  {
  // 거리(라디오버튼) value 가져오기
  const disNodeList = document.getElementsByName('time');
  const disNodeList2 = document.getElementsByName('type');
  const disNodeList3 = document.getElementsByName('area');
  disNodeList.forEach((node) => {
    if(node.checked)  {
      distance = node.value;
    }
  })
  disNodeList2.forEach((node) => {
    if(node.checked)  {
      ty = node.value;
    }
  })
  disNodeList3.forEach((node) => {
    if(node.checked)  {
      ar = node.value;
    }
  })

/*
  // 체크박스 value 가져오기
  const query1 = 'input[name="type"]:checked';
  const query2 = 'input[name="area"]:checked';

  const selectedEls1 = document.querySelectorAll(query1);
  const selectedEls2 = document.querySelectorAll(query2);

  let result = '';
  let result2 = '';
  selectedEls1.forEach((el) => {
    result += el.value + ' ';
  });
  result += '/';
  selectedEls2.forEach((el) => {
    result += el.value + ' ';
  });
  result += '/';
  result += distance + ' ';
  result += '/';
  result += cmb + ' ';

  // 체크박스 선택된 value -> split
  let str = result.split('/');
  let type = str[0].split(' '); // 분류
  let area = str[1].split(' '); // 지역
  let time = str[2].split(' '); // 이동시간
  let comb = str[3].split(' '); // 방문할 관광지 수
*/

  var area=[];
  // 체크한 지역 관광지 배열 생성
  <?foreach($name_area as $key=>$value){?>
      if(ar == <?echo $value;?>) {
        area.push('<?echo $key;?>');
      }
  <?}?>

  /*
  // custom 생성한 관광지 배열 랜덤 출력
  let name_sp = result2.split(',');*/

  // 첫번째 관광지 랜덤 결정
  var rand_first_area = '';
  rand_first_area = area[Math.floor(Math.random()*(area.length-1))];

  // addr1 : 첫번째 관광지 위도/경도, addr2 : 그 외 선택한 지역 관광지 위도/경도
  let addr1 = [];
  let addr2 = [];
  <?foreach($name_lat as $key=>$value) {?>
      for(var r=0; r<area.length; r++){
        if(area[r] == '<?echo $key;?>') {
          if(area[r] == rand_first_area) {
            addr1.push('<?echo $value;?>');
            area.splice(r, 1);
          }
          else {
            addr2.push('<?echo $value;?>');
          }
        }
      }
  <?}?>
// ------------------ 정리완료
/*


  namerank_s = namerank.split(',');
  addr1_sp = addr1.split('/');
  // addr1_sp[0] : 기준점(첫번째관광지) 위도, addr1_sp[1] : 기준점(첫번째관광지) 경도

  addr2_s = addr2.split('@');
  var realresult = [];
  var realresult2 = [];
  var realaddr = [];
  var di = [];
  var temp = '';
  var temp2 = '';*/
// ---------------------------------------------------

  function deg2rad(deg) {
    return deg * (Math.PI/180)
  }

  var addr1_sp = addr1[0].split('/');
  var di_sort = [];
  var result = [];
  var addr2_test = [];
  //result.push(rand_first_area);

  // 거리 계산
  for(var n = 0; n < addr2.length; n++){
    var addr2_sp = addr2[n].split('/');

    var R = 6371;
    var dLat = deg2rad(addr2_sp[0]-addr1_sp[0]);
    var dLon = deg2rad(addr2_sp[1]-addr1_sp[1]);
    var a = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.cos(deg2rad(addr1_sp[0])) * Math.cos(deg2rad(addr2_sp[0])) * Math.sin(dLon/2) * Math.sin(dLon/2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
    var dis = R * c;
    var d = Math.round(dis);

    if(d < 20) {
      di_sort.push(d);
      result.push(d + area[n]); // 선택한 거리 이내에 존재하는 관광지
      addr2_test.push(addr2[n]);
    /*  for(var u=0; u<namerank_s.length; u++) {
        namerank_sp = namerank_s[u].split(':');
        if((n) == namerank_sp[0]) {
          di.push(d);
          realresult.push(namerank_sp[1]);
        }
      }*/
    }
  }
//  realresult2.push(randomrank);

/*
for (var h = 0; h < di_sort.length; h++) {
  if (di_sort[h] > di_sort[h + 1]) {
    temp = di_sort[h];
    temp2 = result[h];
    di_sort[h] = di_sort[h + 1];
    result[h] = result[h + 1];
    di_sort[h + 1] = temp;
    result[h + 1] = temp2;
  }
}*/


  var q = 0;
//  var cnt = comb[0];

  var relist = [];
  relist.push(rand_first_area);
  for (var f = 0; f < result.length; f++)
    relist.push(result[f]);

  // 관광지 리스트 초기화
  var lis = document.querySelectorAll('#numbered li');
  for(var j=0; li=lis[j]; j++) {
      li.parentNode.removeChild(li);
  }
  // 선택한 관광지 수에 따라 관광지 리스트 동적 추가
/*  if(realresult.length < comb[0]) {
    cnt = realresult.length;
  }*/
  while(q < cmb) {
    //realresult2.push(realresult[i]);
    const li = document.createElement("li");
    li.setAttribute('id', i); // id 지정 0 1 2 3 4
  //  var textNode = document.createTextNode(realresult2[i]);
    var textNode = document.createTextNode(relist[q]);
    li.appendChild(textNode);
    document.getElementById('numbered').appendChild(li);
    q++;
  }


  var loc = [];
  var ad_sp = '';
  loc.push([addr1_sp[1], addr1_sp[0]]);
  for (var y = 0; y < cmb-1; y++) {
    ad_sp = addr2_test[y].split('/');
    loc.push([ad_sp[1], ad_sp[0]]);
  }

  document.getElementById('result').innerHTML = loc;



/*  locations = [];
  realaddr_s = '';
  for(var t=0; t<realaddr.length; t++) {
    realaddr_s = realaddr[t].split('/');
    locations.push([realaddr_s[1], realaddr_s[0]]);
  }*/

  var locations2 = [
    [37.5546788, 126.9706069],
    [37.5668260, 126.9786567],
    [37.5660373, 126.9821930],
    [37.5655638, 126.974894],
    [37.566330, 126.968153]
  ];

  for (var m = 0; m < loc.length; m++) {
    var make_marker = new google.maps.LatLng(loc[m][0], loc[m][1]);
    var marker = new google.maps.Marker({
      id:m,
      label: labels[labelIndex++ % labels.length],
      position: make_marker,
      map: map
    });

    Coordinates.push(make_marker);
    MarkersArray.push(marker);

    if(marker) {
      marker.addListener('click', function() {
        map.setZoom(15);
        map.setCenter(this.getPosition());
      });
    }
  }

  flightPath();
}

// 좌표 선긋기
function flightPath(){
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

// 콤보박스(방문할관광지수) 값 가져오기
function handleOnChange(e) {
  cmb = e.options[e.selectedIndex].text;
}

// 체크박스 전체(체크박스) 선택 시 전체 요소 선택
function allCheck(e) {
  if(e.target.checked) {
    document.querySelectorAll(".check_all_list").forEach(function(v, i) {
      v.checked = true;
    });
  }
  else {
    document.querySelectorAll(".check_all_list").forEach(function(v, i) {
      v.checked = false;
    });
  }
}

// 체크박스 모두 선택 시 전체(체크박스)에도 체크됨
// 모든 요소 선택된 상태에서 하나 체크 해제하면 전체(체크박스)에도 체크 해제됨
function checkAllList(e) {
  let checkCount = 0;
  document.querySelectorAll(".check_all_list").forEach(function(v, i) {
    if(v.checked == false){
      checkCount++;
    }
  });
  if(checkCount>0) {
    document.getElementById("allCheck").checked = false;
  }
  else if(checkCount == 0) {
    document.getElementById("allCheck").checked = true;
  }
}

// 지도 출력
// 마크, 동선을 그리고 난 후 해당 위치를 array에 저장
var MarkersArray = []; // 마커 담는 곳
var Coordinates= []; // 좌표 넣는곳
var travelPathArray = [];

const labels = "ABCDE";
let labelIndex = 0;

var map = new google.maps.Map(document.getElementById('map'),{
  zoom: 14,
  center: new google.maps.LatLng(37.5655638, 126.974894),
  mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
