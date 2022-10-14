<?php
include_once('../../../../common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="ing_bnr_Wrap">
    <div class="bnrimg"><img src="<?php echo G5_THEME_IMG_URL ?>/business/banner.png"><br style="clear:both;"><br style="clear:both;"></div>
    <div class="bnrtxtwrap">
        <h3 class="wow fadeInDown">TOURLIST</h3>
        <div class="bnrline wow fadeInDown" data-wow-delay="0.1s"></div>
        <p class="wow fadeInDown" data-wow-delay="0.2s">길 찾기</p>
    </div>

</div>
<style>
  #direct_map{
     width: 1300px;
     height: 700px;
     margin:auto;
     margin-bottom: 50px;
   }

   .explanation {
     text-align: center;
     font-size: 20px;
     margin-bottom: 10px;
     display: block;

   }

</style>
<!--
$start_re = preg_replace("()", $start);
$desti_re = preg_replace("()", $desti);
-->

<?php
  $start = $_GET["value1"];
  $desti = $_GET["value2"];

  $test_url = "https://map.kakao.com/?sName=".$start."&eName=".$desti;
?>

<html>
<body>
  <br><br>
<div>
<h2 class="explanation"> 출발지 : <?php echo $start; ?></h2>
<h2 class="explanation"> 도착지 : <?php echo $desti; ?></h2>
</div>
<br>
  <p align="middle">
    <iframe id="direct_map"
        width="300"
        height="200"
        src="<?php echo $test_url;?>">
    </iframe>
  </p>

</body>
</html>

<script>

</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
