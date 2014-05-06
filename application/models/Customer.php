<?php
/*
#########################
Model: Book
���Ѳ��: �.���ķ��� ͹ص���������
�Ѳ�������: 2014-02-11 11:11 AM
���㹻�Сͺ����
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
	var $cusName; //����˹ѧ���
	var $cusLname; //���ͼ����
	var $cusNname; //����˹ѧ���
	var $cusTphone; //�ѹ���˹ѧ������
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

	###### SET : cusName (����˹ѧ���) ######
	function setCusName($cusName)
	{
		$this->cusName = $cusName;
	}

	###### GET : cusName (����˹ѧ���) ######
	function getCusName()
	{
		return $this->cusName;
	}

	###### SET : cusLname (���ͼ����) ######
	function setCusLname($cusLname)
	{
		$this->cusLname = $cusLname;
	}

	###### GET : cusLname (���ͼ����) ######
	function getCusLname()
	{
		return $this->cusLname;
	}

	###### SET : cusNname (����˹ѧ���) ######
	function setCusNname($cusNname)
	{
		$this->cusNname = $cusNname;
	}

	###### GET : cusNname (����˹ѧ���) ######
	function getCusNname()
	{
		return $this->cusNname;
	}
	
	###### SET : cusTphone (�ѹ���˹ѧ������) ######
	function setCusTphone($cusTphone)
	{
		$this->cusTphone = $cusTphone;
	}

	###### GET : cusTphone (�ѹ���˹ѧ������) ######
	function getCusTphone()
	{
		return $this->cusTphone;
	}
	###### SET : cusMphone (�ѹ���˹ѧ������) ######
	function setCusMphone($cusMphone)
	{
		$this->cusMphone = $cusMphone;
	}

	###### GET : cusTphone (�ѹ���˹ѧ������) ######
	function getCusMphone()
	{
		return $this->cusMphone;
	}
	###### SET : cusTphone (�ѹ���˹ѧ������) ######
	function setCusEmail($cusEmail)
	{
		$this->cusEmail = $cusEmail;
	}

	###### GET : cusTphone (�ѹ���˹ѧ������) ######
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
	
	
	### $this->Book->findByKeyword('bookTitle', '����͵����') ###
	function findByKeyword($field, $value)
	{
		## Ẻ LIKE ##
		$this->db->like($field, $value);		
		$query = $this->db->get('customers');
		
		## Ẻ WHERE ##		
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