 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home1 extends CI_Controller {

		public function index(){
			$this->load->view('vw_home');
		}
		
		public function addbook(){
			

			$this->load->database();
			$this->load->model("book");
			
			$this->book->setBookname($_REQUEST["bookname"]);
			$this->book->setBookauthor($_REQUEST["bookauthor"]);
			$this->book->setBookid($_REQUEST["bookid"]);
			
				$this->load->view('vw_home');

			$this->book->add();
			
		}
	}
?>