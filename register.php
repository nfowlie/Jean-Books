<?php
	require("_assets/config/dbc.php");
	
	include 'nav.php';
?>

<html>
<head>
<title>Jean's Books - Register</title>
<link rel="stylesheet" href="/_assets/styles/index.css">
</head>
<body>
		<table width='300' border='0' align='center' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
			<tr>
				<form action = 'register.php' method='post'>
				<td>
					<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
						<tr>
							<td colspan='3'><strong><Register</strong></td>
						</tr>
						<tr>
							<td width='78'>Username</td>
							<td width='6'>:</td>
							<td width='294'><input name='user' type='text' id='user'></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input name='pass' type='password' id='pass'></td>
						</tr>
						<tr>
							<td>Re-Enter Password</td>
							<td>:</td>
							<td><input name='repeatpass' type='password' id='repeatpass'></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type='submit' name = 'submit' value='Register'></td>
							</form>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	<?php
		$submit = $_POST['submit'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$repeatpass = $_POST['repeatpass'];
		
		if($submit)
		{
			if($user && $pass && $repeatpass)
			{
				if($pass == $repeatpass)
				{
					if(strlen($user)> 65 || strlen($pass)> 65)
					{
						echo "Username and pass must be less than 65 characters!";
						echo "Username is " . strlen($user) . " long!";
						echo "Password is " . strlen($pass) . " long!";
					}
					else
					{
						echo "You have been registered!";
						$regquery = "INSERT INTO members(username, password) VALUES('$user','$pass')";
						$reg = mysqli_query($conn, $regquery);
						header('Refresh: 3;url=index.php');
					}
				}
				else
				{
					echo "Passwords to not match!";
				}
				
			}
			else
			{
				echo "Please fill in all fields!";
			}
		}
	?>
</form>
</body>
</html>