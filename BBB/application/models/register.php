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

	

	###### SET : username (���ͼ����ҹ) ######
	function setUsername($username)
	{
		$this->username = $username;
	}

	###### GET : username (���ͼ����ҹ) ######
	function getUsername()
	{
		return $this->username;
	}
	
		###### SET : password (���ʼ�ҹ�����ҹ) ######
	function setPassword($password)
	{
		$this->password = $password;
	}

	###### GET : password (���ʼ�ҹ�����ҹ) ######
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

