<?php

//สร้าง array ชื่อ $news
$news=array();

//สร้าง 2 ข่าว โดยให้มี หัวข้อข่าว 
$news['0']['title']='TEST 1 TITLE';
$news['0']['desc']='TEST 1 desc';

$news['1']['title']='TEST 2 TITLE';
$news['1']['desc']='TEST 2 desc';

echo json_encode($news);

?>