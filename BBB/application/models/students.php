<?php

class Students extends CI_Model
{
	var $name; //ชื่อ
	var $lastName; //นามสกุล
	var $studentId; //รหัสนักศึกษา
	var $mobileNumber; //เบอร์โทรศัพน์
	var $birthDate; //วันเกิด

	function __construct()
	{
		parent::__construct();
	}
	###### SET : name (ชื่อ) ######
	function setName($name)
	{
		$this->name = $name;
	}
	###### GET : name (ชื่อ) ######
	function getName()
	{
		return $this->name;
	}
	###### SET : lastName (นามสกุล) ######
	function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	###### GET : lastName (นามสกุล) ######
	function getLastName()
	{
		return $this->lastName;
	}
	###### SET : studentId (รหัสนักศึกษา) ######
	function setStudentId($studentId)
	{
		$this->studentId = $studentId;
	}
	###### GET : studentId (รหัสนักศึกษา) ######
	function getStudentId()
	{
		return $this->studentId;
	}
	###### SET : mobileNumber (เบอร์โทรศัพน์) ######
	function setMobileNumber($mobileNumber)
	{
		$this->mobileNumber = $mobileNumber;
	}
	###### GET : mobileNumber (เบอร์โทรศัพน์) ######
	function getMobileNumber()
	{
		return $this->mobileNumber;
	}
	###### SET : birthDate (วันเกิด) ######
	function setBirthDate($birthDate)
	{
		$this->birthDate = $birthDate;
	}
	###### GET : birthDate (วันเกิด) ######
	function getBirthDate()
	{
		return $this->birthDate;
	}

	function add()
	{
		$data = array(
			'name'			=> $this->name,
			'lastName'		=> $this->lastName,
			'studentId'		=> $this->studentId,
			'mobileNumber'	=> $this->mobileNumber,
			'birthDate'		=> $this->birthDate
		);

	$this->db->insert('student',$data);

	}
	
	function add2()
	{
		

	$this->db->insert('student',$this);

	}
	function getStudent()
	{
		$this->db->select('name,lastName,studentId');
		$query = $this->db->get('student');
		
		return $query;
	}
	
	function getStudent2()
	{
		return $this->db->get('student');
	}

}

?>