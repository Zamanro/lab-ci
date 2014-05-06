<?php

	class test extends CI_Model{
		
	function readfile()
		{
			$text = file('Lab0-testcase.php');
			return $text;
		}
	}
?>