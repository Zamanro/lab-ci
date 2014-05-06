<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <head>
   <title></title>
 </head>
 <body>
	
<?php 

	foreach($fileupload->result() as $row)
	{
		 echo $row -> name;
		 echo '<br>';
	}

?>
        
		

  </body>
</html>