<?php 
			if($_SESSION['username'])
			{
				echo "<form method='post' name='logout' action='logout.php'>
					<input type='submit' value='logout' align='right'>
				</form>";
			}
?>