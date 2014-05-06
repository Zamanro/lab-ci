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
        <td width="357"><p><span class="style1"></span></p>


<table>
<tr>

<div>
	<?php echo form_open_multipart("upload/do_upload");?>
	<label for="upload" >Name File : </label>
	<input type="text" name="name" id="name">
	<input type="file" name="upload" size="20">
</div>

<div>

	<td><input type="submit" name="save" value="Upload">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	
	<td><a href="<?=base_url()?>index.php/home"> Logout </a></td>
	

</tr>
</div>
</table>
<?php echo form_close();?>