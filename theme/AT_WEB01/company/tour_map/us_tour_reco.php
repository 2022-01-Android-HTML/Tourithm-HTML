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
  padding-left: 40%;
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

.search {
  display: block;
  width: 500px;
  margin-top: 15px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 15px;
  text-align: center;
  background: #6698cb;
  color: white;
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

$q = "SELECT *, (6371*acos(cos(radians(37))*cos(radians(lat))*cos(radians(lng)-radians(127))+sin(radians(37))*sin(radians(lat)))) AS distance
  FROM kr_tour";
$q2 = "SELECT * FROM kr_camp";
$q3 = "SELECT * FROM kr_hotel";
$q4 = "SELECT * FROM kr_food";

$re = mysqli_query($conn, $q);
$re2 = mysqli_query($conn, $q2);
$re3 = mysqli_query($conn, $q3);
$re4 = mysqli_query($conn, $q4);
$arr = array();

while ($row = mysqli_fetch_array($re)) {
  array_push($arr, ['12' => [$row['name'] => $row['areacode'].'/'.$row['ranking'].'/'.$row['lat'].'/'.$row['lng']]]);
}
while ($row2 = mysqli_fetch_array($re2)) {
  array_push($arr, ['28' => [$row2['name'] => $row2['areacode'].'/'.$row2['ranking'].'/'.$row2['lat'].'/'.$row2['lng']]]);
}
while ($row3 = mysqli_fetch_array($re3)) {
  array_push($arr, ['32' => [$row3['name'] => $row3['areacode'].'/'.$row3['ranking'].'/'.$row3['lat'].'/'.$row3['lng']]]);
}
while ($row4 = mysqli_fetch_array($re4)) {
  array_push($arr, ['39' => [$row4['name'] => $row4['areacode'].'/'.$row4['ranking'].'/'.$row4['lat'].'/'.$row4['lng']]]);
}

//print_r($name_rank);
//echo count($arr);
mysqli_close($conn);
?>

  <table class="custom" width="65%" height="200" align="center">
    <tr>
      <th width="160px">분류</th>
      <td><p><label><input type="checkbox" name="type" id="allCheck" value="all" checked onclick="allCheck(event)"> 전체</p></label></td>
      <td><p><label><input type="checkbox" name="type" class="check_all_list" value="12" checked onclick="checkAllList(event)"> 관광지</p></label></td>
      <td><p><label><input type="checkbox" name="type" class="check_all_list" value="28" checked onclick="checkAllList(event)"> 레포츠</p></label></td>
      <td><p><label><input type="checkbox" name="type" class="check_all_list" value="32" checked onclick="checkAllList(event)"> 숙박</p></label></td>
      <td><p><label><input type="checkbox" name="type" class="check_all_list" value="39" checked onclick="checkAllList(event)"> 음식점</p></label></td>
    </tr>

    <tr>
      <th rowspan="2">지역</th>
      <td><p><label><input type="radio" name="area" value="1" checked> 서울</p></label></td>
      <td><p><label><input type="radio" name="area" value="2"> 인천</p></label></td>
      <td><p><label><input type="radio" name="area" value="3"> 대전</p></label></td>
      <td><p><label><input type="radio" name="area" value="4"> 대구</p></label></td>
      <td><p><label><input type="radio" name="area" value="5"> 광주</p></label></td>
      <td><p><label><input type="radio" name="area" value="6"> 부산</p></label></td>
      <td><p><label><input type="radio" name="area" value="7"> 울산</p></label></td>
      <td><p><label><input type="radio" name="area" value="8"> 세종</p></label></td>
    </tr>
    <tr>
      <td width="90px"><p><label><input type="radio" name="area" value="31"> 경기도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" value="32"> 강원도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" value="33"> 충청북도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" value="34"> 충청남도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" value="35"> 경상북도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" value="36"> 경상남도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" value="37"> 전라북도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" value="38"> 전라남도</p></label></td>
      <td width="90px"><p><label><input type="radio" name="area" value="39"> 제주도</p></label></td>
    </tr>

    <tr>
      <th>거리</th>
      <td><p><label><input type="radio" name="time" value="50" checked> 50km</p></label></td>
      <td><p><label><input type="radio" name="time" value="100"> 100km</p></label></td>
      <td><p><label><input type="radio" name="time" value="150"> 150km</p></label></td>
    </tr>

    <tr>
      <th>방문할 관광지 수</th>
      <td colspan="7" width="200px">
        <select name="count" class="select" id="cnt" onchange="handleOnChange(this)">
          <option value="1" selected>1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </td>
    </tr>

    <tr>
      <th>검색 기준</th>
      <td colspan="7"><p><label><input type="checkbox" id="dis_search" name="dis_search" value="checked" checked> 거리순으로 검색하기</p></label></td>
    </tr>
  </table>
  <p><button class="search" onclick='getCheckboxValue()'>검 색</button></p>

<div id='result'></div>

<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap"></script>

<div class="container">
  <ol class="numbered" id="numbered">
  </ol>
</div>


<script>
var i = 1;
let cmb = '1'; // 콤보박스 value 초기화
let distance = '';
let ar = 'none';
var relist = [];
// 검색 버튼 클릭 시
function getCheckboxValue()  {
  // 체크박스 value 가져오기
  const query = 'input[name="type"]:checked';
  const query2 = 'input[name="dis_search"]:checked';
  const selectedEls = document.querySelectorAll(query);
  const selectedEls2 = document.querySelectorAll(query2);
  let ty = [];
  let dis_srch = '';
  selectedEls.forEach((el) => {
    ty.push(el.value);
  });
  selectedEls2.forEach((el) => {
    dis_srh = el.value;
  });

  // 라디오버튼 value 가져오기
  const disNodeList = document.getElementsByName('time');
  const disNodeList2 = document.getElementsByName('area');
  disNodeList.forEach((node) => {
    if(node.checked)  {
      distance = node.value;
    }
  })
  disNodeList2.forEach((node) => {
    if(node.checked)  {
      ar = node.value;
    }
  })

  // 선택한 분류에 대한 관광지 배열 생성 -> tourarr
  const tourarr = [];
  for(var t=0; t<ty.length; t++){
      <?// keys : 분류, keyss : 이름 valuess : 지역코드/랭킹/위도/경도
    foreach($arr as $key => $value) {
      foreach($value as $keys => $values) {
        foreach($values as $keyss => $valuess) {?>
          if(ty[t] == '<?echo $keys;?>') {
            tourarr.push('<?echo $keys;?>' + '/' + '<?echo $keyss;?>' + '/' + '<?echo $valuess;?>');
          }
      <?}
      }
    }?>
  }

  // 선택한 분류/지역에 대한 관광지 배열 생성 -> checkvl
  // spltvl[0] : 분류, [1] : 이름, [2] : 지역코드, [3] : 랭킹, [4] : 위도, [5] : 경도
  var checkvl = []
  for(var tt=0; tt<tourarr.length; tt++) {
    var spltvl = '';
    spltvl = tourarr[tt].split('/');
    if(ar == spltvl[2]) {
      checkvl.push(tourarr[tt]);
    }
  }

  // 첫번째 관광지 랜덤 선택
  var rand_first_area = '';
  rand_first_area = checkvl[Math.floor(Math.random()*(checkvl.length-1))];

  // addr1 : 첫번째 관광지 위도/경도, addr2 : 그 외 선택한 지역 관광지 위도/경도
  let addr1 = [];
  let addr2 = [];
  for (var rr=0; rr<checkvl.length; rr++) {
    var spltvl = checkvl[rr].split('/');
    if(checkvl[rr] == rand_first_area) {
      addr1.push(spltvl[4]+'/'+spltvl[5]);
    }
    else {
      addr2.push(spltvl[4]+'/'+spltvl[5]);
    }
  }

  function deg2rad(deg) {
    return deg * (Math.PI/180)
  }
  var addr1_sp = addr1[0].split('/');
  var di_sort = [];
  var result = [];
  var addr2_re = [];
  var temp, temp2, temp3 = '';

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
    if(d < distance) {
      di_sort.push(d);
      result.push(checkvl[n]); // 선택한 거리 이내에 존재하는 관광지 이름(1번빼고)
      addr2_re.push(addr2[n]); // 선택한 거리 이내에 존재하는 관광지 좌표(1번빼고)
    }
    if(dis_srh == 'checked') {
      // 거리순으로 정렬
      for (var h = 0; h < di_sort.length; h++) {
        if (di_sort[h] > di_sort[h + 1]) {
          temp = di_sort[h];
          temp2 = result[h];
          temp3 = addr2_re[h];
          di_sort[h] = di_sort[h + 1];
          result[h] = result[h + 1];
          addr2_re[h] = addr2_re[h + 1];
          di_sort[h + 1] = temp;
          result[h + 1] = temp2;
          addr2_re[h + 1] = temp3;
        }
      }
    }
  }

  // 1번 관광지랑 2~5 관광지 합치기 -> relist
  relist.push(rand_first_area);
  for (var f = 0; f < result.length; f++)
    relist.push(result[f]);

  // 관광지 리스트 초기화
  var lis = document.querySelectorAll('#numbered li');
  for(var j=0; li=lis[j]; j++) {
      li.parentNode.removeChild(li);
  }

  var q = 0;
  var cnt = cmb;
  var markname = [];
  // 선택한 관광지 수에 따라 관광지 리스트 동적 추가
  if(relist.length < cmb) {
    cnt = relist.length;
  }
  while(q < cnt) {
    const li = document.createElement("li");
    li.setAttribute('id', q); // id 지정 0 1 2 3 4
    li.setAttribute('onclick', "send_data(this)");
    var namelist = relist[q].split('/');
    var textNode = document.createTextNode(namelist[1]);
    markname.push(namelist[1]);
    li.appendChild(textNode);
    document.getElementById('numbered').appendChild(li);
    q++;
  }

  document.getElementById('result').innerHTML = markname[0];

  // 관광지 리스트 1~5 위도 경도 배열 생성
 relist = [];
  var loc = [];
  var ad_sp = '';
  loc.push([addr1_sp[1], addr1_sp[0]]);
  for (var y = 0; y < cnt-1; y++) {
    ad_sp = addr2_re[y].split('/');
    loc.push([ad_sp[1], ad_sp[0]]);
  }

  // 지도 출력
  // 마크, 동선을 그리고 난 후 해당 위치를 array에 저장
  var MarkersArray = []; // 마커 담는 곳
  var Coordinates= []; // 좌표 넣는곳
  var travelPathArray = [];

  const labels = "ABCDE";
  let labelIndex = 0;

  // 지도 초기화
  var map = new google.maps.Map(document.getElementById('map'),{
    zoom: 13,
    center: new google.maps.LatLng(loc[0][0], loc[0][1]),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  // 마커 찍기
  for(var m = 0; m < loc.length; m++) {
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

    google.maps.event.addListener(marker, 'click', (function(marker, m) {
      return function() {
        infowindow.setContent(markname[m]);
        infowindow.open(map, marker);
      //  document.getElementById('test').innerHTML = namelist[1];
      }
    })(marker, m));
  }

  // 좌표 선긋기
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

var map = new google.maps.Map(document.getElementById('map'),{
  zoom: 14,
  center: new google.maps.LatLng(37.5655638, 126.974894),
  mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

function send_data(ths){
  var str = $(ths).text();
  for(var gg=0; gg<relist.length; gg++) {
    var code = relist[gg].split('/');
    if(code[0] == '12') {
      location.href = "/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=" + str;
    }
    if(code[0] == '28') {
      location.href = "/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=" + str;
    }
    if(code[0] == '32') {
      location.href = "/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=" + str;
    }
    if(code[0] == '39') {
      location.href = "/theme/AT_WEB01/company/tour_list/kr_tour_info.php?value=" + str;
    }
  }
}
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
