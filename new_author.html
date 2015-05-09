<?php
	include 'login.php';
?>

<html>
<head>
<title>Jean's Books</title>
<link rel="stylesheet" href="/_assets/styles/index.css">
</head>
<body>
	<?php
		include 'logout_button.php';
		include 'nav.php';
		include 'login_form.php';
	?>
	<?php
		session_start();
		if($_SESSION['username'])
		{
			echo "<form name = 'newAuthor' method='post'>
			<p>Enter in the new author's Last and First name: </p>
			<p>Last Name:  <input type='text' name='lastName'></p>
			<p>First Name:  <input type='text' name='firstName'></p>
			<input type='submit' value='Submit'>";
		
			$lastName = $_POST["lastName"];
			$firstName = $_POST["firstName"];
			if (empty($lastName) || empty($firstName))
			{
				echo "";
			}
			else
			{
				$submitAuthorQuery = "INSERT INTO read_authors (Author_Last_Name, Author_First_Name, userID) VALUES ('$lastName', '$firstName', '$_SESSION[id]')";
				
				if($submitAuthor = mysqli_query($conn, $submitAuthorQuery))
				{
					echo "<br/>Author successfully added!";
				}
				else
				{
				"error" . mysqli_error($conn);
				}
			}
			echo "</form>";
		}
		?>
</body>
</html>