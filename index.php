<?php
	include 'login.php';
?>

<html>
<head>
<title>Jean's Books</title>
<link rel="stylesheet" type="text/css" href="/_assets/styles/index.css">
</head>
<body>
		
		<?php 
			include 'logout_button.php';
			include 'nav.php';
			include 'login_form.php';
		?>
		
		<form name="ddlAuthor" method="get">
		
		<?php
				session_start();
				if ($_SESSION['username'])
				{
				echo '<p>Select an author to display their books: </p>';
				$getallAuthors = ("SELECT ID, CONCAT(Author_Last_Name, ', ', Author_First_Name) AS Name FROM read_authors WHERE userID = '$_SESSION[id]' ORDER BY Name");
				$getallAuthorsResult = mysqli_query($conn, $getallAuthors);
				
				echo "<p><select name='ddlAuthor' class='textfields' id='ddlAuthor'>";
				echo "<option value='0'>-- Select an Author --</option>";
				while($viewallAuthors = mysqli_fetch_array($getallAuthorsResult))
				{
					echo "<option value='" . $viewallAuthors['ID'] . "'>" . $viewallAuthors['Name'] ."</option>";
				}
				echo "</select></p>";
				echo "<input type = 'submit' value = 'Submit'>";
				$author = $_GET['ddlAuthor'];
					$query = "SELECT read_books.Book_Title FROM read_books INNER JOIN read_authors ON read_books.Author_ID = read_authors.ID WHERE read_authors.ID LIKE '{$author}'";
					$data = mysqli_query($conn, $query);
					
					$authorLastNameQuery = "SELECT CONCAT(read_authors.Author_Last_Name, ', ', read_authors.Author_First_Name) AS Name FROM read_authors WHERE read_authors.ID LIKE '{$author}'";
					$data2 = mysqli_query($conn, $authorLastNameQuery);
					
					$books = array();
					$authorName = array();
					
					while ($row = mysqli_fetch_array($data2))
					{
						array_push($authorName, $row['Name']);
					}
					
					while ($row = mysqli_fetch_array($data))
					{
						array_push($books, $row["Book_Title"]);
					}
					echo '<br/>';					
					
					echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";  
					foreach($authorName as $row)
					{
						echo "<tr style='font-weight: bold;'><td width='500' align='center'>Books by ". $row . "</td></tr>";
					}
					foreach($books as $row)
					{
						echo '<tr><td width="500" align = center>' . $row . '</td></tr>';
						
					}
				}
				else
				{
					
				}
				
			?>
			
			</form>
</body>
</html>