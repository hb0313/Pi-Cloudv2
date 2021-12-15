<html>
	<head>
		<title>Online Compiler</title>
		<meta name="keywords" content="Online,Compiler,Online Compiler" />
		<link rel="stylesheet" type="text/css" href="styles/style.css" />	
	</head>

	<body>
	<div id="whole">
		<div id="header">
			
			
		</div>
		<div id="content">
			<?php
			session_start();
			 
			if(isset($_SESSION['username']))
			{
				$folder=$_SESSION['username'];
				header("Location: ./$folder/");
			}
			?>

			<div id="login_portal">
			<form action="checklogin.php" method="post">
			<table width="300" border="0" cellspacing="0" cellpadding="2">
			<tr><td>Username<td><td>:<td><td><input type="text" name="username"><td></tr>
			<tr><td>Password<td><td>:<td><td><input type="password" name="password"><td></tr>
			<tr><td colspan="2"><center><input type="submit" value="Login" /></center></td></tr>
			<?php if(isset($_GET['login_attempt']) and ($_GET['login_attempt']==1)) {?>
			<font color="red" class="error">Bad Login or Password. Please try again. <br/></font>
			<?php }?>
			</table>
			</form>
			</div>
		</div>
		<div id="bottom">
			<img class="bottom_bar" src="styles/BITS_bar.png" width="400px" height="6px" alt="bar" /><br /><hr />
			
		</div>
	</div>
	</body>
</html>

