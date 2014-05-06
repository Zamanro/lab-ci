<?php

class Product extends CI_Model
{
	
	var $productTitle; //นามสกุล
	var $productAuthor; //รหัสนักศึกษา
	var $productCode; //เบอร์โทรศัพน์
	 

	function __construct()
	{
		parent::__construct();
	}
	
	###### SET : lastName (นามสกุล) ######
	function setProductTitle($productTitle)
	{
		$this->productTitle = $productTitle;
	}
	###### GET : lastName (นามสกุล) ######
	function getProductTitle()
	{
		return $this->productTitle;
	}
	###### SET : studentId (รหัสนักศึกษา) ######
	function setProductAuthor($productAuthor)
	{
		$this->productAuthor = $productAuthor;
	}
	###### GET : studentId (รหัสนักศึกษา) ######
	function getProductAuthor()
	{
		return $this->productAuthor;
	}
	###### SET : mobileNumber (เบอร์โทรศัพน์) ######
	function setProductCode($productCode)
	{
		$this->productCode = $productCode;
	}
	###### GET : mobileNumber (เบอร์โทรศัพน์) ######
	function getProductCode()
	{
		return $this->productCode;
	}
	

	function add()
	{
		$data = array(
			
			'productTitle'		=> $this->productTitle,
			'productAuthor'		=> $this->productAuthor,
			'productCode'		=> $this->productCode,
			
		);

	$this->db->insert('student',$data);

	}
	
	

	}
	



?>