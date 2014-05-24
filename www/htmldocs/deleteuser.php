<?php
if (isset($_GET["id"])){
	require_once("../config/db.php");
	$mysqli = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$myQuery = "DELETE FROM users WHERE user_id = " . $_GET["id"];
	$result = $mysqli->query($myQuery) or die($mysqli->error);

	echo "User ID: ";
	echo $_GET["id"];
	echo " Was Deleted";
	}
	
echo "<form>";
echo "</br>";
echo "<input type=\"button\" onClick=\"parent.location='Dash_Admin_Menu.php'\" value=\"Go Back To Admin Menu\">";
echo "</form>";
?>