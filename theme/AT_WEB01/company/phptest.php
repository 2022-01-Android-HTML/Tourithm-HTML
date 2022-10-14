<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

  ini_set("allow_url_fopen", 1);

  include "simple_html_dom.php";

  $data = file_get_html("https://korean.visitkorea.or.kr/detail/ms_detail.do?cotid=8732969c-378e-4103-a0c2-dfd8db152992&big_category=A02&mid_category=A0203&big_area=38");

//  echo $data;

  foreach($data->find('title') as $e){
      echo $e->innertext . '<br>';
  }
include_once(G5_THEME_PATH.'/tail.php');

?>
