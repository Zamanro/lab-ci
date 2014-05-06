<!DOCTYPE html>
<html>
<head><meta charset="utf-8" />
</head>
<body>
<form method="post" action="/542110011/index.php/home/search">ค้นหาข้อมูลจากชื่อ<input type="text" name="cusName"><input type="submit" name="search" value="ค้นหาข้อมูลจากชื่อ"></form>
<hr />
<form method="post" action="/542110011/index.php/home/search">ค้นหาข้อมูลจากนามสกุล<input type="text" name="cusLname"><input type="submit" name="search" value="ค้นหาข้อมูลจากนามสกุล"></form>
<hr />
รายชื่อลูกค้าทั้งหมด
<hr />
<!-- (รหัสหนังสือ)ISBN - ชื่อหนังสือ : ผู้แต่ง [ลบ] -->
<?php
foreach($listbooks->result() as $row)
{
	echo '(No.'. $row->cusId .')ชื่อ:' . $row->cusName . ' - ' . $row->cusLname . ' : ' . $row->cusNname .':' . $row->cusTphone.':' . $row->cusMphone.':' . $row->cusEmail.' [<a href="/542110011/index.php/home/delete/'. $row->cusId .'">ลบ</a>]<br />';
}
?>
<hr />
<form method="post" action="/542110011/index.php/home/add">
เพิ่มลูกค้า
<br />ชื่อ <input type="text" name="cusName">
<br />นามสกุล <input type="text" name="cusLname">
<br />ชื่อเล่น <input type="text" name="cusNname">
<br />เบอร์โทศัพท์ที่ทำงาน <input type="text" name="cusTphone">
<br />เบอร์โทศัพท์มือถือ <input type="text" name="cusMphone">
<br />อีเมล <input type="text" name="cusEmail">
<br /><input type="submit" name="add" value="เพิ่มลูกค้า"></form>
<hr />
</body>
</html>