<?php
/*
#########################
�к���ҹ˹ѧ���
���Ѳ��: �.���ķ��� ͹ص���������
�Ѳ�������: 2014-02-11 11:11 AM
���㹻�Сͺ����

- index() ����Ѻ�ʴ����˹���á
- search() ����Ѻ�ʴ��š�ä���˹ѧ���
- add() ����˹ѧ���
- delete($bookId) ź˹ѧ���
#########################
*/
class Home extends CI_Controller 
{
	function __construct()
	{		
		parent::__construct();
		$this->load->model('Customer'); //�� $this->Book ������
	}
	
	## �ʴ��Ť����á ##
	function index()
	{		
		$data['listbooks'] = $this->Customer->findByAll();
		
		$this->load->view('home', $data);		
	}
	
	## ����˹ѧ��͵������ ##
	function search()
	{
		$cusName = $this->input->post('cusName');
		$cusLName = $this->input->post('cusLname');
		
		$data['listbooks'] = $this->Customer->findByKeyword('cusName', $cusName);
		
		$this->load->view('home', $data);		
	}

	## ����˹ѧ��� ##
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
	
	## ź˹ѧ��ͨҡ ���� PK ##
	function delete($cusId)
	{
		$this->Customer->setCusId($cusId);
		$this->Customer->delete();
		
		$this->index();
	}
}

?>