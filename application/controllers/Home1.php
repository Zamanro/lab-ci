<?php
/*
#########################
ระบบร้านหนังสือ
ผู้พัฒนา: อ.รุ่งฤทธิ์ อนุตรวิรามกุล
พัฒนาเมื่อ: 2014-02-11 11:11 AM
ภายในประกอบด้วย

- index() สำหรับแสดงผลในหน้าแรก
- search() สำหรับแสดงผลการค้นหาหนังสือ
- add() เพิ่มหนังสือ
- delete($bookId) ลบหนังสือ
#########################
*/
class Home extends CI_Controller 
{
	function __construct()
	{		
		parent::__construct();
		$this->load->model('Customer'); //ใช้ $this->Book ได้แล้ว
	}
	
	## แสดงผลครั้งแรก ##
	function index()
	{		
		$data['listbooks'] = $this->Customer->findByAll();
		
		$this->load->view('home', $data);		
	}
	
	## ค้นหาหนังสือตามชื่อ ##
	function search()
	{
		$cusName = $this->input->post('cusName');
		$cusLName = $this->input->post('cusLname');
		
		$data['listbooks'] = $this->Customer->findByKeyword('cusName', $cusName);
		
		$this->load->view('home', $data);		
	}

	## เพิ่มหนังสือ ##
	function add()
	{
		/*
		- bookTitle
		- bookAuthor
		- bookISDN
		- bookDate
		*/
		$cusName = $this->input->post('cusName');
		$cusLname = $this->input->post('cusLname');
		$cusNname = $this->input->post('cusNname');
		$cusTphone = $this->input->post('cusTphone');
		$cusMphone = $this->input->post('cusMphone');
		$cusEmail = $this->input->post('cusEmail');
		
		$this->Customer->setCusName($cusName);
		$this->Customer->setCusLname($cusLname);
		$this->Customer->setCusNname($cusNname);
		$this->Customer->setCusTphone($cusTphone);
		$this->Customer->setCusMphone($cusMphone);
		$this->Customer->setCusEmail($cusEmail);
		$this->Customer->add();
		
		$this->index();
	}
	
	## ลบหนังสือจาก รหัส PK ##
	function delete($cusId)
	{
		$this->Customer->setCusId($cusId);
		$this->Customer->delete();
		
		$this->index();
	}
}

?>