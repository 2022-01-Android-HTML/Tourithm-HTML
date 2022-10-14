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
.wrap_contView {
  positioin : relative;
  width: 1000px;
  margin-left: auto;
  margin-right: auto;
}

.wrap_contView h2 {
  font-size: 24px;
  margin-top: 60px;
  margin-bottom: 50px;
  font-weight: 800;
  text-align: center;
}

h3 {
  width: 100%;
  padding: 31px 0 15px;
  margin-top: 0;
  font-size: 24px;
  border-bottom: 2px solid #333;
  font-weight: 800;
  letter-spacing: -1px;
  color: #333;
  display: inline-block;
}
.custom {
  width: 100%;
  height: 280px;
  border-collapse: collapse;
  border-left: 1px solid #cecece;
  border-right: 1px solid #cecece;
  border-bottom: 3px solid #454545;
  border-top: 3px solid #454545;
  margin-bottom: 30px;
}
.custom p {
  padding-left: 5px;
  padding-right: 5px;
}
.custom th {
  padding: 8px 20px 8px 20px;
  font-size: 14px;
  color: #222;
  text-align: left;
  border-top: 1px solid #e9e9e9;
  background-color: #f9f9f9;
  border-spacing: 0;
  text-align: center;
}
.custom tr {
  border-top: 1px solid #e9e9e9;
}

.custom td {
  border-spacing: 0;
  padding: 8px 10px 8px 10px;
  font-size: 14px;
  border-top: 1px solid #e9e9e9;
  color: #666;
}
select {
  width: 200px;
  border: 1px solid #999;
}

.container {
  text-align: center;
}

.list {
  display: none;
  margin-bottom: 100px;
}

ol.numbered {
  border-left: 3px solid #b3b3b3;
  counter-reset: numbered-list;
  position: relative;
  margin-left: 30%;
  margin-right: 30%;
  padding-left: -300px;
}

ol.numbered li {
  font-size: 18px;
  line-height: 1.4;
  margin-bottom: 50px;
  width: 600px;
  text-align: left;
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
  width: 40px;
  height: 40px;
  padding-top: 0.2em;
  line-height: 30px;
  position: absolute;
  left: -20px;
  text-align: center;
}

ol.numbered li:hover {
  text-decoration: underline;
  text-underline-position: under;
  color: black;
}

#map {
  width: 1000px;
  height: 450px;
  margin:auto;
  margin-bottom: 50px;
}

.search {
  display: block;
  width: 100%;
  margin-top: 20px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 100px;
  text-align: center;
  background: #6698cb;
  color: white;
  font-size: 17px;
  padding: 5px 0 5px 0;
  border-radius:5px
}

.ex {
  text-align: center;
  padding-bottom: 20px;
}
.ex2 {
  text-align: center;
  padding-bottom: 20px;
  display: none;
}

.explanation {
  text-align: center;
  font-size: 16px;
  margin-bottom: 50px;
  display: block;
}

#explanation2 {
  font-size: 14px;
  color: #888888;
}

.dic {
  width: 200px;
  background: #6698cb;
  color: white;
  font-size: 17px;
  margin-right: 10px;
  padding: 5px 0 5px 0;
  border-radius:5px
  text-align:center;
}
.dicdiv {
  text-align: center;
  width: 100%;
  margin-bottom: 100px;
  display: none;
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



$q = "SELECT * FROM kr_tour ORDER BY ranking";
$q2 = "SELECT * FROM kr_camp ORDER BY ranking";
$q3 = "SELECT * FROM kr_hotel ORDER BY ranking";
$q4 = "SELECT * FROM kr_food ORDER BY ranking";

$re = mysqli_query($conn, $q);
$re2 = mysqli_query($conn, $q2);
$re3 = mysqli_query($conn, $q3);
$re4 = mysqli_query($conn, $q4);
$arr = array();

while ($row = mysqli_fetch_array($re)) {
  array_push($arr, ['12' => [$row['name'] => $row['areacode'].'/'.$row['ranking'].'/'.$row['lng'].'/'.$row['lat'].'/'.$row['addr1']]]);
}
while ($row2 = mysqli_fetch_array($re2)) {
  array_push($arr, ['28' => [$row2['name'] => $row2['areacode'].'/'.$row2['ranking'].'/'.$row2['lng'].'/'.$row2['lat'].'/'.$row2['addr1']]]);
}
while ($row3 = mysqli_fetch_array($re3)) {
  array_push($arr, ['32' => [$row3['name'] => $row3['areacode'].'/'.$row3['ranking'].'/'.$row3['lng'].'/'.$row3['lat'].'/'.$row3['addr1']]]);
}
while ($row4 = mysqli_fetch_array($re4)) {
  array_push($arr, ['39' => [$row4['name'] => $row4['areacode'].'/'.$row4['ranking'].'/'.$row4['lng'].'/'.$row4['lat'].'/'.$row4['addr1']]]);
}

//print_r($arr);
//echo count($arr);
mysqli_close($conn);
?>

<div class="wrap_contView">
  <h2 class="wow flipInX" data-wow-duration="2s"> 원하는 검색 조건을 선택하세요. </h2>
  <div class="explanation">
    <p>루트 선정 조건을 아래에서 선택하여 원하는 대로 여행지 루트를 추천받으실 수 있습니다.</br>
      방문할 관광지 수를 선택하면 분류, 지역, 거리 조건에 따라 아래 지도에 여행지가 표시됩니다.</p>
    </br>ㅡ</br></br>
      <p id="explanation2">(분류) 관광지: 명소, 문화재, 랜드마크 등 / 숙박: 호텔, 펜션, 게스트하우스 등 / 음식점: 식당, 레스토랑, 베이커리 등 / 레포츠: 캠핑, 스포츠, 익스트림 등</br>
        (거리) 루트 내의 두 장소(A<->B, A<->C)간의 거리입니다. 관광지 수를 3개, 50km 선택시 총 이동 거리는 150km 미만입니다.</br>
        (검색 기준) '랭킹/거리 순으로 검색하기' 선택 시 랭킹/가까운 거리를 기준으로 관광지를 추천받습니다.</p>
  </div>
  <table class="custom" align="center">
    <tr>
      <th>분류</th>
      <td><p><label><input type="checkbox" name="type" id="allCheck" value="all" checked onclick="allCheck(event)"> 전체 </label></p></td>
      <td><p><label><input type="checkbox" name="type" class="check_all_list" value="12" checked onclick="checkAllList(event)"> 관광지 </label></p></td>
      <td><p><label><input type="checkbox" name="type" class="check_all_list" value="28" checked onclick="checkAllList(event)"> 레저 </label></p></td>
      <td><p><label><input type="checkbox" name="type" class="check_all_list" value="32" checked onclick="checkAllList(event)"> 숙박업소 </label></p></td>
      <td><p><label><input type="checkbox" name="type" class="check_all_list" value="39" checked onclick="checkAllList(event)"> 맛집 </label></p></td>
    </tr>

    <tr>
      <th rowspan="2"> 지역 </th>
      <td><p><label><input type="radio" name="area" value="1" checked> 서울 </label></p></td>
      <td><p><label><input type="radio" name="area" value="2"> 인천 </label></p></td>
      <td><p><label><input type="radio" name="area" value="3"> 대전 </label></p></td>
      <td><p><label><input type="radio" name="area" value="4"> 대구 </label></p></td>
      <td><p><label><input type="radio" name="area" value="5"> 광주 </label></p></td>
      <td><p><label><input type="radio" name="area" value="6"> 부산 </label></p></td>
      <td><p><label><input type="radio" name="area" value="7"> 울산 </label></p></td>
      <td><p><label><input type="radio" name="area" value="8"> 세종 </label></p></td>
    </tr>
    <tr>
      <td ><p><label><input type="radio" name="area" value="31"> 경기도 </label></p></td>
      <td><p><label><input type="radio" name="area" value="32"> 강원도 </label></p></td>
      <td><p><label><input type="radio" name="area" value="33"> 충청북도 </label></p></td>
      <td><p><label><input type="radio" name="area" value="34"> 충청남도 </label></p></td>
      <td><p><label><input type="radio" name="area" value="35"> 경상북도 </label></p></td>
      <td><p><label><input type="radio" name="area" value="36"> 경상남도 </label></p></td>
      <td><p><label><input type="radio" name="area" value="37"> 전라북도 </label></p></td>
      <td><p><label><input type="radio" name="area" value="38"> 전라남도 </label></p></td>
      <td><p><label><input type="radio" name="area" value="39"> 제주도 </label></p></td>
    </tr>

    <tr>
      <th> 거리 </th>
      <td><p><label><input type="radio" name="radius" value="50" checked> 50km </label></p></td>
      <td><p><label><input type="radio" name="radius" value="100"> 100km </label></p></td>
      <td><p><label><input type="radio" name="radius" value="150"> 150km </label></p></td>
    </tr>

    <tr>
      <th> 방문할 관광지 수 </th>
      <td colspan="7">
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
      <th> 검색 기준 </th>
      <td colspan="2"><p><label><input type="radio" name="dis_search" value="ra" checked> 랭킹 순으로 검색하기 </label></p></td>
      <td colspan="2"><p><label><input type="radio" name="dis_search" value="di"> 거리 순으로 검색하기 </label></p></td>
    </tr>
  </table>
  <p><button class="search" onclick='getCheckboxValue()'>검 색</button></p>

<div id='result'></div>

<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap"></script>

<div class="list" id="list">
  <div class="ex">
    <h3 class="tour_info_title"> < 상세 정보를 확인하려면 관광지 이름을 클릭하세요. > </h3>
  </div>
  <div class="container">
    <ol class="numbered" id="numbered">
    </ol>
  </div>
</div>
  <div class="ex2" id="howgo">
    <h3 class="tour_info_title"> < 가는 방법 > </h3>
  </div>
  <div class = "dicdiv" id = "dicdiv">
  </div>
</div>


<script>
var i = 1;
let cmb = '1'; // 콤보박스 value 초기화
let distance = '';
let ar = 'none';
let dis_srh = 'rank';
var relist = [];
var addr5 = [];

// 검색 버튼 클릭 시
function getCheckboxValue()  {
  document.getElementById("list").style.display = 'block';

  // 체크박스 value 가져오기
  const query = 'input[name="type"]:checked';
  const selectedEls = document.querySelectorAll(query);
  let ty = [];
  selectedEls.forEach((el) => {
    ty.push(el.value);
  });

  // 라디오버튼 value 가져오기
  const disNodeList = document.getElementsByName('radius');
  const disNodeList2 = document.getElementsByName('area');
  const disNodeList3 = document.getElementsByName('dis_search');
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
  disNodeList3.forEach((node) => {
    if(node.checked)  {
      dis_srh = node.value;
    }
  })

  // 선택한 분류에 대한 관광지 배열 생성 -> tourarr
  const tourarr = [];
  for(var t=0; t<ty.length; t++){
    <?
    // keys : 분류, keyss : 이름 valuess : 지역코드/랭킹/위도/경도/우편번호/도로명주소
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
  // spltvl[0] : 분류, [1] : 이름, [2] : 지역코드, [3] : 랭킹, [4] : 위도, [5] : 경도, [6] : 우편번호, [7] : 도로명주소
  var checkvl = []
  for(var tt=0; tt<tourarr.length; tt++) {
    var spltvl = '';
    spltvl = tourarr[tt].split('/');
    if(ar == spltvl[2]) {
      checkvl.push(tourarr[tt]);
    }
  }

  // 첫번째 관광지 랜덤 선택
  var rand_first_area = checkvl[Math.floor(Math.random()*10)];

  // addr1 : 첫번째 관광지 위도/경도, addr2 : 그 외 선택한 지역 관광지 위도/경도
  let addr1 = [];
  let addr2 = [];
  for (var rr=0; rr<checkvl.length; rr++) {
    var spltvl = checkvl[rr].split('/');
    if(checkvl[rr] == rand_first_area) {
      addr1.push(spltvl[4]+'/'+spltvl[5]);
      checkvl.splice(rr, 1);
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
  var temp, temp2, temp3, temp4, temp_r, temp2_r, temp3_r, temp4_r = '';
  var rankre_ar = [];
  // 거리 계산
  for(var n = 0; n < addr2.length; n++){
    addr1_sp[0] *= 1;
    var addr2_sp = addr2[n].split('/');
    addr2_sp[0] *= 1;
    addr2_sp[1] *= 1;
    var R = 6371;
    var dLat = deg2rad(addr2_sp[1]-addr1_sp[1]);
    var dLon = deg2rad(addr2_sp[0]-addr1_sp[0]);
    var a = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.cos(deg2rad(addr1_sp[1])) * Math.cos(deg2rad(addr2_sp[1])) * Math.sin(dLon/2) * Math.sin(dLon/2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
    var dis = R * c; // km
    var d = Math.round(dis);
    if(d < distance) {
      di_sort.push(d);
      result.push(checkvl[n]+'/'+d); // 선택한 거리 이내에 존재하는 관광지 이름(1번빼고)
      addr2_re.push(addr2[n]); // 선택한 거리 이내에 존재하는 관광지 좌표(1번빼고)
      var rankre = checkvl[n].split('/');
      // 랭킹 정수로 변경
      var int_rank = rankre[3];
      int_rank *= 1;
      rankre_ar.push(int_rank);
    }
  /*  버블정렬
  for(var hhh=0; hhh<di_sort.length; hhh++){
      if(dis_srh == 'di') {
        // 거리 순으로 정렬
        for (var h = 0; h < di_sort.length-1-hhh; h++) {
          if (di_sort[h] > di_sort[h + 1]) {
            temp = di_sort[h];
            temp2 = result[h];
            temp3 = addr2_re[h];
            temp4 = rankre_ar[h];
            di_sort[h] = di_sort[h + 1];
            result[h] = result[h + 1];
            addr2_re[h] = addr2_re[h + 1];
            rankre_ar[h] = rankre_ar[h + 1]
            di_sort[h + 1] = temp;
            result[h + 1] = temp2;
            addr2_re[h + 1] = temp3;
            rankre_ar[h + 1] = temp4;
          }
        }
      }
      if(dis_srh == 'ra') {
        // 랭킹 순으로 정렬
        for(var hh = 0; hh < rankre_ar.length-1-hhh; hh++) {
          if(rankre_ar[hh] > rankre_ar[hh+1]) {
            temp_r = di_sort[hh];
            temp2_r = result[hh];
            temp3_r = addr2_re[hh];
            temp4_r = rankre_ar[hh];
            di_sort[hh] = di_sort[hh + 1];
            result[hh] = result[hh + 1];
            addr2_re[hh] = addr2_re[hh + 1];
            rankre_ar[hh] = rankre_ar[hh + 1]
            di_sort[hh + 1] = temp_r;
            result[hh + 1] = temp2_r;
            addr2_re[hh + 1] = temp3_r;
            rankre_ar[hh + 1] = temp4_r;
          }
        }
      }
    }*/
  }

  // 삽입정렬
  if(dis_srh == 'di') {
    for (let iii = 0; iii < di_sort.length; iii++) {
      let jjj = iii;
      while (di_sort[jjj] > di_sort[jjj + 1] && jjj >= 0) {
        temp = di_sort[jjj];
        di_sort[jjj] = di_sort[jjj + 1];
        di_sort[jjj + 1] = temp;

        temp2 = result[jjj];
        result[jjj] = result[jjj + 1];
        result[jjj + 1] = temp2;

        temp3 = addr2_re[jjj];
        addr2_re[jjj] = addr2_re[jjj + 1];
        addr2_re[jjj + 1] = temp3;

        temp4 = rankre_ar[jjj];
        rankre_ar[jjj] = rankre_ar[jjj + 1];
        rankre_ar[jjj + 1] = temp4;
        jjj--;
      }
    }
  }
  if(dis_srh == 'ra') {
    for (let iii = 0; iii < rankre_ar.length; iii++) {
      let jjj = iii;
      while (rankre_ar[jjj] > rankre_ar[jjj + 1] && jjj >= 0) {
        temp = di_sort[jjj];
        di_sort[jjj] = di_sort[jjj + 1];
        di_sort[jjj + 1] = temp;

        temp2 = result[jjj];
        result[jjj] = result[jjj + 1];
        result[jjj + 1] = temp2;

        temp3 = addr2_re[jjj];
        addr2_re[jjj] = addr2_re[jjj + 1];
        addr2_re[jjj + 1] = temp3;

        temp4 = rankre_ar[jjj];
        rankre_ar[jjj] = rankre_ar[jjj + 1];
        rankre_ar[jjj + 1] = temp4;
        jjj--;
      }
    }
  }
  relist = [];
  // 1번 관광지랑 2~5 관광지 합치기 -> relist
  relist.push(rand_first_area);
  for (var f = 0; f < result.length; f++){
    relist.push(result[f]);
  }

  // 관광지 리스트 초기화
  var lis = document.querySelectorAll('#numbered li');
  for(var j=0; li=lis[j]; j++) {
      li.parentNode.removeChild(li);
  }
  // 가는 방법 버튼 초기화
  var btn_dic = document.querySelectorAll('#dicdiv button');
  for(var jj=0; button=btn_dic[jj]; jj++) {
      button.parentNode.removeChild(button);
  }

  var q = 0;
  var cnt = cmb;
  var markname = [];
  var indexar = [0,1,2,3,4,5];
  addr5 = [];
  if(cnt != 1){
    document.getElementById("dicdiv").style.display = 'block';
    document.getElementById("howgo").style.display = 'block';
  }
  else {
    document.getElementById("dicdiv").style.display = 'none';
    document.getElementById("howgo").style.display = 'none';
  }

  // 방문할 관광지 수보다 결과값이 적으면 결과값만큼 리스트 추가
  if(relist.length < cmb) {
    cnt = relist.length;
  }
  // 선택한 관광지 수에 따라 관광지 리스트 동적 추가
  while(q < cnt) {
    const li = document.createElement("li");
    var namelist = relist[q].split('/');
    li.setAttribute('id', namelist[0]); // id 지정 0 1 2 3 4
    li.setAttribute('onclick', "send_data(this)");

    if(namelist[0]=='12'){
      var type_re = "관광지";
    }
    else if(namelist[0]=='28'){
      var type_re = "레저";
    }
    else if(namelist[0]=='32'){
      var type_re = "숙박업소";
    }
    else {
      var type_re = "맛집";
    }
    if (q == 0) {
      var textNode = document.createTextNode(namelist[1] + "  | " + type_re + " [" + namelist[3] +"위]");
    }
    else {
      var textNode = document.createTextNode(namelist[1] + "  | " + type_re + " [" + namelist[3] +"위] | " + namelist[7] + "km");
    }
    markname.push(namelist[1]);
    addr5.push(namelist[6]);
    li.appendChild(textNode);
    document.getElementById('numbered').appendChild(li);
    q++;
  }
  var qq=0;
  while(qq != cnt-1) {
    const button = document.createElement("button");
    button.setAttribute('id', indexar[qq]); // id 지정 0 1 2 3
    button.setAttribute('class', "dic");
    var direcB = "directB("+qq+")";
    button.setAttribute('onclick', direcB);
    var textNode2 = document.createTextNode(indexar[qq+1] + "에서 " + indexar[qq+2] +" 경로");
    button.appendChild(textNode2);
    document.getElementById('dicdiv').appendChild(button);
    qq++;
  }
  // 관광지 리스트 1~5 위도 경도 배열 생성
  var loc = [];
  var ad_sp = '';
  loc.push([addr1_sp[1], addr1_sp[0]]);
  for (var y = 0; y < cnt-1; y++) {
    ad_sp = result[y].split('/');
    loc.push([ad_sp[5], ad_sp[4]]);
  }
  //document.getElementById('result').innerHTML = addr5;
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

// 값 넘기기
function directB(num){
  var start = addr5[num];
  var end = addr5[num+1];
  location.href = "/theme/AT_WEB01/company/tour_map/map_test2.php?value1="+start+"&value2="+end;
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

// 출력된 관광지 클릭 시 페이지 이동
function send_data(ths){
  var str = $(ths).text();
  var str_sp = str.split(' |');
  var id = $(ths).attr('id');
  if(id == '12') { // tour 관광지
    location.href = "/theme/AT_WEB01/company/tour_list/kr_tour/kr_tour_info.php?value=" + str_sp[0];
  }
  if(id == '28') { // camp 레포츠
    location.href = "/theme/AT_WEB01/company/tour_list/kr_camp/kr_camp_info.php?value=" + str_sp[0];
  }
  if(id == '32') { // hotel 숙박
    location.href = "/theme/AT_WEB01/company/tour_list/kr_hotel/kr_hotel_info.php?value=" + str_sp[0];
  }
  if(id == '39') { // food 음식점
    location.href = "/theme/AT_WEB01/company/tour_list/kr_food/kr_food_info.php?value=" + str_sp[0];
  }
}

function shuffle(array) {
  array.sort(() => Math.random() - 0.5);
}

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
