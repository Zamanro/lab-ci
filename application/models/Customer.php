<?php
/*
#########################
Model: Book
ผู้พัฒนา: อ.รุ่งฤทธิ์ อนุตรวิรามกุล
พัฒนาเมื่อ: 2014-02-11 11:11 AM
ภายในประกอบด้วย
Database: BookStore
========
Book (books)
========
- bookId
- bookTitle
- bookAuthor
- bookISDN
- bookDate
========
+ add()
+ findByPK($bookId)
+ findByKeyword($field, $value)
+ findByAll()
+ delete()
#########################
*/
class Customer extends CI_Model
{
	var $cusId; //PK
	var $cusName; //ชื่อหนังสือ
	var $cusLname; //ชื่อผู้แต่ง
	var $cusNname; //รหัสหนังสือ
	var $cusTphone; //วันที่หนังสือเข้า
	var $cusMphone;
	var $cusEmail;
	
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	
	###### SET : bookId (PK) ######
	function setCusId($cusId)
	{
		$this->cusId = $cusId;
	}

	###### GET : cusId (PK) ######
	function getCusId()
	{
		return $this->cusId;
	}

	###### SET : cusName (ชื่อหนังสือ) ######
	function setCusName($cusName)
	{
		$this->cusName = $cusName;
	}

	###### GET : cusName (ชื่อหนังสือ) ######
	function getCusName()
	{
		return $this->cusName;
	}

	###### SET : cusLname (ชื่อผู้แต่ง) ######
	function setCusLname($cusLname)
	{
		$this->cusLname = $cusLname;
	}

	###### GET : cusLname (ชื่อผู้แต่ง) ######
	function getCusLname()
	{
		return $this->cusLname;
	}

	###### SET : cusNname (รหัสหนังสือ) ######
	function setCusNname($cusNname)
	{
		$this->cusNname = $cusNname;
	}

	###### GET : cusNname (รหัสหนังสือ) ######
	function getCusNname()
	{
		return $this->cusNname;
	}
	
	###### SET : cusTphone (วันที่หนังสือเข้า) ######
	function setCusTphone($cusTphone)
	{
		$this->cusTphone = $cusTphone;
	}

	###### GET : cusTphone (วันที่หนังสือเข้า) ######
	function getCusTphone()
	{
		return $this->cusTphone;
	}
	###### SET : cusMphone (วันที่หนังสือเข้า) ######
	function setCusMphone($cusMphone)
	{
		$this->cusMphone = $cusMphone;
	}

	###### GET : cusTphone (วันที่หนังสือเข้า) ######
	function getCusMphone()
	{
		return $this->cusMphone;
	}
	###### SET : cusTphone (วันที่หนังสือเข้า) ######
	function setCusEmail($cusEmail)
	{
		$this->cusEmail = $cusEmail;
	}

	###### GET : cusTphone (วันที่หนังสือเข้า) ######
	function getCusEmail()
	{
		return $this->cusEmail;
	}

	function add()
	{
		$this->db->insert('customers', $this);
	}
	
	function findByPK($cusName)
	
	{
		$where = array(
			'cusName'	=> $this->getCusName()
			
			
			
		);
		$query = $this->db->get_where('customers', $where);
		return $query;
	}
	
	
	### $this->Book->findByKeyword('bookTitle', 'แฮร์พอตเตอร์') ###
	function findByKeyword($field, $value)
	{
		## แบบ LIKE ##
		$this->db->like($field, $value);		
		$query = $this->db->get('customers');
		
		## แบบ WHERE ##		
		//$where = array(
		//	$field	=> $value
		//);		
		//$query = $this->db->get_where('books', $where);
		
		return $query;
	}

	function findByAll()
	{
		$query = $this->db->get('customers');
		return $query;
	}
	
	function delete()
	{
		$where = array(
			'cusId'	=> $this->getCusId()
		);	
		$this->db->delete('customers', $where);
	}
}
?>