<?php
class Uploadfile extends CI_Model {


var $name;



function __construct()
{
parent::__construct();
}

	###### SET : name (ชื่อไฟล์งาน) ######
	function setName($name)
	{
		$this->name = $name;
	}

	###### GET : name (ชื่อไฟล์งาน) ######
	function getName()
	{
		return $this->name;
	}

	function add()  //เลือกตามฟิลที่ต้องการ
	{
		$data = array('name'=> $this->name);
		
		$this->db->insert('fileupload',$data);
	}
	

}
?>

