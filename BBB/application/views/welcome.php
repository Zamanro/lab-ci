<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<style type="text/css">

body {
	background-image: url(/images/Untitled-1.jpg);
}
.style1 {color: #A9440E}
.style6 {color: #333333; font-size: 14px; }
.style7 {
	color: #3300FF;
	font-size: 16px;
}
.style9 {
	font-size: 14px;
	color: #666666;
}
.style10 {color: #666666}

</style></head>

<body>

  

<table width="1071" height="481" border="0" align="center">
  <tr>
    <td height="109"><table width="1061" border="0" align="center">
      <tr>
        <td width="680" height="106"><img src="/images/Untitled-1.png" width="526" height="101" /> </td>
        <td width="365"><table width="296" height="77" border="0" align="left">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>

    <td height="255"><p>&nbsp;</p>
      <table width="1046" height="369" border="0" align="center">
      <tr>
        <td width="629">&nbsp;</td>
        <td width="46">&nbsp;</td>
        <td width="357"><p><span class="style1">**</span>ลงชื่อเข้าสู่ระบบน๊ะจ๊ะ<span class="style1">**</span></p>
		
		 <?php echo validation_errors(); ?>	
		 
		
		  <form action="/index.php/VerifyLogin" method="post">
		  	
		    <p><span class="style6">Username :</span><br />
		      <input type="text" size="44" id="username" placeholder="username" name="username" required/>
		      <br />
	            <br />
	            <span class="style6">Password :</span><br />
		        <input type="password" size="44" id="passowrd" placeholder="password" name="password" required/>
		        <br />
		        <br />
				<input type="submit" value="Login"/>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<a href="<?=base_url()?>index.php/register/member"> Register </a>
				
	          <!--<img src="/images/text_login.jpg" width="97" height="35" /></p>-->
		   <!-- <p class="style7">&#3621;&#3591;&#3607;&#3632;&#3648;&#3610;&#3637;&#3618;&#3609;&#3626;&#3617;&#3633;&#3588;&#3619;&#3626;&#3617;&#3634;&#3594;&#3636;&#3585;</p>-->
		  </form>
	
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="41" colspan="3">&nbsp;</td>
        </tr>
    </table>
      <p align="center">_____________________________________________________________________________________________________________________________________</p>
      <p align="center"><br />
    </p></td>
  </tr>
</table>
</body>
</html>