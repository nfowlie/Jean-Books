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
			echo "<form name = 'newBook' method='post'>";
			$getallAuthors = ("SELECT ID, CONCAT(Author_Last_Name, ', ', Author_First_Name) AS Name FROM read_authors WHERE userID = '$_SESSION[id]' ORDER BY Name");
			$getallAuthorsResult = mysqli_query($conn, $getallAuthors);
			
			echo "Select an author who you want to add a book for: <br/>";
			echo "<select name='ddlAuthor' class='textfields' id='ddlAuthor'>";
			echo "<option value='0'>-- Select an Author --</option>";
			while($viewallAuthors = mysqli_fetch_array($getallAuthorsResult))
			{
				echo "<option value='" . $viewallAuthors['ID'] . "'>" . $viewallAuthors['Name'] ."</option>";
			}
			echo "</select>
			<br/>
			<p>Enter in the new book's title: <br/>
			<input type='text' name='newBookTitle'>
			</p>
			<input type='submit' value='Submit'>";
	
	
			$author = $_POST['ddlAuthor'];
			$newBook = $_POST['newBookTitle'];

			if(empty($newBook))
			{
				echo "";
			}
			else
			{
				$submitBookQuery = "INSERT INTO read_books (Author_ID, Book_Title, userID) VALUES('$author', '$newBook', '$_SESSION[id]')";
				if($submitBook = mysqli_query($conn, $submitBookQuery))
				{
					echo "book added";
				}
				else
				{
					"error" . mysqli_error($conn);
				}
			}
			echo '</form>';
		}
		
		?>
	
</body>
</html>