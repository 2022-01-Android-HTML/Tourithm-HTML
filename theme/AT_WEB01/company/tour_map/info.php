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

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png"><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <h3 class="wow fadeInDown">TOURLIST</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s"><?php echo $_GET["value"]; ?></p>
    </div>

</div>
<div class="mdlTxt">
    <h2 class="wow flipInX" data-wow-duration="2s"><?php echo $_GET["value"]; ?></h3>
    <h3>
    <?php

      try {
        $dbHost = "localhost";      // 호스트 주소
        $dbName = "idox23";         // 데이타 베이스(DataBase) 이름
        $dbUser = "idox23";         // DB 아이디
        $dbPass = "minjeong23";     // DB 패스워드

        // PDO 연결하기
        $db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass); //mySQL conneting

      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }

      $to_name = $_GET["value"];
      $re_name = trim($to_name); // 앞뒤 공백 제거

      //데이터 로드
      $query = "SELECT latitude, longitude FROM tour WHERE name = '$re_name'";
      $stmt = $db->prepare($query);
      $stmt->execute();
      $result = $stmt->fetchAll();

      foreach($result as $row){
        $row['latitude'];
        $row['longitude'];
      }
    ?>
  </h3>
</div>

<style>
  #map{
    width: 1000px;
    height: 450px;
    margin:auto;
    margin-bottom: 50px;
    }

</style>
<div>
  <div class="mdlTxt">
      <h2 class="wow flipInX" data-wow-duration="2s">위치</h2>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEbn654IUwSX1IOBlvleTlcS4ZsPKo1zY&callback=initMap" defer></script>

  <script>
  function initMap() {
    const myLatLng = {lat: <?php echo $row['latitude']; ?>, lng:<?php echo $row['longitude']; ?>}
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

  <div id="map"></div>
</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
