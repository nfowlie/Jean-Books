<?php
	if ($_SESSION['username'])
	{
		echo 'Welcome ' . $_SESSION['username'] . '!';
	}
	else
	{
		echo "<table width='300' border='0' align='center' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
			<tr>
				<form name='form1' method='post'>
				<td>
					<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
						<tr>
							<td colspan='3'><strong>Member Login </strong></td>
						</tr>
						<tr>
							<td width='78'>Username</td>
							<td width='6'>:</td>
							<td width='294'><input name='username' type='text' id='username'></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input name='password' type='password' id='password'></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type='submit' name='Submit' value='Login'></td>
							</form>
							<form method='post' action='register.html'>
								<td><input type='submit' value='Register'></td>
							</form>
						</tr>
					</table>
				</td>
			</tr>
		</table>";
	}
?>