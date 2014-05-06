<?php
class Register extends CI_Model {


var $username;
var $password;
var $classId;


function __construct()
{
$this->load->database();
parent::__construct();
}

	

	###### SET : username (ชื่อผู้ใช้งาน) ######
	function setUsername($username)
	{
		$this->username = $username;
	}

	###### GET : username (ชื่อผู้ใช้งาน) ######
	function getUsername()
	{
		return $this->username;
	}
	
		###### SET : password (รหัสผ่านผู้ใช้งาน) ######
	function setPassword($password)
	{
		$this->password = $password;
	}

	###### GET : password (รหัสผ่านผู้ใช้งาน) ######
	function getPassword()
	{
		return $this->password;
	}
	
		###### SET : classId () ######
	function setClassId($classId)
	{
		$this->classId = $classId;
	}

	###### GET : classId () ######
	function getClassId()
	{
		return $this->classId;
	}

		
	function addDatas(){
		$data = array(
		'username' => $this->username,
		'password' => $this->password,
		'classId' => $this->classId
		);
		$this->db->insert('userid',$data);

	}

	function findClassByPK($id)
{
     $query = $this->db->query('SELECT classId FROM 1');
     $result = $query->result();
     return $result->classId;
}
	
}
?>

