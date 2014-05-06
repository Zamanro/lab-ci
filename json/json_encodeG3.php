<?php
mysql_connect("localhost","root","") or die("Cannot connect the Server");       
mysql_select_db("registers") or die("Cannot select database");       
mysql_query("set character set utf8");
?>

<?php
$q="SELECT id , username FROM userid";  
$qr=mysql_query($q);  
	$json_data = array();
		$i=0;
		while($rs=mysql_fetch_array($qr)){
			
				$json_data[$i]['id'] = $rs['id']; 
				$json_data[$i]['username'] = $rs['username'];

				$qname='SELECT fieldValue FROM userinfo WHERE id = "'. $rs['id'] .'" AND field = "name" LIMIT 1' ;  
				$qrname=mysql_query($qname);  
				while($name=mysql_fetch_array($qrname)){  
					   
					$json_data[$i]['name'] = $name['fieldValue'];
				}

				$qlastname='SELECT fieldValue FROM userinfo WHERE id = "'. $rs['id'] .'" AND field = "lastname" LIMIT 1' ;  
				$qrlastname=mysql_query($qlastname);  
				while($lastname=mysql_fetch_array($qrlastname)){  
					   
					$json_data[$i]['lastname'] = $lastname['fieldValue'];
				}

				++$i;
				}
		$json= json_encode($json_data);  
		echo $json;  
?>


				