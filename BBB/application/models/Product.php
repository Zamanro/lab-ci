<?php

class Product extends CI_Model
{
	
	var $productTitle; //���ʡ��
	var $productAuthor; //���ʹѡ�֡��
	var $productCode; //�������Ѿ��
	 

	function __construct()
	{
		parent::__construct();
	}
	
	###### SET : lastName (���ʡ��) ######
	function setProductTitle($productTitle)
	{
		$this->productTitle = $productTitle;
	}
	###### GET : lastName (���ʡ��) ######
	function getProductTitle()
	{
		return $this->productTitle;
	}
	###### SET : studentId (���ʹѡ�֡��) ######
	function setProductAuthor($productAuthor)
	{
		$this->productAuthor = $productAuthor;
	}
	###### GET : studentId (���ʹѡ�֡��) ######
	function getProductAuthor()
	{
		return $this->productAuthor;
	}
	###### SET : mobileNumber (�������Ѿ��) ######
	function setProductCode($productCode)
	{
		$this->productCode = $productCode;
	}
	###### GET : mobileNumber (�������Ѿ��) ######
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