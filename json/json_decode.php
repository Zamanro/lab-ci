<?php
//ดึงข้อมูลจาก Web อื่นมาใช้งาน
$fp = file_get_contents('http://test.com/json/json_encode.php');

//echo $fp;

$json = json_decode($fp);

print_r($json);

foreach($json as $key => $value)
{
  echo $value->title .'@'.$value->desc;
  echo '<br>';
}

?>