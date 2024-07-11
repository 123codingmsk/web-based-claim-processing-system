<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>About Us</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
    <table width="100%" border="0" align="center" bgcolor="#CCCCCC">
        <tr>
            <td align="center" valign="top" bgcolor="#FFFFFF">
                <table width="1000" border="0" id="Main">
                    <tr>
                        <td align="center" valign="bottom">
                            <img src="complain-banner-eng.jpg" width="1000" height="184">
                        </td>
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
                        <td align="center" valign="bottom">
                            <strong>Complain Directory.Com (A System for Online Complain Management)</strong>
                        </td>
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
                                    <td width="240" height="302" valign="top">
                                        <p class="font-verdana">
                                            <img src="images.jpg">
                                        </p>
                                    </td>
                                    <td width="10" valign="top" bgcolor="#3300CC">&nbsp;</td>
                                    <td width="736" valign="top" bgcolor="#FFFFFF">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td height="23" align="center" valign="top" bgcolor="#FFFF00" class="font-verdana">
                                                    <strong><h1>ABOUT US</h1></strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top"><hr color="#FF0000"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <p><strong>This System is developed for</strong></p>
                                                    <p><br>IGNOU, New Delhi</p>
                                                    <p>&nbsp;</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top"><hr color="#FF0000"></td>
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
$f1 = $_POST['f1'];
$f2 = $_POST['f2'];
$f3 = $_POST['f3'];
$f4 = $_POST['f4'];
$f5 = $_POST['f5'];
$f6 = $_POST['f6'];
$f7 = $_POST['f7'];
$f8 = $_POST['f8'];

$con = mysql_connect("127.0.0.1:3306", "root", "");
if (!$con) {
    die('Connection Failed: ' . mysql_error());
}

mysql_select_db("complaindirectory", $con) or die("Could not select database: " . mysql_error());

$sql = "INSERT INTO newuser_table (f1, f2, f3, f4, f5, f6, f7, f8) VALUES ('$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7', '$f8')";
$result = mysql_query($sql, $con) or die("Failed: " . mysql_error());

header("Location: welcome.php");
?>
