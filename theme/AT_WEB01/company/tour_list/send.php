<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png"><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <h3 class="wow fadeInDown">TOURLIST</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">데이터 전송 테스트</p>
    </div>

</div>
<div class="mdlTxt">
    <h2 class="wow flipInX" data-wow-duration="2s">국내 여행지 목록</h2>
</div>

<style>
/* s:skin>board>webzine02 */
.listForm{
    margin-top:3%;
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
    padding-bottom:12px;
}
li dl dd:nth-child(3) {
    font-size:1em;
    font-weight:400;
    color:#454545;
    display:table;
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
</style>

<div id="bo_list" style="width:<?php echo $width; ?>" class="webzine_table">
    <div class="inner">

        <form name="fboardlist" id="fboardlist" action="./info.php" onsubmit="return fboardlist_submit(this);" method="post" class="wow fadeInUp" data-wow-delay="0.3s">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
            <input type="hidden" name="stx" value="<?php echo $stx ?>">
            <input type="hidden" name="spt" value="<?php echo $spt ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sst" value="<?php echo $sst ?>">
            <input type="hidden" name="sod" value="<?php echo $sod ?>">
            <input type="hidden" name="page" value="<?php echo $page ?>">
            <input type="hidden" name="sw" value="">

            <?php
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

              class Pagination {
                  //클래스 내부에서 하단 페이지넘버 처리에 필요한 변수
                  private
                  $page,
                  $total_page,
                  $first_page,
                  $last_page,
                  $prev_page,
                  $next_page,
                  $total_block,
                  $next_block,
                  $next_block_page,
                  $prev_block,
                  $prev_block_page,
                  $PHP_SELF = "https://idox23.cafe24.com/theme/AT_WEB01/company/tour_list/kr_tour_list.php/";
                  //설정에서 register_globals=Off 인 경우에 $PHP_SELF 수퍼변수는 동작하지 않기때문에 경로를 지정해주는것이 좋다.

                  //클래스 외부에서 필요한 변수
                  public
                  $limit_idx,
                  $page_set;

                  //페이지 줄수, 블럭수, 데이터베이스이름을 받아 데이터 정리
                  public function __construct($pg, $bl, $dbName) {

                      //외부 데이터베이스 접속정보 선언
                      global $db;

                      $this->page_set = $pg; // 한페이지 줄수
                      $block_set = $bl; // 한페이지 블럭수
                      $query = 'SELECT count(name) AS total FROM tour';

                      $stmt = $db->prepare($query);
                      $stmt->execute();
                      $result = $stmt->fetch(PDO::FETCH_ASSOC);
                      $total = $result['total']; // 전체글수

                      $this->total_page = ceil($total / $this->page_set); // 총페이지수(올림함수)
                      $this->total_block = ceil($this->total_page / $block_set); // 총블럭수(올림함수)

                      $this->page = ($_GET['pg']) ? $_GET['pg'] : 1; //파라미터로 현재 페이지정보를 받아옴
                      $block = ceil($this->page/$block_set); // 현재블럭(올림함수)
                      $this->limit_idx = ($this->page - 1) * $this->page_set; // limit시작위치

                      $this->first_page = (($block - 1) * $block_set) + 1; // 첫번째 페이지번호
                      $this->last_page = min ($this->total_page, $block * $block_set); // 마지막 페이지번호

                      $this->prev_page = $this->page - 1; // 이전페이지
                      $this->next_page = $this->page + 1; // 다음페이지

                      $this->prev_block = $block - 1; // 이전블럭
                      $this->next_block = $block + 1; // 다음블럭

                      // 이전블럭을 블럭의 마지막으로 하려면...
                      $this->prev_block_page = $this->prev_block * $block_set; // 이전블럭 페이지번호

                      // 이전블럭을 블럭의 첫페이지로 하려면...
                      //$prev_block_page = $prev_block * $block_set - ($block_set - 1);

                      $this->next_block_page = $this->next_block * $block_set - ($block_set - 1); // 다음블럭 페이지번호

                  }

                  //하단 페이지 넘버링
                  public function BottomPageNumber(){
                      echo "<div class='page'>
                      <ul class='pagination'>";

                      echo ($this->prev_block > 0) ? "<a href='$this->PHP_SELF/?pg=$this->prev_block_page' class='btn_prevs'> 이전 페이지 </a>" : "<a class='btn_prevs_no'> 이전 페이지 </a>";
                      echo ($this->prev_page > 0) ? "<a href='$this->PHP_SELF/?pg=$this->prev_page' class='btn_prev'> < </a>" : "<a class='btn_prev_no'> < </a>";

                      for ($i=$this->first_page; $i<=$this->last_page; $i++) {

                          echo ($i != $this->page) ? "<a href='$this->PHP_SELF/?pg=$i' class='btn_no'>$i</a> " : "<a class='now_no'>$i</a>";

                      }

                      echo ($this->next_page <= $this->total_page) ? "<a href='$this->PHP_SELF/?pg=$this->next_page' class='btn_next'> > </a>" : "<a class='btn_prev_no'> > </a>";
                      echo ($this->next_block <= $this->total_block) ? "<a href='$this->PHP_SELF/?pg=$this->next_block_page' class='btn_nexts'> 다음 페이지 </a>" : "<a class='btn_nexts_no'> 다음 페이지 </a>";

                      echo "</ul>
                      </div>";

                  }

              }

              // 한페이지 줄수, 한페이지 블럭수, 데이터베이스이름 설정
              $pagination = new Pagination(5, 5, $dbName);

              //데이터 로드
              $query = 'SELECT * FROM tour ORDER BY name DESC LIMIT ' . $pagination->limit_idx . ', ' . $pagination->page_set;
              $stmt = $db->prepare($query);
              $stmt->execute();
              $result = $stmt->fetchAll();
            ?>
            <div class="listForm">
              <ul>
                <?php
                  foreach ($result as $row) { //데이터 출력
                ?>
                <form name="fboardlist" id="fboardlist" action="./info.php" onsubmit="return fboardlist_submit(this);" method="post" class="wow fadeInUp" data-wow-delay="0.3s">

                <li onclick="location.href='./info.php'">
                  <div class="image_box">
                    <img src="../Image/testimage.png" width=90% alt>
                  </div>
                  <div class="tour_box">
                    <dl>
                      <dt>
                        <?php
                          echo $row['name'].' | '.$row['categori'];
                        ?>
                      </dt>
                      <dd>
                        <?php
                          echo $row['intro'];
                        ?>
                      </dd>
                      <dd>
                        <?php
                          echo $row['add_road'];
                        ?>
                      </dd>
                      <dd>
                        <?php
                          echo $row['tel'];
                        ?>
                      </dd>
                    </dl>
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
        </form>
        <?php
          //하단 페이지 넘버링
          $pagination->BottomPageNumber();
        ?>
    </div>
</div>

<script>
$("#tour_box dl").click(function(){
  var str=""
  var tdArr = new Array();

  var dl = $(this);
  var dd = dl.children();

  console.log("클릭한 데이터 : " + dl.text());
});

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
