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
        <h3 class="wow fadeInDown">TOURLIST</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">투어리즘에 등재된 국내 여행지 목록입니다.</p>
    </div>

</div>
<div class="mdlTxt">
    <h2 class="wow flipInX" data-wow-duration="2s">국내 여행지 목록</h2>
</div>

<style>
/* s:skin>board>webzine02 */
.listForm{
    margin-top:17%;
    border-top:2px solid #333;
}
.listForm li{
    padding:2%;
    cursor: pointer;
    display:table;
    border-bottom:1px solid #ccc;
}
li:hover {
    background-color:#f9f7f7;
    box-shadow:3px 3px 5px rgba(0,0,0,0.2);
}
li .image_box {
    display:table-cell;
    vertical-align: middle;
    width:20%;
    overflow:hidden;
}
li .tour_box {
    display:table-cell;
    vertical-align: middle;
    width:1000px;
}
li dl dt {
    font-size:1.4em;
    font-weight:bold;
    color:#333;
    padding-bottom:10px;
}
li dl dd:nth-child(2) {
    font-size:1.1em;
    font-weight:400;
    color:#333;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* 라인수 */
    -webkit-box-orient: vertical;
    word-wrap:break-word;
    line-height: 1.2em;
    height: 2.4em;
}
li dl dd:nth-child(3) {
    font-size:1em;
    font-weight:400;
    color:#454545;
    display:table;
    padding-top: 12px;
}
li dl dd:nth-child(4) {
    font-size:1em;
    font-weight:400;
    color:#888888;
    display:table;
}
.info_txt {
    font-size:1.8em;
    font-weight:bold;
    color:#333;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 4% 0;
}

.page {
    margin-top: 50px;
    margin-bottom: 50px;
    text-align: center;
}
.pagination {
    text-align: center;
    display: inline;
    vertical-align: middle;
}
.pagination a {
    display: inline-block;
    vertical-align: top;
    padding: 5px 12px;
    color: #232323;
    font-size: 14px;
    border: 1px solid #ddd;
    text-align: center;
    text-decoration: none;
    height: 100%;
    margin: 10px;
}
a.now_no {
    color: #ffffff;
    background-color: #333333;
    border:1px solid #444444;
}
.btn_no:hover, .btn_prev:hover, .btn_next:hover {
    color: #ffffff;
    border: 1px solid #666666;
    background-color: #555555;
    height: 100%;
}
a.btn_prev {
    margin-right: 30px;
}
a.btn_next {
    margin-left: 30px;
}
a.btn_prev_no {
    font-weight:bold;
    color: #999;
    border: 0px;
    height: 100%;
    margin-right: 30px;
}
a.btn_next_no {
    font-weight:bold;
    color: #999;
    border: 0px;
    height: 100%;
    margin-left: 30px;
}
a.btn_prevs, a.btn_nexts {
    font-weight:bold;
    color: #000;
    border: 0px;
    height: 100%;
}
a.btn_prevs_no, a.btn_nexts_no {
    font-weight:bold;
    color: #999;
    border: 0px;
    height: 100%;
}

p {
  display: none;
}
p.ranking {
  float: right;
  display: block;
  font-size: 0.9em;
  font-weight: normal;
  color: #4374D9;
  padding-right:10px;
}
#value {
  background: #fff;
  border:1px solid gray;
  font-size: 18px;
  padding: 6px;
  width: 1000px;
  left: 50%;
  position: absolute;
  margin-left: -500px;
}
#value:focus {
  outline: none;
}
</style>

<?php
include_once('./local_select.php');
?>

<script type="text/javascript">
  var anText = '경기';

  function filter(){
    var value, name, item, i;

    value = document.getElementById("value").value.toUpperCase();
    item = document.getElementsByClassName("tour_list");

    for(i=0; i<item.length; i++) {
      name = item[i].getElementsByClassName("name");
      if(name[0].innerHTML.toUpperCase().indexOf(value) > -1) {
        item[i].style.display = "flex";
      } else {
        item[i].style.display = "none";
      }
    }
  }

  // radio button selected
  $('input[name=tab_item]').click(function(){

    var tab_item = $(this).attr("id");
    var anText = $("label[for='"+tab_item+"']").text();
    //alert('값 : ' + anText);
    //alert('값 : ' + anText);
    <?php
      $local = '<script> document.write(anText); </script>';
    ?>
  })
</script>

<div class="header">
    <input onkeyup="filter()" type="text" id="value" placeholder="검색하기">
</div>

<div id="bo_list" style="width:<?php echo $width; ?>" class="webzine_table">
    <div class="inner">

        <?php
        $local = $_GET['loc'];
        //$local = '<script> document.write(anText); </script>';
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
          $query = "SELECT * FROM kr_tour where areacode =" . $local ." ORDER BY ranking";
          $stmt = $db->prepare($query);
          $stmt->execute();
          $result = $stmt->fetchAll();
        ?>

        <script>
          $('#local' + <? echo $local; ?>).prop('checked', true);
        </script>

        <div class="listForm">
          <ul>
            <?php
              foreach ($result as $row) { //데이터 출력
            ?>
            <script>
              /*function send_data(){
                var value;
                //app.use(bodyParser.urlencoded({extended:true})); //post방식의 encoding
                $(".listForm dt").click(function(){ value = $(this).text() });
                location.href = "./kr_tour_info.php?value=" + value;
              }*/
              function send_data(ths){
                var str = $(ths).text();
                var world1 = str.split('@');
                var value = world1[1];
                //alert('값 : ' + value);
                location.href = "./kr_tour_info.php?value=" + value;
                //location.href = "../kr_tour_info.php?value=" + encodeURI(encodeURIComponent(value));
              }
            </script>
            <li onclick="send_data(this)" class="tour_list">
              <div class="image_box">
                <img src="<?php echo $row['firstimage']; ?>" width=90% alt>
              </div>
              <div class="tour_box">
                <dl>
                  <dt class="name">
                    <?php
                      echo '<p>@</p>'.$row['name'].'<p>@</p>';
                    ?>
                    <p class="ranking">
                      <?php
                        echo $row['ranking'];
                      ?>위
                    </p>
                  </dt>
                  <dd>
                    <?php
                      echo $row['overview'];
                    ?>
                    <p>@</p>
                  </dd>
                  <dd>
                    <?php
                      echo $row['addr1'];
                    ?>
                    <p>@</p>
                  </dd>
                  <dd>
                    <?php
                      echo $row['infocenter'];
                    ?>
                    <p>@</p>
                  </dd>
                </dl>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
