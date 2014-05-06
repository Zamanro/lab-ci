Page <?php echo $pageNumber; ?><br/>
Search : <?php echo $search; ?><br/><br/>

<?php

foreach($students->result()as $row)
{
	echo $row->name .'<br />';
	echo $row->lastName .'<br />';
	echo $row->studentId .'<br />';
	
	
}
?>
