<?php
class Uploadfile extends CI_Model {


var $name;



function __construct()
{
parent::__construct();
}

	###### SET : name (�������ҹ) ######
	function setName($name)
	{
		$this->name = $name;
	}

	###### GET : name (�������ҹ) ######
	function getName()
	{
		return $this->name;
	}

	function add()  //���͡�����ŷ���ͧ���
	{
		$data = array('name'=> $this->name);
		
		$this->db->insert('fileupload',$data);
	}
	

}
?>

