<!-- Kom ihåg att logga in till databasen först! -->
<?php
	include 'connect.php';
	
         $query = "SELECT namn FROM inloggning WHERE namn='$_POST[myUser]' AND password=md5('$_POST[myPassword]')";
         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();
		 session_unset();
         if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST['myUser'];
			  header('Location: index.html.html');
		 }
		 else {
			  header('Location: loginfail.html');
		 }
		
?>