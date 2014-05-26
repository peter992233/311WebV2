<html><body>

<?php
	error_reporting(0);
	if (isset($_GET["id"])){
	$UID = $_GET["id"];
	require_once("../config/db.php");
	$mysqli = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$myQuery = "SELECT * FROM users WHERE user_id = '$UID'";
	$result = $mysqli->query($myQuery) or die($mysqli->error);
	
	while ($UDATA = $result->fetch_assoc()) {
		$email = $UDATA['user_email'];
		}
	$newpass=md5('user_name');
	$subject="Login Info";
	$message="Your password is .$newpass";
	$from="From: webhost@Dashboard.com";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  // The email address is valid
	  mail($email, $subject, $message, $from);
	echo "Your password has been email to you";
	}
	else {
	  // The email address is not valid
	  echo "Your email	was not valid. No Password was sent";
	}
	}
	
	echo "<form>";
	echo "</br>";
	echo "<input type=\"button\" onClick=\"parent.location='Dash_Admin_Menu.php'\" value=\"Go Back To Admin Menu\">";
	echo "</form>";
?>
</body>
</html>