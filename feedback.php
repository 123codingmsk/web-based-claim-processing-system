<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Complain Directory</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() {
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
 var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
 if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_popupMsg(msg) {
 alert(msg);
}
//-->
</script>
<style type="text/css">
</style>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<table width="100%" border="0" align="center" bgcolor="#CCCCCC">
<tr>
<td align="center" valign="top" bgcolor="#FFFFFF"><table width="1000" border="0" id="Main">
<tr>
<td align="center" valign="bottom"><img src="complain-banner-eng.jpg" width="1000"
height="184"></td>
</tr>
<tr>
<td align="center" valign="bottom" bgcolor="#3300CC"><table width="100%" border="0"
cellpadding="5" cellspacing="5">
<tr>
<td align="center" bgcolor="#FFFF00"><a href="index.php">HOME</a></td>
<td align="center" bgcolor="#FFFF00"><a href="aboutus.php">ABOUT US</a></td>
<td align="center" bgcolor="#FFFF00"><a href="newuser.php">NEW USER</a></td>
<td align="center" bgcolor="#FFFF00"><a href="registered-user.php">REGISTERED USER</a></td>
<td align="center" bgcolor="#FFFF00"><a href="complain.php">COMPLAIN</a></td>
<td align="center" bgcolor="#FFFF00"><a href="support.php">SUPPORT</a></td>
<td align="center" bgcolor="#FFFF00"><a href="admin.php">ADMIN</a></td>
<td align="center" bgcolor="#FFFF00"><a href="feedback.php">FEEDBACK</a></td>
<td align="center" bgcolor="#FFFF00"><a href="contactus.php">CONTACT US</a></td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" valign="bottom"><strong>Complain Directory.Com (A System for Online Complain
Management) </strong></td>
</tr>
<tr>
<td align="left" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="12%">&nbsp;</td>
<td width="1%">&nbsp;</td>
<td width="87%">&nbsp;</td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" valign="top"><table width="1000" height="306" border="0" bgcolor="#FFFFFF">
<tr>
<td width="240" height="302" valign="top"><p class="font-verdana"><img src="images.jpg"></p></td>
<td width="10" valign="top" bgcolor="#3300CC">&nbsp;</td>
<td width="736" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0">
<tr>
<td height="23" align="center" valign="top" bgcolor="#FFFF00" class="font-verdana"><strong>
<h1>CONTACT US</h1>
</strong></td>
</tr>
<tr>
<td align="center" valign="top"><hr color="#FF0000"></td>
</tr>
<tr>
<td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" valign="top"><form name="form1" method="post" action="contactus-db.php">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="font-verdana">
<tr>
<td width="19%">&nbsp;</td>
<td width="80%">&nbsp;</td>
<td width="1%">&nbsp;</td>
</tr>
<tr>
<td align="center" valign="top">&nbsp;</td>
<td align="center" valign="top"><table width="100%" border="0">
<tr>
<td>Name</td>
<td width="3%">&nbsp;</td>
<td width="51%"><label for="textfield"></label>
<input type="text" name="f1" id="f1"></td>
</tr>
<tr>
<td>Email Id</td>
<td>&nbsp;</td>
<td><label for="textfield3"></label>
<input type="text" name="f2" id="f2"></td>
</tr>
<tr>
<td>Contact No</td>
<td>&nbsp;</td>
<td><label for="textfield2"></label>
<input type="text" name="f3" id="f3"></td>
</tr>
<tr>
<td>Feedback</td>
<td>&nbsp;</td>
<td><label for="textfield4"></label>
<input type="text" name="f4" id="f4"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="right"><input name="btnsubmit" type="submit" id="btnsubmit"
onClick="MM_popupMsg('Implemented Successfully !! for any query contact us')"
value="Submit"></td>
<td>&nbsp;</td>
<td><input type="reset" name="button2" id="button2" value="Reset"></td>
</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</form></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td align="center" valign="middle" bgcolor="#FFFF00"><br>
<table width="100%" border="0" cellspacing="20" cellpadding="20">
<tr>
<td align="center" valign="middle"><strong><em>All rights reserved | Copyright Protected |
</em></strong></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table>
</body>
</html>

<?php
$f1 = $_POST['f1'];
$f2 = $_POST['f2'];
$f3 = $_POST['f3'];
$f4 = $_POST['f4'];

$con = mysqli_connect("127.0.0.1:3306", "root", "", "complaindirectory");
if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}

$sql = "INSERT INTO feedback_table (f1, f2, f3, f4) VALUES ('$f1', '$f2', '$f3', '$f4')";
$result = mysqli_query($con, $sql);

if ($result) {
    header("location: welcome.php");
} else {
    die("Failed to insert record: " . mysqli_error($con));
}

mysqli_close($con);
?>
