<?php
class Userinfo extends CI_Model {


var $field;
var $fieldValue;



function __construct()
{
parent::__construct();
}

	###### SET : field () ######
	function setField($field)
	{
		$this->field = $field;
	}

	###### GET : field () ######
	function getField()
	{
		return $this->field;
	}
	
		###### SET : fieldValue () ######
	function setFieldValue($fieldValue)
	{
		$this->fieldValue = $fieldValue;
	}

	###### GET : fieldValue () ######
	function getFieldValue()
	{
		return $this->fieldValue;
	}

	
	/*	###### SET : id () ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id () ######
	function getId()
	{
		return $this->id;
	}*/

	
	/*function addDatas2(){
		$data = array(
		'field' => $this->field,
		'fieldValue' => $this->fieldValue
		
		);
		$this->db->insert('userinfo',$data);

	}*/
	function getStudentInfo($id, $field)
	{
     $query = $this->db->query('SELECT fieldValue FROM userinfo WHERE id = "'. $id .'" AND field = "'. $field .'" LIMIT 1');
     $result = $query->result();
     return $result->$field;   
	}

	function addInfo($id, $field, $fieldValue)
	{
	$this->db->query('INSERT INTO userinfo (id, field, fieldValue) VALUES ("'. $id .'", "'. $field .'", "'. $fieldValue .'")');
	}
}
?>
	