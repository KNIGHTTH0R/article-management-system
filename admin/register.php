<?php

if(isset($_SESSION['user'])!="")
{
	header("Location: admin.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$uname = trim($uname);
	$upass = trim($upass);
	
			
	if(mysql_query("INSERT INTO adm(id,pswd) VALUES('$uname','$upass')"))
		{
			header("Location:index.php");
			?>
			
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	
		
}
?>
<!DOCTYPE html>
<head>
<title>Register - Article Management System</title>
<link rel="stylesheet" href="../style.css" type="text/css" />

</head>
<body>
<div id="login-form">
<form method="post">
<table align="right" width="35%" border="0">
<tr>
	<td><h1>Register</h1></td>
</tr>
<tr>
<td><input type="number" name="uname" placeholder="Unique id" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Choose Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Register</button></td>
</tr>
</table>
</form>
</div>
</body>
</html>
