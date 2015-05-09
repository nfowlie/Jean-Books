<?php
	session_start();
	require("_assets/config/dbc.php");
		$username=$_POST['username']; 
		$password=$_POST['password']; 
			if($username && $password)
			{
				$sql="SELECT * FROM members WHERE username='$username'";
				$result=mysqli_query($conn, $sql);
				
				$numrows = mysqli_num_rows($result);

				if($numrows == 1)
				{
					while ($row = mysqli_fetch_assoc($result))
					{
						$dbusername = $row['username'];
						$dbpassword = $row['password'];
						$dbid = $row['id'];
					}
					if ($username == $dbusername && $password == $dbpassword)
					{
						echo "Login Successful!";
						$_SESSION['username'] = $username;
						$_SESSION['id'] = $dbid;
					}
					else
					{
						echo "Incorrect password!";
					}
				}
				else
				{
					echo "User does not exist!";
				}
			}
		?>