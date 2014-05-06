<?php

class Deletes extends CI_Model {

function __construct()
{
parent::__construct();
}

	
	function delete($id,$filde){
		$retunvalue=NULL;
		$this->db->from($filde);
		$this->db->where("id",$id);
	if	($this->db->delete()){
		
		$retunvalue = "Deleted";
	

	}
	else{

		$retunvalue = "Can not Delete";
	}

		return $retunvalue;
}
}
?>