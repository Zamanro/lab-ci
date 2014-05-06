<?php
class Book extends CI_Model {

var $bookname;
var $bookauthor;
var $bookid;

function __construct()
{
parent::__construct();
}

	###### SET : bookname () ######
	function setBookname($bookname)
	{
		$this->bookname = $bookname;
	}

	###### GET : bookname () ######
	function getBookname()
	{
		return $this->bookname;
	}
	
		###### SET : bookauthor () ######
	function setBookauthor($bookauthor)
	{
		$this->bookauthor = $bookauthor;
	}

	###### GET : bookauthor () ######
	function getBookauthor()
	{
		return $this->bookauthor;
	}
	
		###### SET : bookid () ######
	function setBookid($bookid)
	{
		$this->bookid = $bookid;
	}

	###### GET : bookid () ######
	function getBookid()
	{
		return $this->bookid;
	}
	
	function add(){
	
	$data = array(
		'bookname' => $this->bookname,
		'bookauthor' => $this->bookauthor,
		'bookid' => $this->bookid,
		);
		$this->db->insert('bookinfo',$data);
		
		
}
}
?>
