<!-- Kom ihåg att logga in till databasen först! -->
<?php
	include 'connect.php';
	//$fjant=md5($_POST['myPassword']);
	$fjant=$_POST['myPassword'];
         $query = "SELECT namn FROM inloggning WHERE namn='$_POST[myUser]' AND password ='$fjant'";
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