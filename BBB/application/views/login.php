
<form id="form1" name="form1" method="post" action="/index.php/auth/login">
  <table>
  <tr>
  <td>User Name :</td>
    <label for="textfield"></label>
  <td><input type="text" name="username" id="textfield" required/></td>
  </tr>
  
  <tr>
  <td>Password &nbsp;&nbsp;&nbsp;:</td>
    <label for="textfield2"></label>
    <td><input type="password" name="password" id="textfield2" required/></td>
  </tr>
  
  <tr>
  
  <td><input type="submit" name="Submit" id="Submit" value="Login" /></td>
  
  <td><a href="<?=base_url()?>index.php/register/member"> Register </a></td>
  </tr>
  </table>
</form>


