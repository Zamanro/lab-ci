<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title></title>
<style type="text/css"></style>


		
		 <?php echo validation_errors(); ?>	
		 
<body>		
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
</body>			
</form>
</html>