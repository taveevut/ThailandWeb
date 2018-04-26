<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "thailand_web";

$connect= mysql_connect($host,$user,$pass,$db);
mysql_db_query($db,"SET NAMES utf8");
if (!$connect) die ( "ไม่สามารถติดต่อกับ MySQL ได้" );
mysql_select_db ( $db, $connect ) or die ( "ไม่สามารถเลือกฐานข้อมูล $db ได้" );

function query_result_array($sql){
  $response = array();
  $q = mysql_query($sql);
  while ($r = mysql_fetch_assoc($q)) {
    $response[] = $r;
  }

  return $response;
}

$x = query_result_array("SELECT * FROM `thailand_webprovinces` ORDER BY `id` ASC");
$item['webthailand']['webprovinces']['title'] = "ท่องเว็บจังหวัดทั่วไทย";
foreach ($x as $value) {
  $p = array(
    1 => 'ภาคเหนือ',
    2 => 'ภาคกลาง',
    3 => 'ภาคอีสาน',
    4 => 'ภาคใต้'
  );
  $item['webthailand']['webprovinces']['data'][$value['geo']]['type'] = $p[$value['geo']];
  $item['webthailand']['webprovinces']['data'][$value['geo']]['data'][$value['id']]['id'] = $value['id'];
  $item['webthailand']['webprovinces']['data'][$value['geo']]['data'][$value['id']]['name'] = $value['name'];
  $item['webthailand']['webprovinces']['data'][$value['geo']]['data'][$value['id']]['link'] = $value['link'];
}

$x = query_result_array("SELECT * FROM `thailand_webnews` ORDER BY `id` ASC");
$item['webthailand']['webnews']['title'] = "ข่าวหนังสือพิมพ์ / ทีวี";
foreach ($x as $value) {
  $p = array(
    1 => 'ข่าวหนังสือพิมพ์ / ทีวี',
    2 => 'ข่าวทีวี'
  );
  $item['webthailand']['webnews']['data'][$value['type']]['type'] = $p[$value['type']];
  $item['webthailand']['webnews']['data'][$value['type']]['data'][$value['id']]['id'] = $value['id'];
  $item['webthailand']['webnews']['data'][$value['type']]['data'][$value['id']]['name'] = $value['name'];
  $item['webthailand']['webnews']['data'][$value['type']]['data'][$value['id']]['link'] = $value['link'];
}

$x = query_result_array("SELECT * FROM `thailand_webeducation` ORDER BY `id` ASC");
$item['webthailand']['webeducation']['title'] = "สถาบันการศึกษา";
foreach ($x as $value) {
  $p = array(
    1 => 'สถาบันราชภัฏ',
    2 => 'อื่นๆ'
  );
  $item['webthailand']['webeducation']['data'][$value['type']]['type'] = $p[$value['type']];
  $item['webthailand']['webeducation']['data'][$value['type']]['data'][$value['id']]['id'] = $value['id'];
  $item['webthailand']['webeducation']['data'][$value['type']]['data'][$value['id']]['name'] = $value['name'];
  $item['webthailand']['webeducation']['data'][$value['type']]['data'][$value['id']]['link'] = $value['link'];
}

$x = query_result_array("SELECT * FROM `thailand_webbank` ORDER BY `id` ASC");
$item['webthailand']['webbank']['title'] = "การเงิน/ธนาคาร";
$item['webthailand']['webbank']['data'] = $x;

$x = query_result_array("SELECT * FROM `thailand_webkrasuang` ORDER BY `id` ASC");
$item['webthailand']['webkrasuang']['title'] = "เว็บไซต์กระทรวง";
$item['webthailand']['webkrasuang']['data'] = $x;

$x = query_result_array("SELECT * FROM `thailand_weboffsetmt` ORDER BY `id` ASC");
$item['webthailand']['weboffsetmt']['title'] = "เว็บไซต์หน่วยงานสังกัด มท.";
$item['webthailand']['weboffsetmt']['data'] = $x;

echo '<pre>';
// print_r($item);
$j = json_encode($item);
// $j = json_decode($j);
// print_r($j);
echo '</pre>';
echo $j;
exit();
