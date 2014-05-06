<?php
header('Content-Type: text/html; charset=utf-8');
//ดึงข้อมูลจาก Web อื่นมาใช้งาน
$fp = file_get_contents('http://www.science-ncu.com/newsci/testJson.php');

	//echo $fp;

	

	$json = json_decode($fp);

	//print_r($json);

	foreach($json as $key => $value)
		{
			 echo '<a href="http://www.science-ncu.com/newsci/?q=contents&id='.$value->id .'">';

			 echo $value->id.'@'.$value->title;
			 echo '</a><br>';
		}

?>