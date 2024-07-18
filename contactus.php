<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Contact Us - Complain Directory</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() {
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
 var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
 if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<table width="100%" border="0" align="center" bgcolor="#CCCCCC">
<tr>
<td align="center" valign="top" bgcolor="#FFFFFF">
<table width="1000" border="0" id="Main">
<tr>
<td align="center" valign="bottom"><img src="sandhyaproj.png" width="1000" height="184"></td>
</tr>
<tr>
<td align="center" valign="bottom" bgcolor="#3300CC">
<table width="100%" border="0" cellpadding="5" cellspacing="5">
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
</table>
</td>
</tr>
<tr>
<td align="center" valign="bottom"><strong>Complain Directory.Com (A System for Online Complain Management)</strong></td>
</tr>
<tr>
<td align="left" valign="bottom">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="12%">&nbsp;</td>
<td width="1%">&nbsp;</td>
<td width="87%">&nbsp;</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" valign="top">
<table width="1000" height="306" border="0" bgcolor="#FFFFFF">
<tr>
<td width="240" height="302" valign="top"><p class="font-verdana"><img src=""></p></td>
<td width="10" valign="top" bgcolor="#3300CC">&nbsp;</td>
<td width="736" valign="top" bgcolor="#FFFFFF">
<table width="100%" border="0">
<tr>
<td height="23" align="center" valign="top" bgcolor="#FFFF00" class="font-verdana"><strong>
<h1>CONTACT US</h1>
</strong></td>
</tr>
<tr>
<td align="center" valign="top"><hr color="#FF0000"></td>
</tr>
<tr>
<td align="center" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" valign="top">
<form name="form1" method="post" action="">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="font-verdana">
<tr>
<td width="3%">&nbsp;</td>
<td width="96%">&nbsp;</td>
<td width="1%">&nbsp;</td>
</tr>
<tr>
<td align="center" valign="top">&nbsp;</td>
<td align="center" valign="top">
<p><strong>This system is developed by Sandhya Rani for any query contact us</strong></p>
<p><strong>Help Line - support@complain.com</strong></p>
</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" valign="middle" bgcolor="#FFFF00">
<br>
<table width="100%" border="0" cellspacing="20" cellpadding="20">
<tr>
<td align="center" valign="middle">
<strong><em>All rights reserved | Copyright Protected</em></strong>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $timestamp = date('Y-m-d H:i:s'); // Current date and time

    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = ""; // Replace with your actual MySQL password
    $dbname = "webclaimprocessing";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_us (name, email, subject, message, timestamp) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $subject, $message, $timestamp);

    // Execute the statement
    if ($stmt->execute()) {
        // Insertion successful
        echo "Your message has been successfully submitted!";
        // Optionally redirect to a thank you page
        // header("Location: thank-you.html");
    } else {
        // Insertion failed
        echo "Error: " . $stmt->error;
    }

    // Close prepared statement
    $stmt->close();
    // Close database connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
