
<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password, classId');
   $this -> db -> from('userid');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
   
   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->row();
   }
   else
   {
     return false;
   }
 }
}
?>

