<?php
header('Content-Type: text/html; charset=utf-8');
//ดึงข้อมูลจาก web อื่นมาเข้าตัวแปร	 fp
$fp = file_get_contents('http://www.test.com/json/json_encodeG4.html');


//echo $fp;

$json = json_decode($fp);
//print_r($json);

foreach ($json as $key => $value)
{
	
	echo $value->docid.' @ '.$value->title.' @ '.$value->dates.' @ '.$value->sender.' @ '.$value->recipient;
	echo '<br>';

}
?>
